@extends('header')
@section('content')

<html>
<head>
<meta charset="utf-8">
<title>投资项目_新标专区_散标专区 - 你我贷</title>
<meta name="keywords" content="投资项目,新标,散标,你我贷">
<meta name="description" content="你我贷新标专区致力于为广大投资者提供准确及时以及全面专业的个性化个人投资理财新标、散标，让投资者达到收益最大化。"/>
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="cache-control" content="no-cache">
<meta http-equiv="expires" content="0">
<script type="text/javascript" src="{{asset('home/js/个人理财js/visitorapi-1.2.1-min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/个人理财js/appmeasurement-1.2.1-min.js')}}"></script>
<link href="{{asset('home/css/个人理财/nwd_common.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{asset('home/css/个人理财/nwd_percenter.css')}}" rel="stylesheet" type="text/css"> 
<link href="{{asset('home/css/个人理财/nwd_vipstyle.css')}}" rel="stylesheet" type="text/css"><link rel="stylesheet" href="{{asset('home/css/个人理财/nwd_percenter_1.css')}}" type="text/css"/>
<link rel="stylesheet" href="{{asset('home/css/个人理财/nwd_prolist.css')}}" type="text/css"/>
</head>

<body class="page212">
<!--header-->

<script language="javascript">
		var staticCss = 'https://static.niwodai.com/Public/Static/201603';
		var cssVersion = '20171013180059';
		var staticUrl = 'https://static.niwodai.com/';
</script> 
<script>
    if (self == top) {
        var theBody = document.getElementsByTagName('body')[0];
        theBody.style.display = "block";
    } else {
        top.location = self.location;
    }
    var httpsUrl = 'https://member.niwodai.com';
    var httpUrl = 'http://www.niwodai.com';
</script>


<!--header-->
<script type="text/javascript" desc="Adobe">
s.pageName="投资：产品列表：债权新标";
s.channel="投资";
s.prop1="投资：产品列表";
s.prop2="投资：产品列表：债权新标";
s.prop5="PC";
var s_code=npo.t();
if(s_code){document.write(s_code);}
</script>

