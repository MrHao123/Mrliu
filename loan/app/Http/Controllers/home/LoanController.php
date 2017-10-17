<?php
/*
Created by PhpStorm.
User: 李晨光
Date: 2017/10/8
Time: 20:27
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
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;
class LoanController extends CommentController{

    //贷款页面
    public function loan()
    {
        $data = DB::table('loantype')->get();
        return view('home/loan/loan',['data'=>$data]);
    }

    //房款信息填写
    public function loan_mation()
    {
        $id   = $_GET['id'];
        $data = DB::table('loantype')->where('type_id','=',$id)->get();
        return view('home/loan/loan_mation',['data'=>$data]);
    }

    //房款信息添加
    public function loan_add()
    {

        $session = new Session;
        $user_id=$session->get("user_id");
        //图片上传
        $file = $_FILES;
        $name =  $file['house_img']['name'];
        $new_name = rand(time($name),1000);
        $path = "Upload/".$new_name.".jpg";
        move_uploaded_file($file['house_img']['tmp_name'],$path);

        $file = $_FILES;
        $name = $file['house_prove']['name'];
        $new_name = rand(time($name),1000);
        $path2 = "Upload/".$new_name.".jpg";
        move_uploaded_file($file['house_prove']['tmp_name'],$path2);

        $time = date('Y-m-d H:i:s');
        $type_id = $_POST['type_id'];
        $house_name = $_POST['house_name'];
        $house_name_relatives = $_POST['house_name_relatives'];
        $house_relationship = $_POST['house_relationship'];
        $house_relationship_tel = $_POST['house_relationship_tel'];
        $house_address = $_POST['house_address'];
        $re=DB::table('houseloan')->insert(['type_id'=>$type_id,'house_name'=>$house_name,'house_name_relatives'=>$house_name_relatives,'house_relationship'=>$house_relationship,'house_relationship_tel'=>$house_relationship_tel,'house_img'=>$path,'house_prove'=>$path2,'house_address'=>$house_address,'house_addtime'=>$time,'user_id'=>$user_id]);
        if($re){

            return view('home/loan/loan_ok');
        }
    }
    //第二次审核
    public function loan_user()
    {
        return view('home/loan/loan_user');
    }
    //第二次审核添加
    public function credit_add()
    {
        $session = new Session;
        $user_id=$session->get("user_id");
        $credit_name = $_POST['credit_name'];
        $credit_money = $_POST['credit_money'];
        $data = DB::table('credit')->insert(['credit_name'=>$credit_name,'credit_money'=>$credit_money,'user_id'=>$user_id]);

        if($data)
        {
            echo "<script>alert('申请成功,请到我的账号查看进度');location.href='loan_okto'</script>";
        }
    }
    //
    public function loan_okto()
    {
        $reg = DB::table('credit')->get();
        return view('home/loan/loan_okto',['reg'=>$reg]);
    }


}






















