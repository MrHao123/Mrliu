<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use Session;

class loginController extends Controller{

    //登陆页面
    public function login()
    {
        return view('home/login/login');
    }
    //登录
    public function login_add(Request $request)
    {
        //接值
        $input = $request->input();
        
        $user_email = $input['user_email'];
//print_r($input);die;
        // echo $user_email;die;
        $user_pwd = Md5($input['user_pwd']);
        $captcha = $input['captcha'];
        if(empty($user_email))
        {
            echo "<script>alert('账号不能为空');location.href='login';</script>";die;
        }
        if(empty($user_pwd))
        {
            echo "<script>alert('密码为空');location.href='login';</script>";die;
        }
        if(Session::get('milkcaptcha') != $captcha)
        {
            echo "<script>alert('验证码错误');location.href='login';</script>";die;
        }
        $arr = DB::table('user')->where('user_email',$user_email)->first();
        //print_r($arr);die;
        //密码
        if($arr->user_pwd != $user_pwd)
        {
            echo "<script>alert('账号和密码不对');location.href='login';</script>";die;
        }else
        {
            Session::put('user_email', $user_email);
            Session::put('user_id', $arr->user_id);
            return redirect('home/index');
        }  
    }
    //验证码
    public function captcha($tmp)
    {
        //生成验证码图片的Builder对象，配置相应属性
        $builder = new CaptchaBuilder;
        //可以设置图片宽高及字体
        $builder->build($width = 100, $height = 40, $font = null);
        //获取验证码的内容
        $phrase = $builder->getPhrase();

        //把内容存入session
        Session::flash('milkcaptcha', $phrase);
        //生成图片
        header("Cache-Control: no-cache, must-revalidate");
        header('Content-Type: image/jpeg');
        $builder->output();
        return response($builder->output())->header('Content-type','image/jpeg');
    }
    //退出
    public function tui()
    {
        Session::forget('user_email');
        return redirect('home/index');
    }
}