<div class="index_main w1180 clearfix">
	<div class="clearfix box mar_b20 mar_t20">
		<div class="prolistCon pad_t10">
			<form id="searchForm" name="searchForm" class="form-horizontal" method="post" action="/xiangmu/" >
				<input type="hidden" id="typelist" name="typelist" value=",-1,"/>
				<input type="hidden" id="timelist" name="timelist" value=",-1,"/>
				<input type="hidden" id="relist" name="relist" value=",-1,"/>
				<input type="hidden" id="slist" name="slist" value=",1,"/>
				<input type="hidden" id="sortlist" name="sortlist" />
				<input type="hidden" id="moreDiv" name="moreDiv" value="gd"/>
			</form>
			
			<div class="listSearchBox clearfix">
				<div class="totall clearfix">
					<div class="clearfix type">
						<div class="fl before pad_l20">
							<em class="fc_3 mr_10 fs_14">投标方式</em>
								<label for="all_1" class="all first" id="timetypeAll"><input class="input" type="checkbox" value="-1">全部</label>
						</div>
						<div class="fl line_1 pad_t5">
							<label for="a6" class="" id="btimetype"><input class="input" type="checkbox" value="4,5,6">车贷</label>
							<label for="a7" class="" id="ctimetype"><input class="input" type="checkbox" value="7,8,9,10,11,12">房贷</label>
							<label for="a8" class="" id="dtimetype"><input class="input" type="checkbox" value="-2">域名贷</label>
						</div>                                
					</div>

					<div class="clearfix type">
						<div class="fl before pad_l20">
							<em class="fc_3 mr_10 fs_14">投标期限</em>
								<label for="all_1" class="all first" id="timetypeAll"><input class="input" type="checkbox" value="-1">全部</label>
						</div>
						<div class="fl line_1 pad_t5">
							<label for="a5" class="" id="atimetype"><input class="input" type="checkbox" value="0,1">1~6个月</label>
							<label for="a5" class="" id="atimetype"><input class="input" type="checkbox" value="2,3">6~12个月</label>
							<label for="a8" class="" id="dtimetype"><input class="input" type="checkbox" value="-2">12个月以上</label>
						</div>                                
					</div>
					<div class="clearfix type clearfix">
						<div class="clearfix type on_off_box" id="hkfsDiv">
							<div class="fl before pad_l20">
								<em class="fc_3 mr_10 fs_14">还款方式</em>
									<label for="all_2" class="all first" id="retypeAll"><input class="input" type="checkbox" value="-1">全部</label>	
							</div>
							<div class="fl line_1 pad_t5">
									<label for="a9" class="" id="aretype"><input class="input" type="checkbox" value="0,1,2,4">等额本息</label>
									<label for="a10" class="" id="bretype"><input class="input" type="checkbox" value="3">一次付息，到期还本</label> 
							</div>
						</div>
					</div>
					<div class="clearfix type on_off_box" id="zbztDiv">
						<div class="fl before pad_l20">
							<em class="fc_3 mr_10 fs_14">招标状态</em>
								<label for="all_3" class="all" id="stypeAll"><input class="input" type="checkbox" value="-1">全部</label>
						</div>
						<div class="fl line_1 pad_t5">
								<label for="a11" class="cur" id="astype"><input class="input" type="checkbox" value="1">正在招标</label>
								<label for="a12" class="" id="bstype"><input class="input" type="checkbox" value="3,9">满标待审</label>
								<label for="a13" class="" id="cstype"><input class="input" type="checkbox" value="4">成功借款</label>
						</div>                         
					</div>
					<div class="clearfix"></div> 
				</div>

			</div>
				<ul class="xinbiaoCon xinbiao_head clearfix">
					<li class="wid_w320 pad_l20">抵押物</li>
					<li class="wid_w140 txt_center">
						<a href="javascript:;" id="rate" style="color:#999;text-decoration:none;" class="">约定借款年化利率 <em class="list_xu mar_l5"></em>
						</a>
					</li>
					<li class="wid_w220 txt_center">
						<a href="javascript:;" id="deadline"  style="color:#999;text-decoration:none;" class="">期限<em class="list_xu mar_l5"></em>
						</a>
					</li>
					<li class="wid_w120 txt_center">
						<a href="javascript:;" id="bidSchedule" style="color:#999;text-decoration:none;" class="">满标进度<em class="list_xu mar_l5"></em>
						</a>
					</li>
					<li class="wid_w190 txt_center">
						<a href="javascript:;" id="amount" style="color:#999;text-decoration:none;" class="">投资金额<em class="list_xu mar_l5"></em>
						</a>
					</li>


					<li class="wid_w140 txt_center">操作</li>
				</ul>
				<?php foreach($show as $val){?>
				
				<a class="link_prolist" href="personal_show?loan_id=<?php echo $val->loan_id?>" target="_blank">
					<ul class="xinbiaoCon clearfix anmation animation-delay-1">
						<li class="wid_w350">
							<div title="快速小额借款" class="biaolh fl">
								<span class="fl biao_tips size24 img_icon sItem_12100 mar_l20 mar_r10 mar_t30">&nbsp;</span>
								<span  style="color:blue;font-size:24px">
										<?php echo $val->loan_type?></span>（<?php echo $val->repay;?>）
								</span>
								
							</div>
						</li>

						<li class="wid_w140 txt_center fc_f60 fs_24 Numfont">
							<div class="biaolh">
								<?php echo $val->loan_rate;?><span class="fs_18">%</span>
							</div>
						</li>
						<li class="wid_w220 txt_center">
							<div class="biaolh">
								<span class="fc_6 fs_24 Numfont"><?php echo $val->loan_time?></span>
								<span class="fs_18 fc_9">个月</span>
							</div>
						</li>
						<li class="wid_w120 txt_center">
							<div class="biaolh">
								<span class="b_jingdu b_jd95">
									94.62<span class="fc_orange">%</span>
								</span>
							</div>
						</li>
						<li class="wid_w190 txt_center">
							<div class="biaolh">
								<span class="fc_6 fs_18 Numfont"><?php echo $val->edu;?></span>
							</div>
						</li>
						<li class="wid_w140 txt_center">
							<div class="biaolh">
										<span class="btn btn_size120 btn_bgfff2">立即投标</span>
							</div>
						</li>
					</ul>
				</a>
				<?php }?>
				<!-- 1 end	-->
			<div class="fl wid_per100  mar_b20 clearfix">
				<div class="nwd_fy mar_t30 clearfix">
					<div class="pageout">
						<!--分页 str -->

	    
	<div class="pageout">
	
		
			<a href="personal?page=<?php if($current_page-1<=0){ echo 1;}else{ echo $current_page-1;}?>" title="下一页" class="last">上一页<i></i></a>  
				
						<span class="active">1</span>
						<?php for($i=2;$i<=$sum_page;$i++){ ?>
						<a href="personal?page=<?php echo $i;?>"><?php echo $i;?></a>
						<?php }?>
			<a href="personal?page=<?php if($current_page+1 > $sum_page){ echo $sum_page;}else{ echo $current_page+1;}?>" title="下一页" class="last">下一页<i></i></a>  
	</div>
								<!--分页 end -->
								<input type="hidden" value="1" id="curPage">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--正文结束-->
