<?php
/*
Created by PhpStorm.
User: 李晨光
Date: 2017/10/8
Time: 20:27
以塌实编码为荣   以心浮气躁为耻 
以详细注释为荣   以注释残缺为耻 
以勤于测试为荣   以懒于测试为耻 
以简明文档为荣   以冗余文档为耻 
以注重团队为荣   以孤傲自大为耻 
以刻苦钻研为荣   以敷衍了事为耻 
以善于总结为荣   以不思进取为耻 
以质效并进为荣   以单取其一为耻
*/

namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use APP\Http\Requests;
use Session;
use Storage;
class LoanController extends CommentController
{


    //贷款页面
    public function loan(Request $request)
    {

        if($request->isMethod('get'))
        { 
            $data = DB::table('loantype')->where('is_del','=',1)->get();
            return view('home/loan/loan',['data'=>$data]);
        }
        else
        {
	        $user_id = Session::get("user_id");
	        $user=DB::table('info')->where('user_id','=',$user_id)->where('is_del','=',1)->get();
	        if(!$user)
	        {
	            $error=0;//未实名认证
	            return view('home/loan/loan_mation',['error'=>$error]);

	        }
	        else
	        {
	            $user=Session::get("sign");
	            $user_id=$user['user_id'];
	            $data = DB::table('info')->where('user_id','=',$user_id)->first();
	            if($data)
	            {
	                $arr['error']=1;
	                $arr['msg']='您已实名,现在立即申请借款';
	            }
	            else
	            {
	                $arr['error']=0;
	                $arr['msg']='您未实名,确认完成实名认证';
	            }
	            echo json_encode($arr);
	        }
        }
    }

    //房款信息填写
    public function loan_mation(Request $request)
    {

        $user=Session::get("sign");
        $user_id=$user['user_id'];
        if($request->isMethod('get'))
        { 
            $data = DB::table('info')->where('user_id','=',$user_id)->first();
            if(!$data)
            {
                header('refresh:0;url=index');
            }
            else
            {
                $user=DB::table('loantype')->where('is_del','=',1)->get();
                return view('home/loan/loan_mation',['data'=>$user,'info'=>$data]);
            }
        }
        else
        {
            $post=$request->input();
            $file = $request->file('house_img');
            // 文件是否上传成功
            if($file->isValid()) 
            {
                // 获取文件相关信息
                $originalName = $file->getClientOriginalName(); // 文件原名
                $ext = $file->getClientOriginalExtension();     // 扩展名
                $realPath = $file->getRealPath();   //临时文件的绝对路径
                $type = $file->getClientMimeType();     // image/jpeg
                // 上传文件
                $path ='zhengjianzhao/'. date('YmdHis') . '-' . uniqid() . '.' . $ext;
                // 使用我们新建的uploads本地存储空间（目录）
                $bool=move_uploaded_file($realPath,$path);
                //入库
                list($type_id,$table_name)=explode('/', $post['type_id']);
                if($table_name=='houseloan')
                {
                    $typeName='房产抵押';
                    $house=DB::table($table_name)->insertGetId([    
                       'house_name'=>$post['house_name'],  //房主姓名
                       'house_tel'=>$post['user_tel'],  //房主电话
                       'house_tels'=>$post['user_tels'],  //备用电话
                       'house_yes'=>$post['yes'],//以实名认证状态
                       'house_img'=>$path,//图片
                       'is_del'=>1,    
                       'user_id'=>$user_id,    
                       'house_status'=>0,         //审核状态
                       'house_money'=>0,         //预估金额
                       'addtime'=>date('Y-m-d,H:i:s')
                    ]); 
                    if($house)
                    {
                        header('refresh:0;url=vip');
                    }
                    else
                    {
                         header('refresh:0;url=loan_mation');
                    }
                }
            }
            else
            {
                echo '图片不合格';die;
            }
           
            
        }
    }
 }

//     //第二次审核添加
//     public function credit_add()
//     {
//         $user_id = Session::get("user_id");
//         $credit_name = $_POST['credit_name'];
//         $credit_money = $_POST['credit_money'];
//         $data = DB::table('credit')->insert(['credit_name'=>$credit_name,'credit_money'=>$credit_money,'user_id'=>$user_id]);
//         if($data)
//         {
//             echo DB::update('update lz_houseloan set house_show = 1');
//             echo "<script>alert('申请成功,请到我的账号查看进度');location.href='vip'</script>";
//         }
//     }
//     //贷款页面
//     public function loan_user()
//     {
//         $user_id = Session::get("user_id");
//         $date = DB::table('houseloan')->where('user_id',$user_id)->get();
//         $type = DB::table('loantype')->get();
//         $rate = DB::table('year_rate')->get();
//         $repay = DB::table('repay')->get();
//         return view('home/loan/loan_user',['date'=>$date,'type'=>$type,'rate'=>$rate,'repay'=>$repay]);
//     }



// }






















