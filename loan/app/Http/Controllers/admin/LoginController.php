<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 21:29
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class LoginController extends Controller{
    //渲染首页
    public function login()
    {
        return view('admin/login/login');
    }

}