<!--foot-->

<script type="text/javascript" src="{{asset('home/js/个人理财js/jquery.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/个人理财js/jquery-1.7.2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/个人理财js/jquery.vticker-min.js')}}"></script>
<script type="text/javascript" src="{{asset('home/js/个人理财js/jquery.form.js')}}"></script>

<script type="text/javascript" src="{{asset('home/js/个人理财js/common.js')}}"></script>
<script type="text/javascript" src="https://static1.niwodai.com/Public/Static/201404{{asset('home/js/个人理财js/common.js')}}"></script>

<script src="{{asset('home/js/个人理财js/jquery.validate.js')}}"></script>
<script src="{{asset('home/js/个人理财js/messages_cn.js')}}"></script>
<script src="{{asset('home/js/个人理财js/jquery.artdialog.js')}}" type="text/javascript"></script> 
<script src="{{asset('home/js/个人理财js/iframetools.js')}}" type="text/javascript"></script>
<!--时间  s-->
<script type="text/javascript" src="{{asset('home/js/个人理财js/jquery.ui.datepicker.js')}}"></script>
<link href="{{asset('home/css/个人理财/jquery-ui.css')}}" rel="stylesheet" type="text/css" /> 
<script type="text/javascript" src="{{asset('home/js/个人理财js/jquery-ui.min.js')}}"></script>
<!--时间 -->
<!--静态化 - 头部内容-->
<script type="text/javascript" src="{{asset('home/js/个人理财js/index.js')}}"></script>
<script src="{{asset('home/js/个人理财js/214b54c481c5063fd62c3426b6ad0a99.js')}}" charset="UTF-8"></script>
<script type="text/javascript">
$(function(){
	var userid = '0';
			userid = Math.round(Math.random()*100000);
	ysf.config({
        uid : userid
    });
	
	// 事件监听方式
    ysf.on({
        unread : function(msg){
            if(msg.total){
            	if(msg.total){
            		if(msg.total>9){
            			$("#onlineQQService_blank").html('<em></em>');
            		}else{
            			$("#onlineQQService_blank").html('<em>'+msg.total+'</em>');
            		}
                }
            }
        }

    });

    $("#onlineQQService_blank").click(function(){
    	$("#onlineQQService_blank").html("");
    });
    
    //获取文章
    $.ajax({ 
		type: "post",
		url: "/common/secondfooter.do", 
		success: function (result) {
			if(result != null) {
				$("#footStart").html(result.artContent);
			}	
	   	}  
 	});
});
</script>
<!-- 底部开始 -->
	
<!-- 底部结束 -->

<!-- weixin start -->
<!-- weixin end -->
<!--foot End-->



<!-- 用户行为日志记录脚本 -->

</body>
</html>

@endsection