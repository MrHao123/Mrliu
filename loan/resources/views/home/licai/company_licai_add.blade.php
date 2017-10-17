@extends('header')
@section('content')
<html>
<head>
    <meta charset="utf-8">
    <title>出借服务申请</title>
    <link href="/static/images/favicon.ico" rel="shortcut icon">
    <link href="/static/images/favicon.ico" rel="Bookmark">
    <link href="{{asset('home/css/网站/base.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/网站/lender.css')}}" rel="stylesheet">
    <link href="{{asset('home/css/网站/financedetail.css')}}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('home/css/网站/xxpl.css')}}">
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
    <meta http-equiv="Cache-Control" content="no-transform" />
<script>
	var _hmt = _hmt || [];
	(function() {
		var hm = document.createElement("script");
		hm.src = "//hm.baidu.com/hm.js?7e312442576c2e48ecf30db4128822fa";
		var s = document.getElementsByTagName("script")[0];
		s.parentNode.insertBefore(hm, s);
	})();
</script>

<script>

</script>

</head>
<body class="bg" >

<link href="{{asset('home/css/网站/minical.css')}}" rel="stylesheet">
<script type="text/javascript">
base_url = '';
</script>
<!--[if IE 6]>
	<script src="js/dd_belatedpng-min.js"></script>
	<script>
		DD_belatedPNG.fix('.png');
	</script>
<![endif]-->
<script>
    $(function(){
        $(".guide").hover(
                function(){
                    $(this).find(".guideIcon").show();
                    $(this).find(".guideMenu").show();
                },
                function(){
                    $(this).find(".guideIcon").hide();
                    $(this).find(".guideMenu").hide();
                }
        );
        $(".guideMenuIcon").hover(
                function(){
                    $(".guideIcon").css')}}("backgroundPosition","0 -6px");
                },
                function(){
                    $(".guideIcon").css')}}("backgroundPosition","0 0");
                }
        );
        $(".header_ico_limit").click(function(){
            art.dialog.open(base_url+ '/borrower/creditLimit/index',{
                title: '信用估值，马上领钱',
                width:720,
                height:600,
                resize:false,//可拉伸弹出框开关
                fixed:true,
                lock:true,//锁屏
                opacity:.7,//锁屏背景透明度
                background:'#000',//锁屏背景颜色
                drag:false,//拖动开关
                okVal:"确定",
                id:'creditlimit',
                close:function(){
                    window.location.reload();
                }
            })
        });
    })
</script>


<div class="finance_detail_box container container_other">
	
	
	
   	<div class="finance_box" style="margin:0 0 20px 0;">
   		<div class="elite_title clearfix">
			
      		<div class="elite_title_left l">富二贷>>网站理财</div>
			<a href="company_licai"><div class="elite_title_right r">返回</div></a>
		</div>
		<div class="elite_wrap clearfix">
        <div class="elite_left l">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="elite_table">
              <tr class="num">
                <td class="orange"><strong id="rate"><?php echo $rate[0]->rate;?></strong>%+<span id="add_rate"><?php echo $rate[0]->add_rate;?></span>%
                
                </td>
                <td><strong id="mouth"><?php echo $rate[0]->mouth?></strong>个月</td>
                <td style="border-right:0">¥<strong id="startNum">100</strong>元
               			 <input type="hidden" class="minIncAmount" value="1000" />
	                    <input type="hidden" class="productDetailId" value="a5c568fdaa234b5d90b63ddc4410bac9" />
                </td>
              </tr>
              <tr>
                <td width="35%"class="q_mark">期待年回报率 <span class="m-tooltips png"></span></td>
                <td width="25%">锁定期限</td>
                <td width="40%" style="border-right:0">最小出借金额</td>
              </tr>
            </table>
        </div>
        <div class="elite_right l">
            <p class="rest">
                <span class="orange" id="restNum">
				<?php if(!empty($userinfo)){ echo $userinfo['balance']."</span>元 剩余可出借金额";}else{ echo '请先<a href="javascript:void(0)" onclick="login()">登录</a>，显示余额';}?>
			</p>

            <p><a href="#"  style="color: red">充值</a> </p>
            <p><input type="text" name="money" id="money" style="width:262px;height:30px" placeholder="请输入要理财的金额"></p>
            <p>利息：<span id="interest">0.00</span>元</p>
            <p>预计收入：<span id="expect">0.00</span>元</p>
			<p><input class="input_btn btn_light" type="submit" value="立即理财" id="btn" style="width:262px;height:40px;line-height:40px;font-size:18px;background-color:orange;color:black"></p>
       
					
				
        </div>
        </div>
       	
       </div>	
	<!-- 用户余额 -->
	<input type="hidden" value="<? echo $userinfo['balance']?>" id="ooo">
     

</body>
</html>
<script src="{{asset('home/js/jquery.js')}}"></script>
<script>
	function login(){
		window.location.href="{{url('index/index')}}"
	}
   

    //预估值
    $("#money").keyup(function(){
        var rate=$("#rate").html();
        var add_rate=$("#add_rate").html();
        var mouth=$("#mouth").html();
        var money=$("#money").val();
        $.ajax({
            url:"valuetion",
            type:"post",
            data:{rate:rate,add_rate:add_rate,mouth:mouth,money:money},
            success:function(msg){
                // alert(msg);
                str=parseFloat(msg)+parseFloat(money);
                $("#expect").html(str)
                $("#interest").html(msg)
            }
        })
    })

     //立即理财
    $("#btn").click(function(){
        var aaa = parseInt($('#ooo').val());//用户的账户余额
        var money = parseInt($('#money').val());//用户要理财的金额

        var rate = $("#rate").html();
        var add_rate = $("#add_rate").html();
        var mouth = $("#mouth").html();
        var expect_money = $("#expect").html()
        // alert(expect_money);

        if(aaa < money){
            alert("余额不够，请充值");
            return false;
        }else if(money<100){
             alert("最低100元");
                return false;
        }else{
            window.location.href="company_licai_adddo?money="+money+"&mouth="+mouth+"&expect_money="+expect_money
        }
           

        
    })
  
</script>

@endsection