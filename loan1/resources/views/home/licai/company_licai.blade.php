@extends('header')
@section('content')
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script>
            window._jHeadStart = ( new Date() ).getTime();
            window.tplConf = {
                user : {
                    userId : 'null'
                },
                pageKey : '',
                autoPV : true,
                autoIdentify : true,
                we_renrendai_host: 'https://www.renrendai.com',
                _isWeCom: 'false',
                target: '_self',
                isProduction : true,
                pbId : ''
            };
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="renderer" content="webkit">
        <meta name="google-site-verification" content="oQXrGa_mTgxg7joO0himE0QuFeqOVmm-SDC1H2dzT4c">
        <meta name="baidu-site-verification" content="wibJopuIuI" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
    <meta name="keywords" content="投资理财产品,个人理财计划,可靠的互联网理财,人人贷U计划">
    <meta name="description" content="人人贷U计划是人人贷为您提供的本金自动循环出借及到期自动转让退出的理财工具性产品，该计划所对应的借款均100%适用于人人贷用户利益保障机制，安全性高。利息收益可选择每月复投或返还，并由系统实现分散投资，更好的满足用户多样化的理财需求。">
    <title>U计划-人人贷理财官网</title>

        
            <link rel="shortcut icon" type="image/x-icon" href="/ps/static/common/static/img/favicon-rrd.ico" />
        

        <link rel="stylesheet" type="text/css" href="{{asset('home/css/base_a10212c.css')}}">

        
        



        
        <script type="text/javascript">
            (function(){
                var userAgent = navigator.userAgent.toLowerCase();
                if(userAgent.match(/rv:([\d.]+)\) like gecko/) || userAgent.match(/msie ([\d.]+)/) ){
                    document.write('<script src="js/babel-polyfill.js"><\/script>');
                }
            })();
        </script>

        
        
        <script type="text/javascript" src="{{asset('home/js/181814.js')}}" async defer></script>
        

        
        
        

        
        

        
        
        <script type="text/javascript">
    window.zhuge = window.zhuge || [];
    window.zhuge.methods = "_init debug identify track trackLink trackForm page".split(" ");
    window.zhuge.factory = function(b) {
        return function() {
            var a = Array.prototype.slice.call(arguments);
            a.unshift(b);
            window.zhuge.push(a);
            return window.zhuge;
        }
    };
    for (var i = 0; i < window.zhuge.methods.length; i++) {
        var key = window.zhuge.methods[i];
        window.zhuge[key] = window.zhuge.factory(key);
    }
    window.zhuge.load = function(b, x) {
        if (!document.getElementById("zhuge-js")) {
            var a = document.createElement("script");
            var verDate = new Date();
            var verStr = verDate.getFullYear().toString()
                + verDate.getMonth().toString() + verDate.getDate().toString();

            a.type = "text/javascript";
            a.id = "zhuge-js";
            a.async = !0;
            a.src = "https://www.we.com/cms/5864b0d6a24d131067ef7956/js/zhuge.js?v=" + verStr;
            a.onerror = function(){
                window.zhuge.identify = window.zhuge.track = function(ename, props, callback){
                    if(callback && Object.prototype.toString.call(callback) === '[object Function]')callback();
                };
            };
            var c = document.getElementsByTagName("script")[0];
            c.parentNode.insertBefore(a, c);
            window.zhuge._init(b, x)
        }
    };
    //区分线上线下上报的app key
    var app_key = window.tplConf.isProduction?"ee112f4bcbe648a0a0958ff03af06b2a":"2da9e18043f74bceb761b72ca6f3ae78";
    window.zhuge.load(app_key);
</script>
        



        
    <link rel="stylesheet" href="{{asset('home/css/common_wdg_55071a0.css')}}" /><link rel="stylesheet" href="{{asset('home/css/common_nm_aa4d4d8.css')}}" /><link rel="stylesheet" href="{{asset('home/css/p2p_wdg_a6d1551.css')}}" /><link rel="stylesheet" href="{{asset('home/css/index_184b71b.css')}}" /></head>

    <body >

    

        <div class="main-content">

            

    <div id="uplanIndex">
        <div class="wdg-index-banner">
   <div class="banner-box react-slick" id="banner-box">
   </div>
   <div class="uc-amount-box">
       <p class="uc-amount">
            11.0
       </p>
   </div>
