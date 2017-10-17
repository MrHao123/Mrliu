@extends('header')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>简贷-企业至简，载域而贷</title>
	<meta name="keywords" content="域名贷款,域名抵押贷款,域名出借,域名交易 企业至简，载域而贷" />
	<meta name="description" content="简贷JianDai.com，企业志简载域而贷，帮助借款人快速融资。借款人以互联网资产（域名）、汽车等资产作为抵押物，进行融资。"/>
	<meta name="copyright" content="简贷JianDai.com  厦门简贷金融技术服务有限公司"/>

	<link href="/Public/web/images/ico.ico" rel="shortcut icon" />
	<link type="text/css" rel="stylesheet" href="{{asset('home/css/个人理财/basic.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('home/css/个人理财/index.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('home/css/个人理财/iconfont.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('home/css/个人理财/layer.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{asset('home/css/个人理财/call.css')}}" />
    

	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.superslide.2.1.1.js"></script>
	<script type="text/javascript" src="js/layer.js"></script>
	<script type="text/javascript" src="js/function.js"></script>
	<script src="js/browser_judgment.js"></script>
	<script type="text/javascript">
	/*	var sUserAgent = navigator.userAgent.toLowerCase();
		var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
		var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
		var bIsMidp = sUserAgent.match(/midp/i) == "midp";
		var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
		var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
		var bIsAndroid = sUserAgent.match(/android/i) == "android";
		var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
		var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
		if(bIsIpad||bIsIphoneOs||bIsAndroid||bIsMidp||bIsUc7||bIsUc||bIsCE||bIsWM){
			window.location.href = "/home/phone.html";
		}
		*/
	</script>
</head>
<body>

<div class="center">
<!--content-->
<div class="bg_color1">
	<div class="wl mtauto bg_color2">
    	<div class="ofh Invest-detail-box">
        	<div class="fl content-left-x1 bd_e6">
            	<dl>
                    <dt class="ofh">
                       
                        <div class="com-name fl dib" title="域名贷 P13665361">域名贷 P13665361</div>
                        
						<div class="com-num fr dib">
														编号：P13665361</div>
                    </dt>
                    <dd class="com-ifo-part1">
                    	<ul class="ofh">
                        	<li class="fl width40">
                            	<div class="com-ifo-part1-tp">借款总额</div>
                            	<div class="com-ifo-part1-ft fc_orange1"><span id="count_money"><?php echo $show[0]->edu?></span></div>	
                            </li>
                            <li class="fl width35">
                            	<div class="com-ifo-part1-tp">预期年化利率</div>
                            	<div class="com-ifo-part1-ft fc_red2"><span id="rate"><?php echo $show[0]->loan_rate;?></span><span>%</span></div>	
                            </li>
                            <li class="fr width25">
                            	<div class="com-ifo-part1-tp">借款期限</div>
                            	<div class="com-ifo-part1-ft fc_4d">
                                    <span id="mouth"><?php echo $show[0]->loan_time;?></span>
                                    <span>个月</span>                            	</div>	
                            </li>
                        </ul>
                    </dd>
                    <dd class="com-ifo-part2">
                    	<div class="ofh">
                        	<div class="fl dib width40"><span>最低金额：</span><div class="com-ifo-part-ct">100.00元</div></div>
                            <div class="fl dib width40"><span>上架时间：</span><div class="com-ifo-part-ct"><?php echo date("Y-m-d H:i:s",$show[0]->add_time);?></div></div>
                        </div>
                        <div class="ofh">
                        	<div class="fl dib width40"><span> 剩余金额：</span><div class="com-ifo-part-ct" id="surplus_money"><?php echo $surplus_money;?></div></div>
                            <div class="fl dib width40"><span>截止时间：</span><div class="com-ifo-part-ct"><?php echo date("Y-m-d H:i:s",$show[0]->add_time+$show[0]->day*24*60*60); ?></div></div>
                        </div>
                        <div class="ofh">
                        	<div class="fl dib width40"><span> 还款方式：</span><div class="com-ifo-part-ct">先息后本</div></div>
                            <div class="fl dib">
                            	<span>出借进度：</span>
                           		<div class="fl dib trade-time-box">
                                	<div class="trade-time-bar fl dib">
                                    	<div class="trade-time-in" style="width:100%"></div>
                                    </div>
                                    <div class="fl dib trade-time-percent">100%</div>
                                </div>
                            </div>
                        </div>
                    </dd>
                </dl>		
            </div>
            <div class="fr content-right-x1 bd_e6">
            	<dl>
                    <dt class="ofh">
                        <div class="fl dib fs22 fc3">我要出借</div>
                        <div class="fr dib fs12 fstyle1 fc_cc">友情提示：出借有风险</div>
                    </dt>
                    <dd>
	                     <p class="rest">
                            <span class="orange" id="restNum">
                            <?php if(!empty($userinfo)){ echo $userinfo['balance']."</span>元 剩余可出借金额";}else{ echo '请先<a href="javascript:void(0)" onclick="login()">登录</a>，显示余额';}?>
                        </p>
                    
                        <p><input type="text" name="money" id="money" style="width:262px;height:40px;border:1px solid blue" placeholder="最多出借<?php echo $surplus_money;?>"></p>
                        <p>利息：<span id="interest">0.00</span>元</p>
                        <p>预计收入：<span id="expect">0.00</span>元</p>
                        <p><input class="input_btn btn_light" type="submit" value="立即理财" id="btn" style="width:262px;height:40px;line-height:40px;font-size:18px;background-color:orange;color:black"></p>
                            <!-- 用户余额 -->
    <input type="hidden" value="<?php if(!empty($userinfo)){ echo $userinfo['balance'];}else{ echo 0;} ?>" id="ooo">
    <input type="hidden" value="<? echo $show[0]->loan_id;?>" id="loanid">

	               </dd>
                </dl>
            </div>
        </div>
        
        <div class="slide03-box">
        	<div class="slideTxtBox slide03">
                <div class="hd">
                    <ul id="info_list">
						<li class="fl" val="pawn_detail"><p>授信详情</p></li>
						<li class="slide03-hd-center" val="user_info"><p>借款者信息</p></li>
						<li class="fr" val="order_list"><p class="fr">出借记录</p></li>                   
                    </ul>
                </div>
                <div class="bd">
                    <div class="wdl fs18 fc3">您现在未登录，暂时无法查看。请您<a class="" href="/web/index/login.html">登录</a>或<a href="/web/index/register.html">注册</a>后查看。</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


