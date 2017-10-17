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
                <span class="name">列表展示</span>
                <!--当前位置-->
                <div class="position">
                    <a href=""><img src="{{asset('admin/images/icon5.png')}}" alt=""/></a>
                    <a href="">首页</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">理财管理</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">列表展示</a>
                </div>
                <!--当前位置-->
            </div>
            <div class="space_hx">&nbsp;</div>
            <!--列表-->
            <form action="" method="post">
            <table cellpadding="0" cellspacing="0" class="list_hy">
              <tr>
                <th scope="col" ><div>编号<a href="" class="up">&nbsp;</a><a href="" class="down">&nbsp;</a></div></th>
                <th scope="col">月份</th>
                <th scope="col">投资钱</th>
                <th scope="col">利息</th>
                <th scope="col">用户</th>
                <th scope="col">时间</th>
                <th scope="col">利率</th>
                <th scope="col">利率</th>
                <th scope="col">操作</th>
              </tr>
              @foreach($data as $k=>$v)
              <tr>
                <td><input type="checkbox"></td>
                <td>{{$v->mouth}}</td>
                <td>{{$v->licai_money}}</td>
                <td>{{$v->interest}}</td>
                <td>{{$v->user_email}}</td>
                <td>{{$v->begin_time}}</td>
                <td>{{$v->rate}}</td>
                <td>{{$v->add_rate}}</td>
                <td>
                    <a href="">删除</a>--<a href="">编辑</a>
                </td>
              </tr>
              @endforeach
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
