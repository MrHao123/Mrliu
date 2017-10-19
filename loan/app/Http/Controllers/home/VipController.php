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
use Session;
use App\Http\Controllers\Controller;

class VipController extends Controller{
    //渲染首页
    public function vip()
    {
        $user_id=Session::get("user_id");
        // 查询当前用户个人信息
        $select=DB::table('info')->where('user_id','=',$user_id)->get();
        // 查询当前用借款信息
        $data = DB::table('houseloan')->where('user_id',$user_id)->get();

        if($select) {
             return view('home/vip/vip',['select' => $select] ,['data' => $data]);
        }else{
             return view('home/vip/vip', ['select' =>1]);
        }
        return view('home/vip/vip');
    }
    //个人信息完善
 public function information( )
    {
//        print_r($_POST);
        $user_id=Session::get("user_id");
        $info_name=$_POST['info_name'];
        $info_card=$_POST['info_card'];
        $info_age=$_POST['info_age'];
        $info_sex=$_POST['info_sex'];
        $info_tel=$_POST['info_tel'];
        $info_email=$_POST['info_email'];
        $info_address=$_POST['info_address'];
        $info_newaddress=$_POST['info_newaddress'];
        $info_bankcard=$_POST['info_bankcard'];
        $info_money=0;
        $info_pwd=$_POST['info_pwd'];
        $is_del=1;
        $data= DB::table('info')->insert([
            'user_id'=>$user_id,
            'info_name'=>$info_name,
            'info_card'=>$info_card,
            'info_age'=>$info_age,
            'info_sex'=>$info_sex,
            'info_tel'=>$info_tel,
            'info_email'=>$info_email,
            'info_address'=>$info_address,
            'info_newaddress'=>$info_newaddress,
            'info_bankcard'=>$info_bankcard,
            'info_money'=>$info_money,
            'info_pwd'=>$info_pwd,
            'is_del'=>$is_del
        ]);
        if($data){
            echo 1;
        }else{
            echo 0;
        }
        return view('home/vip/vip');
    }


    


    //充值 recharge
     public function recharge()
     {
            $user_id=Session::get("user_id");
            $cz_card = $_POST['cz_card'];
            $cz_money = $_POST['cz_money'];
            $cz_pwd = $_POST['cz_pwd'];
            $p = DB::table('info')->where('info_pwd',$cz_pwd )->where('info_bankcard',$cz_card)->first();
             $money=$p->info_money;
             $upmoney=$cz_money+$money;
//                print_r($upmoney);die;

            if($p){
                $data=DB::table('info')
                    ->where('user_id',$user_id)
                    ->update(['info_money'=>$upmoney]);
                if($data){
                    echo 1;
                }else{
                    echo 0;
                }
            }else{
                return view('home/vip/vip');
            }

         }

}













