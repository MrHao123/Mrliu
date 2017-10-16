<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 21:29
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use APP\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;
class LoginController extends Controller{
    //渲染首页
    public function login(Request $request)
    {
    	if($request->isMethod('post'))
		{ 
			$post = $request->input();
			$res=DB::table('admin')->where('admin_name','=',$post['admin_name'])->where('admin_pwd','=',md5($post['admin_pwd']))->get();
			$arr=json_decode(json_encode($res),true);
			if($res)
			{
				$arr=['admin_id'=>$arr[0]['admin_id'],'admin_name'=>$arr[0]['admin_name']];
				$session = new Session;
            	$session->set("sign",$arr);
				$data['error']=1;
				$data['msg']='登陆成功';
			}
			else
			{
				$data['error']=0;
				$data['msg']='账号或密码错误,请核对后进行登陆。';
			}
			echo json_encode($data);
		}
		else
		{
 			return view('admin/login/login');
		}
    }


}