</div>
        <div class="mt10 container_12_1080">
            <div class="uplan">
                
                <div class="uplan-list">
    <ul>
        <?php foreach($rate as $val){?>
        
        <li>
            <a class="cover" href="company_licai_add?id=<?php echo $val->id;?>" target="_blank">
                <p class="time">
                    <span class="month"><img src="{{asset('home/images/time_53c7a37.png')}}"/><em><?php echo $val->mouth;?>个月</em></span>
                    <img src="images/uplan_xian_f5e9d9a.png" class="xian">
                </p>
                <p class="rate mtop">
                    
                    <span class="num"><i class="fu"><?php echo $val->rate?></i><em>%</em><i class="dan">+<?php echo $val->add_rate?></i><em>%</em></span>
                    
                    <span class="nian">预期年化利率</span>
                    
                    <span class="highest"></span>
                </p>
                <p class="name">

                    
                    <em><i></i>立即加入</em>
                    
                </p>
            </a>
        </li>
        <?php }?>

    </ul>
</div>
                
            </div>
             <div class="container_12_1080" id="uplan-index-cal">
    <div class="ui-title fn-clear">
          <div class="fn-left">投资计算器</div>
          <div class="fn-right"></div>
    </div>
    <div class="color-white-bg ui-cal fn-clear">
        <div class="fn-left cal-left">
            <div class="u-input-group">
                <input type="text" maxlength="8"   name="uplanAmount" id="uplanAmount" class="ui-input success-input" value="10000">
                <p class="unit">元</p>
                <label   class="ui-term-error error" id="uplanAmount-error-label" style="visibility: hidden;" for="uplanAmount">投资金额须为1000的整数倍且不能为空</label>

            </div>
            <div class="button-wrapper">
                <input type="button" value="开始计算" class="ui-button-cal" id="calcbt">
            </div>
        </div>

        <div class="fn-left cal-right fn-clear">
           <ul class="fn-left cal-items border-left border-right">
                  
                        
                            <li class="item">
                                <ul class="cal-result">
                                    <li class="title">1个月</li>
                                    <li class="result fn-clear">
                                        <div class="result-graph fn-left"><span class="cal-income" id="income1"></span></div>
                                        <div class="result-num fn-left" id="incomeV1"></div>
                                    </li>
                                </ul>
                            </li>
                         
               
                        
                            <li class="item">
                                <ul class="cal-result">
                                    <li class="title">3个月</li>
                                    <li class="result fn-clear">
                                        <div class="result-graph fn-left"><span class="cal-income" id="income3"></span></div>
                                        <div class="result-num fn-left" id="incomeV3"></div>
                                    </li>
                                </ul>
                            </li>
                         
               
                        
                            <li class="item">
                                <ul class="cal-result">
                                    <li class="title">6个月</li>
                                    <li class="result fn-clear">
                                        <div class="result-graph fn-left"><span class="cal-income" id="income6"></span></div>
                                        <div class="result-num fn-left" id="incomeV6"></div>
                                    </li>
                                </ul>
                            </li>
                         
               
                        
               
                        
               
                        
               
           </ul>

           <ul class="fn-left cal-items">
                
                    
                
                    
                
                    
                
                    
                       <li class="item">
                           <ul class="cal-result">
                               <li class="title">12个月</li>
                               <li class="result fn-clear">
                                   <div class="result-graph fn-left"><span class="cal-income" id="income12"></span></div>
                                   <div class="result-num fn-left" id="incomeV12"></div>
                               </li>
                           </ul>
                       </li>
                    
                
                    
                       <li class="item">
                           <ul class="cal-result">
                               <li class="title">24个月</li>
                               <li class="result fn-clear">
                                   <div class="result-graph fn-left"><span class="cal-income" id="income24"></span></div>
                                   <div class="result-num fn-left" id="incomeV24"></div>
                               </li>
                           </ul>
                       </li>
                    
                
                    
                       <li class="item">
                           <ul class="cal-result">
                               <li class="title">36个月</li>
                               <li class="result fn-clear">
                                   <div class="result-graph fn-left"><span class="cal-income" id="income36"></span></div>
                                   <div class="result-num fn-left" id="incomeV36"></div>
                               </li>
                           </ul>
                       </li>
                    
                
           </ul>

       </div>

    </div>

 </div>
            
 <div class="container_12_1080   " id="uplanIndexData">
 	<!--UA,UB,UC U计划投资数据-->
 <div class="ui-title fn-clear">
          <div class="fn-left ">U计划投资数据</div>
          <div class="fn-right">数据来源人人贷内部统计,实时更新</div>
    </div>
    <div class="fn-clear ui-invest-dl-info color-white-bg">
        <dl class="fn-left   text-center   border-right-gray">
            <dd ><em class="number">374.4</em><em class="unit">亿元</em></dd>
           	<dt class="text">加入U计划</dt>

        </dl>
        <dl class="fn-left  text-center   border-right-gray">
            <dd ><em class="number">22.2</em><em class="unit">亿元</em></dd>
            <dt class="text">为用户赚取</dt>

        </dl>
        <dl class="fn-left text-center ">
            <dd ><em class="number">203.2</em><em class="unit">万次</em></dd>
            <dt class="text">加入总人次</dt>

        </dl>
    </div>
