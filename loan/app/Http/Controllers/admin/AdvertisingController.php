<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/8
 * Time: 21:29
 */
namespace App\Http\Controllers\Admin;
use DB;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Common;
class AdvertisingController extends CommonController{
    //渲染首页
    public function advertisingadd()
    {
        if($_POST){
                $advertising_name=$_POST['advertising_name'];
                 //图片上传
                $file = $_FILES;
                $advertising_img = $file['advertising_img']['name'];
                $advertising_url = "Upload/".$advertising_img;
                move_uploaded_file($file['advertising_img']['tmp_name'],$advertising_url);

                    // $advertising_img=$_FILES['advertising_img']['name'];
                    // $advertising_img = "Upload/".$advertising_img;
                    // move_uploaded_file($advertising_img,$advertising_url);



                    $advertising_desc=$_POST['advertising_desc'];
                    $add=time();
                    $end=$add+3600*24*60;
                    $advertising_addtime=date('Y-m-d H:i:s',$add);
                    $advertising_endtime=date('Y-m-d H:i:s',$end);
                    $advertising_yes_no=1;
                    $is_del=1;

                    $data= DB::table('advertising')->insert([
                        'advertising_name'=>$advertising_name,
                        'advertising_img'=>$advertising_img,
                        'advertising_url'=>$advertising_url,
                        'advertising_desc'=>$advertising_desc,
                        'advertising_addtime'=>$advertising_addtime,
                        'advertising_endtime'=>$advertising_endtime,
                        'advertising_yes_no'=>$advertising_yes_no,
                        'is_del'=>$is_del,
                        ]);
                    
                        if($data){
                          echo "添加成功";
                            return view('admin/advertising/advertisingadd');
                        }else{
                           return view('admin/advertising/advertisingadd');
                        }
            }else{
                    return view('admin/advertising/advertisingadd');
            }
        
            }
 
    public function advertisinglist()
    {

        $data=DB::table('advertising')->where('advertising_yes_no','=','1')->get();

// print_r($data);die();     
   if($data) {
            return view('admin/advertising/advertisinglist', ['data' => $data]);
        }else{
             return view('admin/advertising/advertisinglist');
        }
       
    }

     public function advertisinghistory()
    {
    $data=DB::table('advertising')->where('advertising_yes_no','=','0')->get();

    // print_r($data);die();     
   if($data!='') {
            return view('admin/advertising/advertisinghistory', ['data' => $data]);
        }else{
             return view('admin/advertising/advertisinghistory');
        }
       
    }
   
   

}
