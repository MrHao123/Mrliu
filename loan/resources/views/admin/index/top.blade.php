<?php
use Symfony\Component\HttpFoundation\Session\Session;
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头部</title>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/reset.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/common.css')}}"/>
</head>

<body>
<div class="head clearfix">
	<div class="logo">
    	<a href=""><img src="{{asset('admin/images/logo1.png')}}" alt="汉锐会议"/></a>
    </div>
    	<div class="logo" style="margin-top:15px;margin-left: 300px;">
    	<a href="login">欢迎<font style="color: red;font-size: 15px;">
    	<?php 
    	$session = new Session;
        $admin=$session->get("sign");  
        echo $admin['admin_name'];
        ?></font>登陆</a>
    	<a href="login"><font style="color: #c6e7ff;font-size: 15px;">退出登录</font></a>
    </div>
</div>
</body>
</html>
