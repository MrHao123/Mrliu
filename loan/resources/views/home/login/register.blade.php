
@extends('header')
@section('content')
        <!--18贷注册页面内容开始-->
    <div class="dl-kuai1 w1118">
       <!--  <form action="{{asset('home/register_add')}}" method="post"> -->
    	<div class="dl-datu1 f-l"><img src="{{asset('home/images/dl-kuai1-datu02.gif')}}" /></div>
        <div class="denglu-right1 denglu-right2 f-r">
        	<div class="denglu-header">
            	<h3>用户注册</h3>
                <p>已有账户，<a href="#">立即登录</a></p>
            </div>
            <ul class="denglu-ul1">
                <!-- <input type="hidden" name='_token' value="{{csrf_token()}}" id="_token"> -->
            	<li><input type="text" placeholder="输入邮箱" class="denglu-ipt1" name="user_email" id="user_email"/></li>
            	<li><input type="password" placeholder="输入密码" class="denglu-ipt1" name="user_pwd" id="user_pwd"/></li>
            	<li class="denglu-li4"><input type="password" placeholder="确认密码" class="denglu-ipt1" name
                    ="user_pwd1" id="user_pwd1"/></li>
            	<li class="denglu-li5">
                	<input type="text" placeholder="输入验证码" class="denglu-ipt1" id="cat"/>
                    <button class="denglu-yanz f-l yan" >获取验证码</button>
                    <!-- <a href="JavaScript:;" class="denglu-yanz f-l">获取验证码</a> -->
                    <div style="clear:both;"></div>
                </li>
                <li class="denglu-li6">
                	<div class="check1">
                        <input type="checkbox" />
                        <p>我已同意<a href="#">《18贷网注册服务协议》</a></p>
                        <div style="clear:both;"></div>
                    </div>
                    <div style="clear:both;"></div>
                </li>
            </ul>
           <button class="denglu-btn1 btn">注 册</button>
            
        </div>
        <!--         
                </form> -->
    </div>
</body>
</html>
<script src="./js/js.js"></script>
<script>
//验证码
    $('.yan').on('click',function()
    {
        user_email = $('#user_email').val();
        //alert(user_email);
        $.ajax(
        {
            type:"get",
            url:"{{url('home/register/send')}}",
            data:{user_email:user_email},
            success:function(msg)
            {

            }
        })
    })
    $('.btn').on('click',function()
    {
        user_email = $('#user_email').val();
        user_pwd = $('#user_pwd').val();
        user_pwd1 = $('#user_pwd1').val();
        //_token = $('#_token').val();
        //alert(_token);
        cat = $('#cat').val();
        $.ajax(
        {
            type:"get",
            url:"{{url('home/register/register_add')}}",
            data:{user_email:user_email,user_pwd:user_pwd,user_pwd1:user_pwd1,cat:cat},
            success:function(data)
            {   
                if (data == 1) {

                    location.href="{{url('home/login')}}";
                };
            }
        })
    })
</script>
@endsection
