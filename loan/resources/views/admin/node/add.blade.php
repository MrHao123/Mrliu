<html xmlns="http://www.w3.org/1999/xhtml">
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
                <span class="name">权限添加</span>
                <!--当前位置-->
                <div class="position">
                    <a href=""><img src="{{asset('admin/images/icon5.png')}}" alt=""/></a>
                    <a href="">首页</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">会议管理</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">权限添加</a>
                </div>
                <!--当前位置-->
            </div>
            <div class="space_hx">&nbsp;</div>
            <!--新建会议-->
            <form id="form">
            <div class="xjhy">
            <!--高级配置-->
                <ul class="hypz gjpz clearfix" style="height: 300px">
                    <li class="clearfix">
                        <span class="title">权限名称：</span>
                        <div class="li_r">
                            <input class="chang" name="node_name" type="text">
                            <i>*</i>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="title">权限URL：</span>
                        <div class="li_r">
                            <input name="node_url" type="text">
                            <i>*</i>
                        </div>
                    </li>
                     <li class="clearfix">
                        <span class="title">权限级别：</span>
                        <div class="li_r xial">
                            <div class="xial_w">
                                <div class="xial_m">
                                    <input class="duan"  type="text" placeholder="请选择">
                                    <input type="hidden" name='p_id' value="0" class="p_id">
                                    <span>&nbsp;</span>
                                </div>
                                <ul class="xl_ctn">
                                <li node_id=0>顶级列表</li>
                                <?php foreach($data as $k=>$v) :?>
                                    <li node_id=<?=$v->node_id?>><?=$v->node_name?></li>
                                <?php endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="clearfix">
                        <span class="title">权限介绍：</span>
                        <div class="li_r">
                            <textarea name="node_desc" cols="60" rows="8"></textarea>
                        </div>
                    </li>
                <li>

                   <li class="tj_btn" style="margin-top: 100px;">
                        <a href="javascript:;" class="back">返回</a>
                        <a href="javascript:;" class="sub">保存</a>
                    </li>
                </li>
                </ul>
            <!--高级配置-->
            </div>
            </form>
            <!--新建会议-->
        </div>
        <!--会议列表-->
    </div>
</div>
</body>
</html>
<script>
$(function(){
    //表单提交
    $(".sub").click(function(){
         $.ajax({
             cache: true,
             type: "POST",
             url:"nodeAdd",
             data:$('#form').serialize(),// 你的formid
             async: false,
             dataType:'json',
             success:function(data)
             {
                if(data.error==1)
                {
                    alert(data.msg);
                    location.href='nodeList';
                }
                else
                {
                    alert(data.msg)
                }
             }
         });
    })
    //下拉框选择
    $('.xl_ctn li').click(function(){
        var vals=$(this).html();
        $('.duan').val(vals);
        $('.xl_ctn').hide();
       var node_id=$(this).attr('node_id');
       $('.p_id').val(node_id)
    })

})
</script>
