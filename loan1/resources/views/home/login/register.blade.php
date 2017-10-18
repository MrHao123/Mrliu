
@extends('header')
@section('content')
        <!--18贷注册页面内容开始-->
    <div class="dl-kuai1 w1118">
        <form action="{{asset('home/register_add')}}" method="post">
    	<div class="dl-datu1 f-l"><img src="{{asset('home/images/dl-kuai1-datu02.gif')}}" /></div>
        <div class="denglu-right1 denglu-right2 f-r">
        	<div class="denglu-header">
            	<h3>用户注册</h3>
                <p>已有账户，<a href="#">立即登录</a></p>
            </div>
            <ul class="denglu-ul1">
                <input type="hidden" name='_token' value="{{csrf_token()}}">
            	<li><input type="text" placeholder="输入邮箱" class="denglu-ipt1" name="user_email"/></li>
            	<li><input type="password" placeholder="输入密码" class="denglu-ipt1" name="user_pwd" /></li>
            	<li class="denglu-li4"><input type="password" placeholder="确认密码" class="denglu-ipt1" name
                    ="user_pwd1"/></li>
            	<li class="denglu-li5">
                	<input type="text" placeholder="输入验证码" class="denglu-ipt1" />
                    <button class="denglu-yanz f-l">获取验证码</button>
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
           <button class="denglu-btn1">注 册</button>
            
        </div>
                
        </form>
    </div>
</body>
</html>
@endsection
<script src="./js.js"></script>
<script>

    $('.denglu-yanz').on('click',function()
    {
        $.ajax({
            url:"registeradd",
            type:"post",
            success:function(msg){
                
            }
        })

    })
</script>