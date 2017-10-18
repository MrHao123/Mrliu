<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APP\Http\Requests;
use DB;
use App\Http\Controllers\Admin\Common;
class FinancingController extends CommonController
{
	public function lists()
	{
		$data = DB::table('user')
				->Join('licai','user.user_id','=','licai.user_id')
				->Join('info','user.user_id','=','info.user_id')
				->get();
		print_r($data);die;
		return view('admin/financing/lists',['data'=>$data]);
	}
}