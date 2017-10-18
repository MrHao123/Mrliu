<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 21:29
 */
namespace App\Http\Controllers\Admin;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use APP\Http\Requests;
class CommonController extends Controller
{
	public function __construct(Request $request)
	{
		//防非法登陆
		$session = new Session;
        $admin=$session->get("sign");
        if (!isset($admin) || empty($admin)) 
        {
 			echo '请先登陆';
			header('refresh:3;url=login');
			die;
		}
		else
		{
				//权限控制
			$admin_id=$admin['admin_id'];
			$admin_name=$admin['admin_name'];
			if($admin_name!='admin')
			{
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
				
					if($urls=='Index@index' || $urls=='Index@top'|| $urls=='Index@left' || $urls=='Index@show')
					{
						return true;
					}
					else
					{
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
	//无限极分类
	//level分级别
	public function recursion($res,$pid=0,$level=0)
	{
		static $arr=[];
		$array=json_decode(json_encode($res),true);
		foreach($array as $k=>$v)
		{
			if($v['p_id']==$pid)
			{
				$v['level']=$level;
				$arr[]=$v;
				$this->recursion($array,$v['node_id'],$level+1);
				
			}
		}
		return $arr;
	}
	//父子级递归
	public function ParentChilds($res,$pid=0)
	{
		$arr=[];
		$array=json_decode(json_encode($res),true);
		foreach($array as $k=>$v)
		{
			if($v['p_id']==$pid)
			{
				$son=$this->ParentChilds($array,$v['node_id']);
				if($son)
				{
					$v[]=$son;
				}
				$arr[] = $v;
			}
		}
		return $arr;
	}
}