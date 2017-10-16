<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title>终端召集会议模板</title>
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
    
    var main_w = $(window).width();
    $('.xjhy').css('width',main_w-40+'px');
    
    
    $('.xial_m span').click(function(){
        $(this).parent('.xial_m').siblings('.xl_ctn').toggle();
    });
});
</script>
</head>

<body>
<div id="right_ctn" >
    <div class="right_m" >
        <!--会议列表-->
        <div class="hy_list" >
            <div class="box_t">
                <span class="name">广告位添加</span>
                <!--当前位置-->
                <div class="position">
                    <a href=""><img src="{{asset('admin/images/icon5.png')}}" alt=""/></a>
                    <a href="">首页</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">会议管理</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">管理员添加</a>
                </div>
                <!--当前位置-->
            </div>
            <div class="space_hx">&nbsp;</div>
            <div id="overlay">
            <!--新建会议-->
        
            <form id="form" action="advertisingadd" method="post" enctype="multipart/form-data">
            <div class="xjhy">
            <input type="hidden" name='_token' value="{{csrf_token()}}">
                <ul class="hypz gjpz clearfix" style="height: 300px">
                    <li class="clearfix">
                        <span class="title">广告名称：</span>
                        <div class="li_r">
                            <input class="chang" name="advertising_name" type="text">
                            
                        </div>
                    </li>
                     <li class="clearfix">
                        <span class="title"></span>
                        <div class="li_r">
                           
                            
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="title">广告图片：</span>
                        <div class="li_r">
                            <input class="chang" name="advertising_img" type="file">
                            
                        </div>
                    </li>
                   <li class="clearfix">
                        <span class="title"></span>
                        <div class="li_r">
                           
                            
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="title">广告简介：</span>
                        <div class="li_r">
                            <textarea name="advertising_desc" cols="60" rows="8"></textarea>
                        </div>
                    </li>
               
                <li>
                   <li class="tj_btn" style="margin-top: 100px;">
                        <a href="javascript:;"><input type="reset" value="取消" ></a>
                        <a href="javascript:;"><input type="submit" value="添加" ></a>
                        
                    </li>
                </li>
                </ul>
            <!--高级配置-->
            </div>
            </form>
            </div>
            <!--新建会议-->
        </div>
        <!--会议列表-->
    </div>
</div>
</body>
</html>

