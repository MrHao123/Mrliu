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
class NodeController extends CommonController
{
    //查
    public function nodeList(Request $request)
    {
    	if($request->isMethod('get'))
		{ 
			$Resnode=DB::table('node')->where('is_del','=','1')->get();
        	return view('admin/node/list',['data'=>$Resnode]);
        }
    }
    //增
    public function nodeAdd(Request $request)
    {
    
		if($request->isMethod('post'))
		{ 
			$post = $request->input();
	 		$bool=DB::table('node')->insert([    
				'node_name'=>$post['node_name'],
				'node_url'=>$post['node_url'],
				'node_desc'=>$post['node_desc'],
				'p_id'=>$post['p_id'],
				'is_del'=>1,
				'addtime'=>date('Y-m-d,H:i:s'),
				'user_id'=>1
			]);	
			if($bool)
			{
				$data['error']=1;
				$data['msg']='添加成功';
			}
			else
			{
				$data['error']=0;
				$data['msg']='添加失败,服务器错误';
			}
			echo json_encode($data);
		}
		else
		{
			$Resnode=DB::table('node')->where('is_del','=','1')->get();
    		return view('admin/node/add',['data'=>$Resnode]);
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







    public function p($arr)
    {
	   echo '<pre>';
	   print_r($arr);
	    die;
    }
}