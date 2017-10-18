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
class RoleController extends CommonController
{
    //查
    public function roleList(Request $request)
    {
    	if($request->isMethod('get'))
		{ 
			//查询角色权限
			$arr=$this->role_node();
        	return view('admin/role/list',['data'=>$arr]);
        }
    }
    //增
    public function roleAdd(Request $request)
    {
    
		if($request->isMethod('post'))
		{ 
			$post = $request->input();
			$node_id=implode(',', $post['node_id']);//权限
			//添加权限
	 		$roleid=DB::table('role')->insertGetId([    
				'role_name'=>$post['role_name'],
				'role_desc'=>$post['role_desc'],
				'is_del'=>1,
				'addtime'=>date('Y-m-d,H:i:s')
			]);	
			if($roleid)
			{
				//分配角色
				$role_node=DB::table('role_node')->insert([    
					'role_id'=>$roleid,
					'node_id'=>$node_id,
					'is_del'=>1,
					'addtime'=>date('Y-m-d,H:i:s')
				]);	
				if($role_node)
				{
					$data['error']=1;
					$data['msg']='权限分配成功';
				}
				else
				{
					$data['error']=0;
					$data['msg']='权限分配失败,服务器错误';
				}
			}
			else
			{
				$data['error']=0;
				$data['msg']='角色添加失败,服务器错误';
			}
			echo json_encode($data);
		}
		else
		{
			$Resnode=DB::table('node')->where('is_del','=','1')->get();
			$rest=$this->ParentChilds($Resnode);
    		return view('admin/role/add',['data'=>$rest]);
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
			$node_name=DB::select("select node_name,p_id from lz_node where node_id in(".$v['node_id'].")");
			 $node_names=json_decode(json_encode($node_name),true);
             $name=array_column($node_names, 'node_name');	 
             $arr[$k]['node_name']=$name;
		}
		return $arr;
    }





    
    public function p($arr)
    {
	   echo '<pre>';
	   print_r($arr);
	    die;
    }
}