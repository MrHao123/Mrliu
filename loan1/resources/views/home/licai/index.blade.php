@extends('header')
@section('content')
<style>
	.div1{width:1000px;height:300px;border:1px solid red;background-color:orange;line-height:300px;font-size:36px;margin-bottom:30px;}
</style>
<center>
	<a href="{{url('licai/personal')}}">
		<div class="div1">
			个人投资
		</div>
	</a>
	<a href="{{url('licai/company_licai')}}">
		<div class="div1">
			企业投资
		</div>
	</a>
</center>	

@endsection