</div>
            <div class="container_12_1080" id="uplanIndexList">
            </div>
        </div>
    </div>



        </div>

        

        
            
            <div class="werenrendai-footer">
    


<script type='text/javascript'>
    function online_service() {
        
            window.open('http://chat.looyuoms.com/chat/chat/p.do?c=20000293&f=10042100&g=10048378&site=5372&r=%23params%3A姓名%2C游客', '_blank', 'height=544, width=644,toolbar=no,scrollbars=no,menubar=no,status=no');
        
    }

</script>



            
        

        
        







        <script>
            /*
            var _hmt = _hmt || [];
            (function() {
                var hm = document.createElement("script");
                //we，rerendai使用不同的百度统计代码
                if(window.tplConf._isWeCom == 'true'){
                    hm.src = "//hm.baidu.com/hm.js?16f9bb97b83369e62ee1386631124bb1";
                }else{
                    hm.src = "https://hm.baidu.com/hm.js?a00f46563afb7c779eef47b5de48fcde";
                }
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm, s);
            })();
            */

            //ga统计
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-93150356-1', 'auto');
            ga('send', 'pageview');
        </script>
        

        
        
    <script type="text/javascript" src="{{asset('home/js/mod_f76e019.js')}}"></script><script type="text/javascript" src="{{asset('home/js/common_nm_b717299.js')}}"></script><script type="text/javascript" src="{{asset('home/js/common_wdg_066c9e7.js')}}"></script><script type="text/javascript" src="{{asset('home/js/p2p_wdg_674779e.js')}}"></script><script type="text/javascript" src="{{asset('home/js/index_d9b40a4.js')}}"></script><script type="text/javascript" src="{{asset('home/js/layout_b972aa2.js')}}"></script><script type="text/javascript">!function() {
            require(["common:page/layout.js"] , function(app){
                
                app.initUtmOperate();
            });
        }();
