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
use App\Http\Controllers\Admin\Common;
class AdminController extends CommonController
{
    //查
    public function adminList(Request $request)
    {
    	if($request->isMethod('get'))
		{ 
			//查询管理员角色
			$Resadmin=DB::table('admin')->join('admin_role', 'admin.admin_id', '=', 'admin_role.admin_id')->where('admin.is_del','=','1')->get();
			$arr=json_decode(json_encode($Resadmin),true);
			//查询权限名称
			foreach($arr as $k=>$v)
			{
				$role_name=DB::select("select role_name from lz_role where role_id in(".$v['role_id'].")");
				 $role_name=json_decode(json_encode($role_name),true);
	             $name=implode(',',array_column($role_name, 'role_name'));	 
	             $arr[$k]['role_name']=$name;
			}
        	return view('admin/admin/list',['data'=>$arr]);
        }
    }
    //增
    public function adminAdd(Request $request)
    {
    
		if($request->isMethod('post'))
		{ 
			$post = $request->input();
			$role_id=implode(',', $post['role_id']);//权限
			//添加权限
	 		$adminid=DB::table('admin')->insertGetId([    
				'admin_name'=>$post['admin_name'],
				'admin_pwd'=>md5($post['admin_pwd']),
				'admin_desc'=>$post['admin_desc'],
				'is_del'=>1,
				'is_SuperAdmin'=>0,  //代表是不是超级管理员
				'admin_ip'=>$_SERVER['REMOTE_ADDR'],
				'addtime'=>date('Y-m-d,H:i:s')
			]);	
			if($adminid)
			{
				//分配角色
				$role_node=DB::table('admin_role')->insert([    
					'role_id'=>$role_id,
					'admin_id'=>$adminid,
					'is_del'=>1,
					'addtime'=>date('Y-m-d,H:i:s')
				]);	
				if($role_node)
				{
					$data['error']=1;
					$data['msg']='管理员添加成功';
				}
				else
				{
					$data['error']=0;
					$data['msg']='角色分配失败,服务器错误';
				}
			}
			else
			{
				$data['error']=0;
				$data['msg']='管理员添加失败,服务器错误';
			}
			echo json_encode($data);
		}
		else
		{
			$arr=$this->role_node();
    		return view('admin/admin/add',['data'=>$arr]);
		}
    }
    //改
    public function nodeSave()
    {

    }
    //删
    public function nodeDel()
    {

    }

    //角色权限(需要优化)
    public function role_node()
    {
		//查询角色权限
		$Resrole=DB::table('role')->join('role_node', 'role.role_id', '=', 'role_node.role_id')->where('role.is_del','=','1')->get();
		$arr=json_decode(json_encode($Resrole),true);
		//查询权限名称
		foreach($arr as $k=>$v)
		{
			$node_name=DB::select("select node_name from lz_node where node_id in(".$v['node_id'].")");
			 $node_names=json_decode(json_encode($node_name),true);
             $name=implode(',',array_column($node_names, 'node_name'));	 
             $arr[$k]['node_name']=$name;
		}
		return $arr;
    }



  
}