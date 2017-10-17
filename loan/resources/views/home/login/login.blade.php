
@extends('header')
@section('content')
        <!--18贷登录页面内容开始-->
<div class="dl-kuai1 w1118">
    <form action="{{url('home/login_add')}}" method="get">
    <div class="dl-datu1 f-l"><img src="{{asset('home/images/dl-kuai1-datu01.gif')}}" /></div>
    <div class="denglu-right1 f-r">
        <div class="denglu-header">
            <h3>用户登录</h3>
            <p><a href="#">新用户注册</a></p>
        </div>
        <ul class="denglu-ul1">
            <input type="hidden" name='_token' value="{{csrf_token()}}">
            <li><input type="text" placeholder="请输入邮箱" class="denglu-ipt1" name="user_email" /></li>
            <li><input type="password" placeholder="请输入您的密码" class="denglu-ipt1" name="user_pwd"/></li>
            <li class="denglu-li5">
                <input type="text" placeholder="输入验证码" class="denglu-ipt1" name="captcha"/>
  <a onclick="javascript:re_captcha();" >
    <img src="{{ URL('home/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0">
  </a>
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
<script>  
  function re_captcha() {
    $url = "{{ URL('home/captcha') }}";
    // alert($url);return false;
    $url = $url + "/" + Math.random();
    document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
  }
</script>