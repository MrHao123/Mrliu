<?php
use Symfony\Component\HttpFoundation\Session\Session;
$session = new Session;
?>

<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>富二贷</title>
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('home/css/18daigao.css')}}" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/18daiding.js"></script>
    {{--遮罩层--}}
    <script type="text/javascript" src="{{asset('mask/js/jquery-1.7.2.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('mask/css/style.css')}}">
    <style>
        #foot{
            position:absolute;
            bottom:0;
            width:100%;
            height:0px;
            text-align:center;
        }
        body,p,div,ul,li,h1,h2,h3,h4,h5,h6{
            margin:0;
            padding: 0;
        }
        body{
            background: #E9E9E9;
        }
        #login{
            width: 400px;
            height: 250px;

            margin:200px auto;
            position: relative;
        }
        #login h1{
            text-align:center;
            position:absolute;
            left:120px;
            top:-40px;
            font-size:21px;
        }
        #login form p{
            text-align: center;
        }
        #user{
            background:url({{asset('mask/images/user.png')}}) rgba(0,0,0,.1) no-repeat;
            width: 200px;
            height: 30px;
            border:solid #ccc 1px;
            border-radius: 3px;
            padding-left: 32px;
            margin-top: 50px;
            margin-bottom: 30px;
        }
        #pwd{
            background: url({{asset('mask/images/pwd.png')}}) rgba(0,0,0,.1) no-repeat;
            width: 200px;
            height: 30px;
            border:solid #ccc 1px;
            border-radius: 3px;
            padding-left: 32px;
            margin-bottom: 30px;
        }
        #submit{
            width: 232px;
            height: 30px;
            background: rgba(0,0,0,.1);
            border:solid #ccc 1px;
            border-radius: 3px;
        }
        #submit:hover{
            cursor: pointer;
            background:#D8D8D8;
        }
        #image{
            background: url("{{asset('mask/images/loginn.jpg')}}") rgba(0,0,0,.1) no-repeat;
        }
        #ziti{
            font-size: 30px;
            color: black;
        }
    </style>
</head>
<body style="position:relative; top:0;" id="top">
<!--头部-->
<div class="herder-top">
    <div class="hd-top w1120">
        <div class="hd-left f-l">
            <h3>服务热线：<strong>176-0088-4292</strong></h3>
        </div>
        <div class="hd-gonggao f-l">
            <marquee style=" height:34px" scrollamount="2" direction="up" >
             
            </marquee >
        </div>
        <ul class="hd-right f-r">
            <li>
                @if(!empty($session->get("user_email")))
                    {{$session->get("user_email")}}
                @else
                    <a href='{{url("home/login")}}'>登录</a>
                @endif


                |<a href="{{url('home/register')}}">注 册</a>
            </li>
        </ul>
        <div style="clear:both;"></div>
    </div>
</div>

<!--切换城市和 nav -->
<div class="qie-nav">
    <div class="q-n-box w1120">
        <dl class="qie f-l">
            <dt class="logo f-l">
            <h1><a href="#" title="富二贷logo"><img src="{{asset('home/images/logo.png')}}"  /></a></h1>
            </dt>
            <div style="clear:both;"></div>
        </dl>
        <ul class="nav f-r">
            <li class="current"><a href="{{url('home/index')}}">首 页</a></li>
            <li><a href="loan">我要贷款</a></li>
            <li><a href="{{url('licai/show')}}">我要理财</a></li>
            <li><a href="customer">安全保障</a></li>
            <li><a href="vip">我的账户</a></li>
            <li><a href="customer">我的客服</a></li>
            <div style="clear:both;"></div>
        </ul>
        <div style="clear:both;"></div>
    </div>
</div>

{{--遮罩层弹框--}}
<div class="cd-popup" >
    <div class="cd-popup-container" id="image">
        <div id="login">
            <br>
            <br>
            <br>
            <br>
            <p id="ziti">用 户 登 录</p>
            <form action="" method="post">
                <p><input type="text" name="user" id="user" placeholder="用户名"></p>
                <p><input type="password" name="passw0rd" id="pwd" placeholder="密码"></p>
                <p><input type="submit" id="submit" value="登录"></p>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    /*弹框JS内容*/
    jQuery(document).ready(function($){
        //打开窗口
        $('.cd-popup-trigger0').on('click', function(event){
            event.preventDefault();
            $('.cd-popup').addClass('is-visible');
            //$(".dialog-addquxiao").hide()
        });
        //关闭窗口
        $('.cd-popup').on('click', function(event){
            if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
                event.preventDefault();
                $(this).removeClass('is-visible');
            }
        });
        //ESC关闭
        $(document).keyup(function(event){
            if(event.which=='27'){
                $('.cd-popup').removeClass('is-visible');
            }
        });


    });
</script>



{{--底部--}}
 <div id="foot">
<div class="footer">
    <div class="ft-info1">
        <div class="ft-if1-box w1120">
            <div class="ft-if1-logo f-l">
                <a href="#"><img src="{{asset('home/images/logo.png')}}" /></a>
            </div>
            <div class="ft-if1-md f-l">

                <div style="clear:both;"></div>
            </div>
            <div class="ft-if1-right f-r">
                <h2>4000-000-000</h2>
                <p>服务时间：9:00-18:00</p>
                <p>邮箱：18dai@163.com</p>
                <div class="ft-r-tu">
                    <a href="#"><img src="{{asset('home/images/sy-38.gif')}}" /></a>
                    <a href="#"><img src="{{asset('home/images/sy-39.gif')}}" /></a>
                </div>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>

</div>

<!--固定侧边栏-->
<ul class="cebian">
    <li><a href="#"><img src="{{asset('home/images/sy-46.gif')}}" /></a></li>
    <li><a href="#"><img src="{{asset('home/images/sy-47.gif')}}" /></a></li>
    <li><a href="#"><img src="{{asset('home/images/sy-48.gif')}}" /></a></li>
    <li><a href="#"><img src="{{asset('home/images/sy-49.gif')}}" /></a></li>
    <li><a href="#"><img src="{{asset('home/images/sy-50.gif')}}" /></a></li>
</ul>
<ul class="ft-if1-dw">
    <li><a href="JavaScript:;"><img src="{{asset('home/images/sy-44.gif')}}" /></a></li>
    <li class="return-top"><a href="#top"><img src="{{asset('home/images/sy-45.gif')}}" /></a></li>
</ul>
 </div>





@section('content')
@show