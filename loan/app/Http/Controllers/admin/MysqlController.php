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
class MysqlController extends CommonController
{
	//数据库备份
	public function mysqlAdd()
	{
		return view('admin/mysql/add');
	}





}