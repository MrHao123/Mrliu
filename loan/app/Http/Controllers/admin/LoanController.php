<?php
/**
 *贷款管理
 *审核前台用户资料 
 *未审核loan/pending;
 *
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class LoanController extends Controller
{
    /*房贷审核展示页面*/
    public function pending()
   {
     $info = DB::table('houseloan')->get();
      // print_r($info);die;
     return view('admin.loan.pending',['info'=>$info]);        
   }
   
   /*状态值修改*/
   public function status(Request $request)
   {
    $house_id=$request->house_id;
    $status=$request->status;
     // echo $house_id.','.$status;
     // die;
    $bool=Db::table('houseloan')->where('house_id',$house_id)->update(['house_state'=>$status]);
    // $data=[];
    if ($bool) 
    {
        $data['state']==0;
        $data['msg']='ok';
    }else{
        $data['state']==1;
        $data['msg']='fail';  
    }

    }

}
?>