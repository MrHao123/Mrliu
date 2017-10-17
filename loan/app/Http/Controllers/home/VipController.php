<?php
/*
Created by PhpStorm.
User: 李晨光
Date: 2017/10/8
Time: 20:53
以塌实编码为荣   以心浮气躁为耻 
以详细注释为荣   以注释残缺为耻 
以勤于测试为荣   以懒于测试为耻 
以简明文档为荣   以冗余文档为耻 
以注重团队为荣   以孤傲自大为耻 
以刻苦钻研为荣   以敷衍了事为耻 
以善于总结为荣   以不思进取为耻 
以质效并进为荣   以单取其一为耻
*/

namespace App\Http\Controllers\Home;
use App\Http\Requests\Request;
use DB;

use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\Controller;

class VipController extends Controller{
    //渲染首页
    public function vip()
    {
        $session = new Session;
        $aa=$session->get("user_id");
        $select=DB::table('info')->where('user_id','=','1')->get();
        $data = DB::table('houseloan')->where('user_id',$aa)->get();
        $term = DB::table('loanterm')->get();
        $rate = DB::table('year_rate')->get();
        $type = DB::table('loantype')->get();

        if($select) {
            return view('home/vip/vip', ['select' => $select,'data' => $data,'term'=>$term,'rate'=>$rate,'type'=>$type]);
        }else{
            return view('home/vip/vip', ['select' => 1]);
        }
    }
    //添加个人信息
    public function information( )
    {
        $session = new Session;
        $user_id=$session->get("user_id");
        $info_name=$_POST['info_name'];
        $info_card=$_POST['info_card'];
        $info_age=$_POST['info_age'];
        $info_sex=$_POST['info_sex'];
        $info_tel=$_POST['info_tel'];
        $info_email=$_POST['info_email'];
        $info_address=$_POST['info_address'];
        $info_newaddress=$_POST['info_newaddress'];
        $info_company=$_POST['info_company'];
        $info_money=$_POST['info_money'];
        $is_del=1;
        $data= DB::table('info')->insert(['user_id'=>$user_id, 'info_name'=>$info_name,'info_card'=>$info_card,'info_age'=>$info_age,'info_sex'=>$info_sex,'info_tel'=>$info_tel,'info_email'=>$info_email,'info_address'=>$info_address, 'info_newaddress'=>$info_newaddress, 'info_company'=>$info_company,'info_money'=>$info_money,'is_del'=>$is_del]);
        if($data){
            echo 1;
        }else{
            echo 0;
        }
        return view('home/vip/vip');
    }
    //贷款信息添加
    public function loan_adddo()
    {
        //实例化session
        $session = new Session;
        $zz=$session->get("user_id");
        //接值
        $type = $_POST['type_id'];
        $house = $_POST['house_id'];
        $edu = $_POST['edu'];
        $loan_time = $_POST['loan_time'];
        $loan_rate = $_POST['loan_rate'];
        $plan = $_POST['plan'];
        $time = date('Y-m-d H:i:s');
        $data = DB::table('loan')->insert(['type_id'=>$type,'user_id'=>$zz,'add_time'=>$time,'house_id'=>$house,'edu'=>$edu,'loan_time'=>$loan_time,'loan_rate'=>$loan_rate,'plan'=>$plan]);
            if($data){
                return view('home/loan/loan_okto');
            }
    }


    //充值 recharge

    public function recharge()
        {
            //实例化session
            print_r($_POST);die;
            
            // $session = new Session;
            // $user_id=$session->get("user_id");
            // //接值
            // $cz_card = $_POST['cz_card'];
            // // $cz_type = $_POST['cz_type'];
            // $cz_pwd = $_POST['cz_pwd'];
            // $cz_addtime = date('Y-m-d H:i:s');
            // $is_del=1;
            // $data = DB::table('recharge')->insert(['cz_card'=>$cz_card,'cz_pwd'=>$cz_pwd,'user_id'=>$user_id,'cz_addtime'=>$cz_addtime,'is_del'=>$is_del]);
            //     if($data){
            //         return view('home/vip/recharge');
            //     }
        }

}













