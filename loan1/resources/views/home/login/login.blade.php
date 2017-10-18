
@extends('header')
@section('content')
        <!--18贷登录页面内容开始-->
<div class="dl-kuai1 w1118">
    <form action="{{url('home/login_add')}}" method="post">
        <div class="dl-datu1 f-l"><img src="{{asset('home/images/dl-kuai1-datu01.gif')}}" /></div>
        <div class="denglu-right1 f-r">
            <div class="denglu-header">
                <h3>用户登录</h3>
                <p><a href="register">新用户注册</a></p>
            </div>
            <ul class="denglu-ul1">
                <input type="hidden" name='_token' value="{{csrf_token()}}">
                <li><input type="text" placeholder="请输入邮箱" class="denglu-ipt1" name="user_email" /></li>
                <li><input type="password" placeholder="请输入您的密码" class="denglu-ipt1" name="user_pwd"/></li>
                <li class="denglu-li5">
                    <!--  <input style=" width :100px" placeholder="请输入验证码" type="text" required="required" name="captcha" id="code" class="lg_input02 lg_input">
                      <a href="javascript:void(0)" onclick="document.getElementById('home/captcha').src='{{URL('home/captcha/1')}}'+Math.random()"><img src="{{URL('captcha/1')}}" name="captcha" id="captcha" alt="验证码" title="看不清，换一张"> </a> -->
                    <div style="clear:both;"></div>
                </li>
                <li>
                    <div class="check">
                        <input type="checkbox" />
                        <span>两周内自动登录</span>
                        <div style="clear:both;"></div>
                    </div>
                    <a href="#" class="check-a">忘记密码？</a>
                    <div style="clear:both;"></div>
                </li>
            </ul>
            <button class="denglu-btn1">登 录</button>
        </div>
    </form>
</div>

</body>
</html>
@endsection
