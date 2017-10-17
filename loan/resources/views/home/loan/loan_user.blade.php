@extends('header')
@section('content')
    <!--18贷经理登陆设置成功页面内容开始-->
    <div class="jldl-content w1118" style="height: 500px;">
    	<div class="jldl-info">
			<div class="dai-xx-left f-l">
						<ul class="dai-l2-con f-l">
							<form action="credit_add" method="post">
								<li>
									<p>贷款人：</p>
									<input type="text" name=" credit_name" />
									<span class="tip user_hint2"></span>
									<div style="clear:both;"></div>
								</li>
								<li>
									<p>贷款额度：</p>
									<input type="text" name=" credit_money" />
									<span class="tip user_hint2"></span>
									<div style="clear:both;"></div>
								</li>
								<li align="center">
								<input type="submit" value="提交信息" style="margin-left: 140px;" />
									<div style="clear:both;"></div>
								</li>

							</form>
						</ul>
				<div class="dai-l2-tu f-r">
					<img src="{{asset('home/images/xiangxi-03.gif')}}" />
				</div>
				</div>

			</div>
        </div>
    </div>
    <!--底部开始-->

</body>
</html>
@endsection