!function() {
    require(["common:widget/werenrendai-home/second-header/second-header"], function(header){
    header.init();
    });
}();
!function() {
    require(["common:widget/werenrendai-home/footer/footer"], function(){});
}();
!function() {
    var uplanPeriods = '1,3,6,12,24,36';
    var bannerData = '[{\u0022imgUrl\u0022:\u0022//www.we.com/cms/58b528189826fb2215fd730b/index/banner0912.jpg\u0022}]';
    bannerData = JSON.parse(bannerData);
    var historyData =  '{\u0022currentTime\u0022:1507874900931,\u0022totalCount\u0022:150,\u0022list\u0022:[{\u0022id\u0022:16239,\u0022name\u0022:\u0022U计划\u002D36月\u002D20171013\u002D1期\u0022,\u0022expectedYearRate\u0022:11,\u0022simpleInterest\u0022:9.55,\u0022lockPeriod\u0022:36,\u0022minRegisterAmount\u0022:10000,\u0022status\u0022:\u00224\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0.2,\u0022baseInterestRate\u0022:10.8,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:30000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:78,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16238,\u0022name\u0022:\u0022U计划\u002D24月\u002D20171013\u002D1期\u0022,\u0022expectedYearRate\u0022:10,\u0022simpleInterest\u0022:9.16,\u0022lockPeriod\u0022:24,\u0022minRegisterAmount\u0022:10000,\u0022status\u0022:\u00224\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0.2,\u0022baseInterestRate\u0022:9.8,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:20000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:42,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16237,\u0022name\u0022:\u0022U计划\u002D12月\u002D20171013\u002D1期\u0022,\u0022expectedYearRate\u0022:9,\u0022simpleInterest\u0022:8.65,\u0022lockPeriod\u0022:12,\u0022minRegisterAmount\u0022:1000,\u0022status\u0022:\u00224\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0.2,\u0022baseInterestRate\u0022:8.8,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:20000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:176,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16236,\u0022name\u0022:\u0022U计划\u002D6月\u002D20171013\u002D1期\u0022,\u0022expectedYearRate\u0022:7.8,\u0022simpleInterest\u0022:7.68,\u0022lockPeriod\u0022:6,\u0022minRegisterAmount\u0022:1000,\u0022status\u0022:\u00225\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0.6,\u0022baseInterestRate\u0022:7.2,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:15000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:817,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16234,\u0022name\u0022:\u0022U计划\u002D3月\u002D20171013\u002D1期\u0022,\u0022expectedYearRate\u0022:6.8,\u0022simpleInterest\u0022:6.77,\u0022lockPeriod\u0022:3,\u0022minRegisterAmount\u0022:1000,\u0022status\u0022:\u00225\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0.2,\u0022baseInterestRate\u0022:6.6,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:3000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:243,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16233,\u0022name\u0022:\u0022U计划\u002D1月\u002D20171013\u002D1期\u0022,\u0022expectedYearRate\u0022:6.2,\u0022simpleInterest\u0022:6.2,\u0022lockPeriod\u0022:1,\u0022minRegisterAmount\u0022:1000,\u0022status\u0022:\u00225\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0.2,\u0022baseInterestRate\u0022:6,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:3000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:253,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16211,\u0022name\u0022:\u0022U计划\u002D24月\u002D20171012\u002D1期\u0022,\u0022expectedYearRate\u0022:10,\u0022simpleInterest\u0022:9.16,\u0022lockPeriod\u0022:24,\u0022minRegisterAmount\u0022:10000,\u0022status\u0022:\u00225\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0.2,\u0022baseInterestRate\u0022:9.8,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:8000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:62,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16216,\u0022name\u0022:\u0022U计划\u002D3月\u002D20171012\u002D3期\u0022,\u0022expectedYearRate\u0022:6.6,\u0022simpleInterest\u0022:6.57,\u0022lockPeriod\u0022:3,\u0022minRegisterAmount\u0022:1000,\u0022status\u0022:\u00225\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0,\u0022baseInterestRate\u0022:6.6,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:3000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:216,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16213,\u0022name\u0022:\u0022U计划\u002D36月\u002D20171012\u002D1期\u0022,\u0022expectedYearRate\u0022:11.2,\u0022simpleInterest\u0022:9.7,\u0022lockPeriod\u0022:36,\u0022minRegisterAmount\u0022:10000,\u0022status\u0022:\u00225\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0.4,\u0022baseInterestRate\u0022:10.8,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:20000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:314,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null},{\u0022id\u0022:16210,\u0022name\u0022:\u0022U计划\u002D12月\u002D20171012\u002D1期\u0022,\u0022expectedYearRate\u0022:8.8,\u0022simpleInterest\u0022:8.47,\u0022lockPeriod\u0022:12,\u0022minRegisterAmount\u0022:1000,\u0022status\u0022:\u00225\u0022,\u0022processRatio\u0022:0,\u0022category\u0022:\u0022A\u0022,\u0022tag\u0022:\u0022\u0022,\u0022extraInterestRate\u0022:0,\u0022baseInterestRate\u0022:8.8,\u0022beginSellingTime\u0022:0,\u0022amount\u0022:8000000,\u0022oldExpectedRate\u0022:\u0022\u0022,\u0022subPointCount\u0022:227,\u0022earnInterest\u0022:0,\u0022finalPeriod\u0022:0,\u0022applyQuitDays\u0022:0,\u0022appendMultipleAmount\u0022:null}]}';
    historyData= JSON.parse(historyData);

    require(["p2p:page/uplan/index/index.js"] , function(uplanIndex){
             uplanIndex.init(historyData,bannerData,uplanPeriods);

    });
}();
!function() {


        }();</script></body>

</html>

@endsection