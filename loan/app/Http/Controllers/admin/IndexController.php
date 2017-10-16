<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 21:29
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Common;
class IndexController extends CommonController{
    //渲染首页
    public function index()
    {
        return view('admin/index/index');
    }
     //渲染首页
    public function top()
    {
        return view('admin/index/top');
    }
    //渲染首页
    public function left()
    {
        return view('admin/index/left');
    }
      //渲染首页
    public function show()
    {
        return view('admin/index/show');
    }

}