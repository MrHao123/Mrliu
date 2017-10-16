<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
// use Illuminate\Support\Facades\Session;

class LicaiController extends Controller{
	public function licai(){
		
		return view('home/licai/index');
	}
	//网站理财首页
	public function company_licai(){
		 $rate = DB::select('select * from year_rate');
		// echo $users['id'];die;
		 
		return view('home/licai/company_licai',array('rate'=>$rate));
	}
	//网站理财表单 填写
	public function company_licai_add(Request $request){
		$id=$request->input();
		$id=$id['id'];
		// var_dump($id);die;
		//用户选择的利率的月份
		$rate=DB::select("select * from year_rate where id=?",[$id]);

		// var_dump($rate);die;
		//仿session数据
		$data=array('user'=>"小米","pwd"=>"123","balance"=>"10000");
		session(array('data'=>$data));
		//这是存
		$value=session("data");

		//这是取
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
		$expect_money=$_GET['expect_money'];//总钱数（带利息）
		$interest=$expect_money-$money;//利息
		$time=date('Y-m-d H:i:s', time());//当前时间
		$bool = DB::insert('insert into licai(mouth,licai_money,interest,user_id,begin_time) values(?,?,?,?,?)',[$mouth,$money,$interest,"1",$time]);

		//修改用户余额   重新存取session
		// $userinfo=session('data');
		// var_dump($userinfo);die;
		
	}
}