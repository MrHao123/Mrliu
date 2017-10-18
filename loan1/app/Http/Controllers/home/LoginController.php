<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class loginController extends Controller{

    //登陆页面
    public function login()
    {
        return view('home/login/login');
    }
    public function login_add(Request $request)
    {

        //接值
        $input = $request->input();
        
        $user_email = $input['user_email'];
//print_r($input);die;
        // echo $user_email;die;
        $user_pwd = Md5($input['user_pwd']);
        $arr = DB::table('user')->where('user_email',$user_email)->first();
        //print_r($arr);die;
        //密码
        if($arr->user_pwd == $user_pwd)
        {
            $session = new Session;
            $session->set("user_email",$user_email);
            $session->set("user_id",$arr->user_id);
            return redirect('home/index');
        }
    }
}

