<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 21:29
 */
namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Common;
use Symfony\Component\HttpFoundation\Session\Session;
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
        $session = new Session;
        $admin=$session->get("sign");
        $admin_id=$admin['admin_id'];
        $admin_name=$admin['admin_name'];
        if($admin_name=='admin')
        {
            $node=DB::select("select * from lz_node where is_del =1");
            $rest=$this->ParentChilds($node);
        }
        else
        {
            $role=DB::table('admin_role')->where('admin_id','=',$admin_id)->where('is_del','=','1')->first();
            if($role)
            {
                $role_id=$role->role_id;
                $node=DB::select("select node_id from lz_role_node where role_id in(".$role_id.")");
                $arr=array_column(json_decode(json_encode($node),true),'node_id');
                $node_id=implode(',',$arr);
                $node=DB::select("select * from lz_node where node_id in(".$node_id.")");
                $rest=$this->ParentChilds($node);
            }
            else
            {
                return view('admin/index/left',['data'=>0]);
            }
        }
         return view('admin/index/left',['data'=>$rest]);
        
    }
      //渲染首页
    public function show()
    {
        return view('admin/index/show');
    }

}