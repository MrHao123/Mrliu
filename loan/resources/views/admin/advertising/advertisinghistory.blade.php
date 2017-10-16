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
            	<span class="name">过期广告</span>
                <!--当前位置-->
                <div class="position">
                	<a href=""><img src="{{asset('admin/images/icon5.png')}}" alt=""/></a>
                    <a href="">首页</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">系统诊断</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">管理员列表</a>
                </div>
                <!--当前位置-->
            </div>
            <div class="space_hx">&nbsp;</div>
            <!--列表-->
            <?php if($data!=''){ ?>
             <form action="" method="post">
            <table cellpadding="0" cellspacing="0" class="list_hy">
              <tr>
                <th scope="col" >过期广告名称</th>
                <th scope="col">过期广告图片</th>
                <th scope="col">过期广告url</th>
                <th scope="col">过期广告简介</th>
             <?php foreach ($data as $val) : ?>
                <tr>
                <th><?php echo $val->advertising_name; ?></th>
                <th><?php echo $val->advertising_img; ?></th>
                <th><?php echo $val->advertising_url; ?></th>
                <th><?php echo $val->advertising_desc; ?></th>
                </tr>
                <?php endforeach ?>
            </table>
            <!--列表-->
            <!--右边底部-->
            <div class="r_foot">
                <div class="r_foot_m">
                <a href="" class="btn">刷新</a>
                </div>
            </div>
            </form>
            <?php }?>
            <br><br><br><br><br>
            <h1 style="color:red;font-size:36px;" >对不起网站当前尚未有过期广告。。。。。</h1>
           
      
            
            <!--右边底部-->
        </div>
        <!--会议列表-->
    </div>
</div>
</body>
</html>
