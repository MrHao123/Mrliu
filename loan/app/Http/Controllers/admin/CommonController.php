<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 21:29
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use APP\Http\Requests;
class CommonController extends Controller
{
	public function __construct(Request $request)
	{
		//防非法登陆
		

		//权限控制
		$admin_id=1;
		$admin_name='admin';
		//查询管理员角色
		$role=DB::table('admin_role')->where('is_del','=','1')->where('admin_id','=',$admin_id)->get();
	
		$arr=json_decode(json_encode($role),true);
		//查询权限名称
		foreach($arr as $k=>$v)
		{
			$node=DB::select("select node_id from lz_role_node where role_id in(".$v['role_id'].")");
			$nodes=json_decode(json_encode($node),true);
			$node_id=implode(',',array_column($nodes,'node_id'));
			$node_url=DB::select("select node_url from lz_node where node_id in(".$node_id.")");
		}
		$url=\Route::current()->getActionName();//获取到当前控制器/方法
		$node_url=json_decode(json_encode($node_url),true);
		$node_urls=array_column($node_url,'node_url');//拥有的权限控制器
		list($class,$action)=explode('@',$url);
		$controller=substr(strrchr($class,'\\'),1);
		$controller=substr($controller,0,-10);
		$urls=$controller.'@'.$action;
		if($admin_name!='admin')
		{
			if($urls=='Index@index' || $urls=='Index@top'|| $urls=='Index@left' || $urls=='Index@show')
					{
						return true;
					}else{
						if(in_array($urls,$node_urls))
						{
							return true;
						}
						else
						{
							echo '您没有权限访问,3秒后跳转';
							header('refresh:3;url=show');
							die;
						}
					}
		}
		else
		{
			return true;
		}
		
					
			
	}
}