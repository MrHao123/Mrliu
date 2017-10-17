<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

     class CommonController extends Controller
     {
        public function __construct()
        {
        //防非法登录
        $user_name=session('user_email');
        if(empty($user_name))
        {
        echo '您还没有登录';
        $url=url('home/index/index');
        header('refresh:3;url='.$url);
        exit();
        }
//        //判断是否拥有权限
//        if($this->checkAccess()==false)
//        {
//        echo '你当前还没有该操作权限,请联系管理员';
//        $url=url('admin/index');
//        header('refresh:3;url='.$url);
//        exit();
//        }

        }
//        public function checkAccess()
//        {
//        /*设置超级管理员*/
//        $user_info=session('user_info');
//        if($user_info->admin_name==config('common.superAdmin'))
//        {
//        return true;
//        }
//        $now_path=\Route::current()->getActionName();
//        list($class,$action)=explode('@',$now_path);
//        $controller=substr(strrchr($class,'\\'),1);
//        $controller=substr($controller,0,-10);
//        if(in_array($controller,config('common.ComController')))
//        {
//        return true;
//        }
//        $accessList=session('accessList');
//        foreach ($accessList as $k=>$v)
//        {
//        if($v->controller==$controller && $v->action==$action)
//        {
//        return true;
//        }
//        }
//        return false;
//
//        }
        }
