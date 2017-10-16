<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title>左边导航</title>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/reset.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/common.css')}}"/>
<script type="text/javascript" src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
<!--框架高度设置-->
<script type="text/javascript">
$(function(){
	$('.sidenav li').click(function(){
		$(this).siblings('li').removeClass('now');
		$(this).addClass('now');
	});
	
	$('.erji li').click(function(){
		$(this).siblings('li').removeClass('now_li');
		$(this).addClass('now_li');
	});
	
	var main_h = $(window).height();
	$('.sidenav').css('height',main_h+'px');
})
</script>
<!--框架高度设置-->
</head>

<body>
<div id="left_ctn">
    <ul class="sidenav">
    <?php if($data!=0){foreach($data as $k=>$v):?>
        <li class="now">
            <div class="nav_m">
                <span><a><?=$v['node_name']?></a></span>
                <i>&nbsp;</i>
            </div>
            <ul class="erji">
         <?php foreach($v[0] as $key=>$val):?>
                <li class="now_li">
                    <span><a href="<?php list($class,$action)=explode('@',$val['node_url']);echo $action;?>" target="main"><?=$val['node_name']?></a></span>
                </li>
            <?php endforeach;?> 
            </ul>
        </li>
        <?php endforeach;}?>
        <li>
            <div class="nav_m">
                <span><a href="tcxt.html" target="_blank">退出系统</a></span>
            </div>
        </li>
    </ul>
</div>
</body>
</html>
