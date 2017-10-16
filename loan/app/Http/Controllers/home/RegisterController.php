<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;

class RegisterController extends Controller{
    //用户注册页面
    public function register()
    {
        return view('home/login/register');
    }
    public function register_add(Request $request)
    {
        
    	$data = $request->input();
        $user_pwd = $data['user_pwd'];
        $user_email = $data['user_email'];
        $reg = "/^\w+@\w+(\.)cn|com|net$/";
        $reg1 = "/^[0-9a-z]{6,12}$/";
        if(empty($user_email) || empty($user_pwd))
        {
            echo "<script>alert('邮箱或密码不能为空');history.go(-1)</script>";die;
        }
        if(!preg_match($reg,$user_email)) {
            echo "<script>alert('邮箱不符合要求');history.go(-1)</script>";die;
        }
        if(!preg_match($reg1,$user_pwd)) {
            echo "<script>alert('密码不符合要求');history.go(-1)</script>";die;
        }
        $userpwd = Md5($data['user_pwd']);
        $arr = array(
            'user_email'=>$user_email,
            'user_pwd'=>$userpwd,
        );
        $info = DB::table('lz_user')->insert($arr);
        if ($info) 
        {
            return redirect('home/login');
        }
    }
    public function mail()
    {
       Mail::raw('邮件内容', 
            function($message) {
                $message->from('17600884292@163.com', '发件人名称');
                $message->subject('邮件主题'); 
                $message->to('965690237@qq.com'); 
            });
    }
}