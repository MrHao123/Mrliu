<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
// use Illuminate\Support\Facades\Session;

class LicaiController extends Controller{
	//让用户选择理财类型
	public function licai(){
		
		return view('home/licai/index');
	}
	//网站理财首页
	public function company_licai(){
		 $rate = DB::select('select * from lz_year_rate');
		 // var_dump($rate);die;
		 
		return view('home/licai/company_licai',array('rate'=>$rate));
	}
	//网站理财表单 填写
	public function company_licai_add(Request $request){
		$id=$request->input();
		$id=$id['id'];
		// var_dump($id);die;
		//用户选择的利率的月份
		$rate=DB::select("select * from lz_year_rate where id=?",[$id]);

		// var_dump($rate);die;
		// 仿session数据
		$data=array('user'=>"小米","pwd"=>"123","balance"=>"10000");
		$Session=new Session();
		Session::put('key',$data);
		
		//这是取
			$value=Session::get("key");
			// var_dump($value);die;
		// var_dump($value);die;
// var_dump($value);die;
		// $value="";
		// var_dump($value);die;
		return view("home/licai/company_licai_add",array("userinfo"=>$value,"rate"=>$rate));
	}
	//预估利息
	public function valuetion(){
		$rate=$_POST['rate'];
		$add_rate=$_POST['add_rate'];
		$mouth=$_POST['mouth'];
		$money=$_POST['money'];

		$year_rate=($rate+$add_rate)/100;//总利息
		$year=$mouth/12;//一共多少年
		$sum_rate=round($year_rate*$year*$money,2);//规定几个月的利息
		return $sum_rate;

		
	}
	//理财入库
	public function company_licai_adddo(){
		$money=$_GET['money'];//本金
		$mouth=$_GET['mouth'];//月份
		$rate=$_GET['rate'];//利率
		$add_rate=$_GET['add_rate'];
		$expect_money=$_GET['expect_money'];//总钱数（带利息）
		$interest=$expect_money-$money;//利息
	
		$bool = DB::insert('insert into lz_licai(mouth,licai_money,interest,user_id,begin_time,rate,add_rate) values(?,?,?,?,?,?,?)',[$mouth,$money,$interest,"1",time(),$rate,$add_rate]);

		//修改用户余额   重新存取session
		
		if($bool){
			// return view('home/vip');
			// ->with('dos', $new_do);
		}
		
	}

	//个人理财
	public function personal(Request $request){

		if($request->input()){
			
			$tfs=$request->input("tfs");//投标方式
			if($tfs==0){
				$tfs=array(1,2);
			}else{

			}
			$mouth1=$request->input("mouth1");//投标期限
			if($mouth1==0){
				$mouth1=array("1,3,6,9,12,24");
			}
			$h_way=$request->input("h_way");//还款方式
			if($h_way==0){
				$h_way=array(1,2);
			}
			$zhao_status=$request->input("zhao_status");//招标状态
			if($zhao_status==0){
				$zhao_status=array(1,2,3);
			}

			$perPage = 2;//每页显示条数
			if ($request->has('page')) {
			    $current_page = $request->input('page');
			    $current_page = $current_page <= 0 ? 1 :$current_page;
			  } else {
			        $current_page = 1;
			}
			$tfs=array();
			$tfs[]="1,2";
			// $tfs[]=2;
			// var_dump($tfs);die;
			
		 	$offset = ( $current_page - 1 ) * $perPage;//偏移量
			$show=DB::table("loan")
		 			->leftJoin("loan_type","loan.type_id"," = ","loan_type.id")
		 			->leftjoin("repay","loan.repay_id","=","repay.repay_id")
		 			// ->offset($offset)
		 			// ->limit($perPage)
		 			->where("is_full",0)
		 			->whereIn("loan.type_id",$tfs)
		 			// ->whereIn("loan_time",$mouth1)
		 			// ->whereIn("loan.repay_id",$h_way)
		 			// ->whereIn("loan.zhao_status",$zhao_status)
		 			->get();
		 			
		 			var_dump($show);die;
		}else{
			$perPage = 2;//每页显示条数
			if ($request->has('page')) {
			    $current_page = $request->input('page');
			    $current_page = $current_page <= 0 ? 1 :$current_page;
			  } else {
			        $current_page = 1;
			  }
			 $offset = ( $current_page - 1 ) * $perPage;//偏移量
			 //查询某页的数据
			 $show=DB::table("loan")
			 			->leftJoin("loan_type","loan.type_id"," = ","loan_type.id")
			 			->leftjoin("repay","loan.repay_id","=","repay.repay_id")
			 			->offset($offset)
			 			->limit($perPage)
			 			->where("is_full",0)
			 			->get();
		}
		
		
		 // var_dump($show);
		 //查询一共有多少条数据
		 $sum=DB::table("loan")->where("is_full",0)->count();
		 //计算有多少页
		 $sum_page=ceil($sum/$perPage);
		 
		return view("home/licai/personal",array("show"=>$show,"sum_page"=>$sum_page,"current_page"=>$current_page));
	}