</body>
</html>
<script src="{{asset('home/js/jquery.js')}}"></script>
<script>

    //预估值
    $("#money").keyup(function(){
    
        var rate=$("#rate").html();
        
        var mouth=$("#mouth").html();
        var money=$("#money").val();
        $.ajax({
            url:"personal_valuetion",
            type:"post",
            data:{rate:rate,mouth:mouth,money:money},
            success:function(msg){
                
                str=parseFloat(msg)+parseFloat(money);
                $("#expect").html(str);
                $("#interest").html(msg);
            }
        })
    })

    $("#btn").click(function(){
        var aaa = parseInt($('#ooo').val());//用户的账户余额
        var money = parseInt($('#money').val());//用户要理财的金额
        var loan_id=$("#loanid").val();//贷款人ID
        var rate = $("#rate").html();//利率
        var mouth = $("#mouth").html();//理财月份
        // alert(mouth);
        var expect_money = $("#expect").html()//利息+本金
        var surplus_money=$("#surplus_money").html();//剩余的钱数
        var count_money=$("#count_money").html();//贷款者贷款总额度
        // alert(expect_money);

        if(aaa < money){
            alert("余额不够，请充值");
            return false;
        }else if(money < 100){
             alert("最低100元");
                return false;
        }else if(surplus_money < money){
                alert("最多可以出借"+surplus_money+"元")
                return false;
        }else{
            //是否满标
            if(surplus_money==money){
                var is_full=1;//是
            }else{
                var is_full=0;//没有
            }
            window.location.href="personal_add?money="+money+"&mouth="+mouth+"&expect_money="+expect_money+"&rate="+rate+"&loan_id="+loan_id+"&count_money="+count_money+"&is_full="+is_full;
        }
           

        
    })
</script>
@endsection