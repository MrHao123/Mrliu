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
        $session=new Session;
        $user_id=1;
        $select=DB::table('lz_info')->where('user_id','=','1')->get();
        if($select) {
            return view('home/vip/vip', ['select' => $select]);
        }else{
            return view('home/vip/vip', ['select' => 1]);
        }
    }
    //添加个人信息
    public function information( )
    {
        print_r($_POST);exit;
        $user_id=1;
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
        $data= DB::table('lz_info')->insert(['user_id'=>$user_id, 'info_name'=>$info_name,'info_card'=>$info_card,'info_age'=>$info_age,'info_sex'=>$info_sex,'info_tel'=>$info_tel,'info_email'=>$info_email,'info_address'=>$info_address, 'info_newaddress'=>$info_newaddress, 'info_company'=>$info_company,'info_money'=>$info_money,'is_del'=>$is_del]);
        if($data){
            echo 1;
        }else{
            echo 0;
        }
        return view('home/vip/vip');
    }

    //用户申请状态
    public function loan_show()
    {

        $session = new Session;
        $aa=$session->get("user_id");
        $data = DB::table('lz_houseloan')->where('user_id',$aa)->lists('house_state');
        return view('home/vip/vip',['data'=>$data]);



        $session=new Session;
        $user_id=1;
        $select=DB::table('lz_info')->where('user_id','=','1')->get();
        if($select) {
            return view('home/vip/vip', ['select' => $select]);
        }else{
            return view('home/vip/vip', ['select' => 1]);
        }
    }

}