	//个人理财 出借
	public function personal_show(){

		$loan_id=$_GET['loan_id'];
		// echo $loan_id;die;
		$show=DB::table("loan")
		 		->leftJoin("loan_type","loan.type_id"," = ","loan_type.id")
		 		->leftjoin("repay","loan.repay_id","=","repay.repay_id")
		 		->where("loan_id",$loan_id)
		 		->get();
		 		//贷款用户剩余钱数
		$personal=DB::table("personal_licai")
			  		->leftjoin("loan","personal_licai.loan_id","=","loan.loan_id")
			  		->where("personal_licai.loan_id",$loan_id)
			  		->get();
		//计算贷款用户已筹到多少钱
		$sum=0;
		foreach($personal as $val){
			$sum+=$val->licai_money;
		}
		//贷款用户需要多少钱
		$need_money=$show[0]->edu;
		//剩余多少钱没有筹到
		$surplus_money=$need_money-$sum;
		
		// var_dump($personal);die;
		// $data=array('user'=>"小米","pwd"=>"123","balance"=>"10000");
		// Session::put('key',$data);
		 $userinfo=Session::get("key");
		// var_dump($userinfo);die;
		return view("home/licai/personal_show",array("show"=>$show,"userinfo"=>$userinfo,"surplus_money"=>$surplus_money));
	}
	//个人理财估值
	public function personal_valuetion(){
		$rate=$_POST['rate'];
		$mouth=$_POST['mouth'];
		$money=$_POST['money'];

		$year_rate=($rate)/100;//总利息
		$year=$mouth/12;//一共多少年
		$sum_rate=round($year_rate*$year*$money,2);//规定几个月的利息
		return $sum_rate;

	}
	//个人理财入库
	public function personal_add(){
			$money=$_GET['money'];//本金
			$mouth=$_GET['mouth'];//月份
			$rate=$_GET['rate'];//利率
			$loan_id=$_GET['loan_id'];
			$expect_money=$_GET['expect_money'];//总钱数（带利息）
			$interest=$expect_money-$money;//利息
			$count_money=$_GET['count_money'];//贷款者需要的钱数
			$user_id="1";
			$is_full=$_GET['is_full'];//是否满标
			
			$bool = DB::insert('insert into personal_licai(mouth,licai_money,lixi,user_id,add_time,rate,loan_id,get_money) values(?,?,?,?,?,?,?,?)',[$mouth,$money,$interest,$user_id,time(),$rate,$loan_id,$expect_money]);
			if($bool){
				//修改session里面的余额 和数据库里面的余额 
				//判断是否满标
				if($is_full==1){
					//向个人贷款表修改数据
					DB::table("loan")->where("loan_id",$loan_id)->update(array("is_full"=>$is_full));
				}
			}else{
				echo "失败";
			}

	}
}