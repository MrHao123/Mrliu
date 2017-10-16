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
        $user_pwd = Md5($input['user_pwd']);
        $arr = DB::table('lz_user')->where('user_email',$user_email)->first();
        //密码
        if($arr->user_pwd == $user_pwd)
        {
            $session = new Session;
            $session->set("user_email",$user_email);
            $session->set("user_id",$arr->user_id);
            $ss=$session->get("user_email");
            $aa=$session->get("user_id");
            return redirect('home/index');
        }  
    }
}

