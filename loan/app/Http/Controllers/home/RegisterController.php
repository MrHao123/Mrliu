<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;
use Illuminate\Support\Facades\Input;
use Session;

class RegisterController extends Controller{
    //用户注册页面
    public function register()
    {
        return view('home/login/register');
    }
    //注册
    public function register_add(Request $request)
    {
        $data = $request->input();
        //print_r($data);die;
        $user_pwd = $data['user_pwd'];
        $user_pwd1 = $data['user_pwd1'];
        $user_email = $data['user_email'];
        $cat = $data['cat'];
        if(empty($cat))
        {
            echo "<script>alert('验证码不能为空');history.go(-1)</script>";die;
        }
        if(Session::get('sui') != $cat)
        {
             echo "<script>alert('验证码不正确');history.go(-1)</script>";die;
        }
        $reg = "/^\w+@\w+(\.)cn|com|net$/";
        $reg1 = "/^[0-9a-z]{6,12}$/";
        if(empty($user_email) || empty($user_pwd) || empty($user_pwd1) || empty($cat))
        {
            echo "<script>alert('邮箱或密码不能为空');history.go(-1)</script>";die;
        }
        if(!preg_match($reg,$user_email)) {
            echo "<script>alert('邮箱不符合要求');history.go(-1)</script>";die;
        }
        if(!preg_match($reg1,$user_pwd)) {
            echo "<script>alert('密码不符合要求');history.go(-1)</script>";die;
        }
        if($user_pwd != $user_pwd1)
        {
            echo "<script>alert('密码不一致');history.go(-1)</script>";die;
        }
        $userpwd = Md5($data['user_pwd']);
        $arr = array(
            'user_email'=>$user_email,
            'user_pwd'=>$userpwd,
        );
        //print_r($arr);die;
        //添加
        //var_dump($arr);die;
        $info = DB::table('user')->insert($arr);
        //json_encode($info);die;
        if ($info) 
        {
            echo 1;
        }
    }
    //发邮件
    public function send()
    {
        $user_email = Input::get('user_email');
        $sui = rand(1000,9999);
        Session::set('sui', $sui);
        Mail::raw("验证码为$sui", 
            function($message)use($user_email) {
                $message->from('qq598530247@163.com', '发件人名称'); 
                $message->subject('邮件主题'); 
                $message->to($user_email); 
            });
    }
}