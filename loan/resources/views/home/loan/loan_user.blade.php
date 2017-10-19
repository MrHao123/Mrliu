@extends('header')
@section('content')
    <!--18贷经理登陆设置成功页面内容开始-->
    <div class="jldl-content w1118" style="height: 500px;">
    	<div class="jldl-info" align="">
			<div class="dai-xx-left f-l">
						<ul class="dai-l2-con f-l">
							<form action="credit_add" method="post">
								<?php foreach($date as $k=>$v) :?>
								<h2>亲爱的用户您好，您做多可以贷款 <font style="color: red"><?php echo $v->house_price; ?></font>元</h2>
									<?php endforeach;?>
								<li>
									<p>贷款类型：</p>
									<select name="type" id="">
										@foreach($type as $v)
											<option value="{{$v->type_id}}">{{$v->type_name}}</option>
										@endforeach
									</select>
								</li>
								<li>
									<p>贷款期限：</p>
									<select name="type" id="" onchange="show_sub()">
										@foreach($rate as $v)
											<option value="{{$v->id}}">{{$v->mouth}}</option>
										@endforeach
									</select>
								</li>
									<li>
										<p>还款类型：</p>
										<select name="type" id="">
											@foreach($repay as $v)
												<option value="{{$v->repay_id}}">{{$v->repay}}</option>
											@endforeach
										</select>
										<div style="clear:both;"></div>
									</li>
									<li>
										<p>分期：</p>
										<span>12</span>
										<div style="clear:both;"></div>
									</li>
									<li>
										<p>贷款额度：</p>
										<input type="text" name=" credit_money" />
										<span class="tip user_hint2"></span>
										<div style="clear:both;"></div>
									</li>
								<li align="center">
								<input type="submit" value="发布借款标" style="margin-left: 140px;" />
									<div style="clear:both;"></div>
								</li>

							</form>
						</ul>

				</div>

			</div>
        </div>
    </div>
    <!--底部开始-->
<script>
	function show_sub()
	{
		var show=$(this).val();
		alert(show);
	}
</script>
</body>
</html>
@endsection