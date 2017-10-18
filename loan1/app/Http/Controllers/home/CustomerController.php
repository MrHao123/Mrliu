<?php
/*
Created by PhpStorm.
User: 李晨光
Date: 2017/10/10
Time: 14:28
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

class CustomerController extends Controller{
    //渲染首页
    public function customer()
    {
        return view('home/customer/customer');
    }

}