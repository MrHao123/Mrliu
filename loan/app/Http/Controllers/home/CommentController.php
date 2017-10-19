<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
class CommentController extends Controller
{
    public function __construct()
    {
       //防非法登录
        $a= Session::get("user_email");
       if (empty($a)) 
       {
          echo '您还没有登录,3秒后自动跳转';
          $url = url('home/login');
          header('refresh:3;url=' . $url);
          exit();
       }
    }
}
