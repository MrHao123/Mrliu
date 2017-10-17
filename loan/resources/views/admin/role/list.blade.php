<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title>GK注册信息</title>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/reset.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/common.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/thems.css')}}">
<script type="text/javascript" src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript">
$(function(){
	//自适应屏幕宽度
	window.onresize=function(){ location=location }; 
	
	var main_h = $(window).height();
	$('.hy_list').css('height',main_h-45+'px');
	
	var search_w = $(window).width()-40;
	$('.search').css('width',search_w+'px');
	$('.list_hy').css('width',search_w+'px');
});
</script>
<!--框架高度设置-->
</head>

<body>
<div id="right_ctn">
	<div class="right_m">
		<!--会议列表-->
        <div class="hy_list">
        	<div class="box_t">
            	<span class="name">权限列表</span>
                <!--当前位置-->
                <div class="position">
                	<a href=""><img src="{{asset('admin/images/icon5.png')}}" alt=""/></a>
                    <a href="">首页</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">系统诊断</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">GK注册信息</a>
                </div>
                <!--当前位置-->
            </div>
            <div class="space_hx">&nbsp;</div>
            <!--列表-->
            <form action="" method="post">
            <table cellpadding="0" cellspacing="0" class="list_hy">
              <tr>
                <th scope="col" ><div>角色编号<a href="" class="up">&nbsp;</a><a href="" class="down">&nbsp;</a></div></th>
                <th scope="col">角色权限</th>
                <th scope="col">角色名称</th>
                <th scope="col">添加时间</th>
                <th scope="col">角色介绍</th>
                <th scope="col">操作</th>
              </tr>
              <?php foreach($data as $k=>$v) :?>
              <tr>
                <td><?=$v['role_id'];?></td>
                <td><?=$v['node_name'];?></td>
                <td><?=$v['role_name'];?></td>
                <td><?=$v['addtime'];?></td>
                <td><?=$v['role_desc'];?></td>
                <td>
                    <a href="">删除</a>--<a href="">编辑</a>
                </td>
              </tr>
              <?php endforeach;?>
            </table>
            <!--列表-->
            <!--右边底部-->
            <div class="r_foot">
            	<div class="r_foot_m">
                <a href="" class="btn">刷新</a>
                </div>
            </div>
            </form>
            <!--右边底部-->
        </div>
        <!--会议列表-->
    </div>
</div>
</body>
</html>
