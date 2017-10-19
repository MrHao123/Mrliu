@extends('header')
@section('content')
        <!--我的会员中心内容开始-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/flow.css" rel="stylesheet" type="text/css"  />

<style>
    * {
        margin: 0;
        padding: 0;
        font-size: 12px;
    }
    html, body {
        height: 100%;
        width: 100%;
    }
    #alert {
        z-index: 2;
        border: 1px solid rgba(0,0,0,.2);
        width: 598px;
        height: auto;
        border-radius: 6px;
        box-shadow: 0 5px 15px rgba(0,0,0,.5);
        background: #fff;
        z-index: 1000;
        position: absolute;
        left: 50%;
        top: 15%;
        margin-left: -299px;
        display: none;
    }
    .model-head {
        padding: 15px;
        color: #73879C;
        border-bottom: 1px solid #e5e5e5;
    }
    .close {
        padding: 0;
        cursor: pointer;
        background: 0 0;
        border: 0;
        float: right;
        font-size: 14px !important;
        font-weight: 700;
        text-shadow: 0 1px 0 #fff;
        opacity: 0.4;
        margin-top: 5px;
    }
    #close:hover {
        cursor: pointer;
        color: #000;
    }
    #mask {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: #000;
        opacity: 0.3;
        display: none;
        z-index: 1;
    }
    .model-content {
        position: relative;
        padding: 15px;
    }
    .model-foot {
        padding: 15px;
        text-align: right;
    }
</style>
<!--当前地点-->
<div class="current-dd w1120">
    <p>您的位置：<a href="#">首页</a> > <a href="#">我的账户</a></p>
</div>
<div class="huiyuan-con1 w1120">
    <div class="huiyuan-left f-l">

        <div class="hy-qiandao">
            <a href="#">
                <h3>签到换积分</h3>
            </a>
        </div>
        <div class="hy-left-info1" style="border:1px solid #DEDEDE;border-bottom:0;">
            <!-- <h3 class="hy-left-title1">我的资料</h3> -->
            <ul class="hu-left-ul1">
                <li class="li-gr"><a href="JavaScript:;">我的信息</a></li>
                <li class="li-aq"><a href="JavaScript:;">我的借款</a></li>
                <li class="li-mm"><a href="JavaScript:;">我的理财</a></li>
                <li class="li-wd"><a href="JavaScript:;">我的账户</a></li>


            </ul>
        </div>
    </div>
    <div class="huiyuan-right f-r">
        <!-- 1 -->
        <div class="hy-right-info2" id='one'>
            <div class="hy-rif2-title1">
                <h3><img src="{{asset('home/images/huiyuan-12.gif')}}" />个人信息</h3>
            </div>


            {{--展示个人信息--}}


                    <!--  <p id="ziti">用 户 信息</p> -->

            <?php if($select!=1){ ?>
            <?php foreach ($select as $val) : ?>


            <div>
                <ul>
                    <li>
                        {{--placeholder--}}
                        <button style="background-color: #881280 "> 姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</button><input type="text" id="user"  value="<?php echo $val->info_name; ?>" disabled>
                        <button style="background-color: #881280 "> 身份证号</button><input type="text"  id="pwd" value="<?php echo $val->info_card; ?>" disabled>
                    </li>
                    <li>
                        <button style="background-color: #881280 "> 年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄</button><input type="text" id="pwd" value="<?php echo $val->info_age; ?>" disabled>
                        <button style="background-color: #881280 "> 性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</button><input type="text"  id="pwd"value="<?php echo $val->info_sex; ?>" disabled>
                    </li>
                    <li>
                        <button style="background-color: #881280 "> 电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</button><input type="text" id="pwd" value="<?php echo $val->info_tel; ?>" disabled>
                        <button style="background-color: #881280 "> 邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</button><input type="text"  id="pwd"value="<?php echo $val->info_email; ?>" disabled>
                    </li>
                    <li>
                        <button style="background-color: #881280 "> 家庭住址</button><input type="text"  id="pwd" value="<?php echo $val->info_address; ?>" disabled>
                        <button style="background-color: #881280 "> 现居地址</button><input type="text"  id="pwd" value="<?php echo $val->info_newaddress; ?>" disabled>
                    </li>
                    <li>
                        <button style="background-color: #881280 "> 公&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;司</button><input type="text"  id="pwd" value="<?php echo $val->info_company; ?>" disabled>
                        <button style="background-color: #881280 "> 薪&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;资</button><input type="text"  id="pwd" value="<?php echo $val->info_money; ?>" disabled>千元
                    </li>

                </ul>
            </div>
            <?php endforeach ?>
            <?php  }else{ ?>
            <style>
                #overlay {
                    background: #000;
                    filter: alpha(opacity=50); /* IE的透明度 */
                    position: fixed;
                    top:0px;
                }
                #form{
                    position: fixed;
                    top: 20%;
                    left: 30%;
                    background-color: #FCF6EA;
                    width: 580px;
                    height: 350px;
                }
                #imgs{
                    position: fixed;
                    top: 165px;
                    left: 1000px;
                }
            </style>
            <div id="overlay">

                <form  id="form" >
                    <center>
                        <img src="{{asset('home/images/huiyuan-12.gif')}}" id="imgs" title="关闭">
                        <p><input type="text" name="info_name" id="user"  placeholder="姓名：">&nbsp;&nbsp;
                            <input type="text" name="info_card" id="pwd" placeholder="身份证件："></p>
                        <p><input type="text" name="info_age" id="pwd" placeholder="年龄：">&nbsp;&nbsp;
                            <input type="text" name="info_sex" id="pwd" placeholder="性别："></p>
                        <p><input type="text" name="info_tel" id="pwd" placeholder="电话：">&nbsp;&nbsp;
                            <input type="text" name="info_email" id="pwd" placeholder="邮箱："></p>
                        <p><input type="text" name="info_address" id="pwd" placeholder="家庭住址：">&nbsp;&nbsp;
                            <input type="text" name="info_newaddress" id="pwd" placeholder="现居地址："></p>
                        <p><input type="text" name="info_company" id="pwd" placeholder="公司">&nbsp;&nbsp;
                            <input type="text" name="info_money" id="pwd" placeholder="薪资"></p>

                        <p><input type="submit" id="submit"  class="subs" value="提交" style="background-color:#11CBBE"></p>
                    </center>
                </form>
            </div>
            <?php }?>

        </div>

        <!-- 2 -->
        <div class="hy-left-info2" id='two' style="display: none">
            <h3 class="hy-left-title1">我的借款</h3>
            <div class="hy-if3-k1">
                <?php foreach($data as $k=>$v) :?>
                <?php if($v->house_show == 0){ ?>
                <?php foreach($data as $k=>$v) :?>
                <?php if($v->house_state == 0){ ?>
                <div>
                    <ul>

                        <div class="jldl-content w1118" style="width: 800px;">
                            <div class="jldl-info">
                                <h3 class="jldl-if-h31">您提交的信息正在审核中......，审核通知会在1-6小时内通知您！</h3>
                            </div>
                        </div>
                    </ul>
                </div>
                <?php  }else if($v->house_state == 3){  ?>
                <div class="jldl-content w1118" style="width: 800px;">
                    <div class="jldl-info">
                        <h3 class="jldl-if-h31"> <img src="{{asset('home/images/tongguo.jpg')}}" style="width: 50px;height: 25px;"> 您提交的初信息审核已经通过</h3>

                        <div id="content" style="text-align:center;margin:px auto;"> <a style="font-size:25px;"  >点我继续申请</a> </div>
                    </div>
                </div>

                <div id="alert" class="">
                    <div class="model-head">

                        <h4 class="modal-title">借款申请</h4>
                    </div>
                    <div class="model-content">
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
                                    <input type="submit" value="提交信息" style="margin-left: 140px;"  class="close"/>
                                    <div style="clear:both;"></div>
                                </li>
                            </form>

                        </ul>
                    </div>

                </div>

                <div id="mask"></div>
                <?php }else{?>
                <div class="jldl-content w1118" style="width: 800px;">
                    <div class="jldl-info">
                        <h3 class="jldl-if-h31">您提交的信息审核未通过</h3>
                        <div id="content" style="text-align:center;margin:px auto;"> <a style="font-size:25px;">点我查看明细</a> </div>
                    </div>
                </div>
                <?php }?>
                <?php endforeach ;?>
                <?php }else if($v->house_show == 1){ ?>

                    <?php foreach($reg as $k=>$v) :?>
                    <?php if($v->credit_state == 1){ ?>

                    <div>
                        <ul>

                            <div class="jldl-info">
                                <h3 class="jldl-if-h31">您提交的第二次信息正在审核中......，审核通知会在10-30分钟内通知您！</h3>

                            </div>

                        </ul>
                    </div>
                    <?php  }else if($v->credit_state == 3){ ?>

                    <div class="jldl-info">
                        <h3 class="jldl-if-h31"> <img src="{{asset('home/images/tongguo.jpg')}}" style="width: 50px;height: 25px;"> 您的第二次审核已经通过</h3>
                        <br>
                        <div id="content" style="text-align:center;margin:px auto;"> <a style="font-size:25px;" href="loan_user">立即贷款</a> </div>
                    </div>
                    <?php }else{ ?>

                    <div class="jldl-info">
                        <h3 class="jldl-if-h31">您的第二次信息审核未通过</h3>
                        <br>
                        <div id="content" style="text-align:center;margin:px auto;"> <a style="font-size:25px;">点我查看明细</a> </div>
                    </div>
                    <?php }?>
                    <?php endforeach ;?>

                <?php }else { ?>
                <h1>asdas</h1>
                <?php }?>
                <?php endforeach ?>




        </div>
    </div>
    <!-- 3 -->
    <div class="hy-left-info3" id='three' style="display: none">
        <h3 class="hy-left-title1">我的理财</h3>
        <div class="hy-if3-k1">
            <p class="current">回答待解决的问题 +10积分</p>
            <p>全平台新增问题：0个</p>
            <p>今日回答：</p>
            <p>今天排名：</p>
            <p>总回答数：</p>
            <p>总积分：</p>
        </div>
    </div>
    <!-- 4 -->
    <style>
                #chongzhi {
                    background: #000;
                    filter: alpha(opacity=50); /* IE的透明度 */
                    position: fixed;
                    top:0px;
                }
                #cz{
                    position: fixed;
                    top: 20%;
                    left: 30%;
                    background-color: #FCF6EA;
                    width: 580px;
                    height: 350px;
                }
                #close{
                    position: fixed;
                    top: 165px;
                    left: 1000px;
                }
            </style>
    <div class="hy-left-info3" id='five' style="display: none">
        <h3 class="hy-left-title1">我的账户</h3>
        <div class="hy-if3-k1" id="chongzhi">
          <!--   <center>
                <p class="current">我的余额:(显示当前用户下的余额）</p><br><br><br>
                <p><input type="button" value="我要充值" id="recharge" style="background-color:#0000ff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="我要提现" id="withdraw" style="background-color: #0000ff"></p>
            </center> -->



        <form  id="cz" >
            <table>
            <center>

                <img src="{{asset('home/images/huiyuan-12.gif')}}" id="close" title="关闭">
                <p><input type="text" name="cz_card" id="user"  placeholder="卡号"></p>
                <!-- <p><input type="text" name="cz_type" id="pwd" placeholder="银行"></p>  -->
                <p><input type="text" name="cz_pwd" id="pwd" placeholder="支付密码"></p>
                <p><input type="button" id="submit"  class="czsub" value="提交" style="background-color:#11CBBE"></p>
            </center>
            </table>
        </form>

    </div>
</div>
<div style="clear:both;"></div>
</div>
<!-- 4 -->
</div>
<div style="clear:both;"></div>
</div>

<script>
    $(".li-gr").click(function(){
        $("#one").siblings().hide();
        $("#one").show();

    })
    $(".li-aq").click(function(){
        $("#two").siblings().hide();
        $("#two").show();
    })
    $(".li-mm").click(function(){
        $("#three").siblings().hide();
        $("#three").show();
    })
    $(".li-wd").click(function(){
        $("#five").siblings().hide();
        $("#five").show();
    })
</script>
<script>
/*个人信息*/

    /* 当前页面高度 */
    var height=document.body.scrollHeight;
    /* 当前页面宽度 */
    var width=document.body.scrollWidth;
    /* 当前页面宽度 */

    $("#overlay").height(height);
    $("#overlay").width(width);
    // fadeTo第一个参数为速度，第二个为透明度
    // 多重方式控制透明度，保证兼容性，但也带来修改麻烦的问题
    $("#overlay").fadeTo(200,0.9);
    //关闭后隐藏
    $('#imgs').click(function(){
        $('#overlay').fadeOut(200)
    })
    $('.subs').click(function(){
        
//        var name=document.getElementsByClassName(user_name).value();
        $.ajax({
            cache: true,
            type: "POST",
            url:"information",
            data:$('#form').serialize(),// 你的formid
            async: false,
//            dataType:'json',
            error: function(request) {
                alert("数据.....500");
            },
            success: function(data) {
                if(data){
                    alert("成功");
                }else {
                    alert("失败");
                }


            }
        });




        $('#overlay').fadeOut(200)
    })

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/flow.js"></script>
<script type="text/javascript">
    var myAlert = document.getElementById("alert");
    var myMask=document.getElementById('mask');

    $("#content a").click(function(){
        myMask.style.display="block";
        myAlert.style.display = "block";
        document.body.style.overflow = "hidden";
    })
    $(".close").click(function(){
        myAlert.style.display = "none";
        myMask.style.display = "none";
    })






</script>

<script>
// 我要充值
 /* 当前页面高度 */
    var height=document.body.scrollHeight;
    /* 当前页面宽度 */
    var width=document.body.scrollWidth;
    /* 当前页面宽度 */
    $("#chongzhi").height(height);
    $("#chongzhi").width(width);
    // fadeTo第一个参数为速度，第二个为透明度
    // 多重方式控制透明度，保证兼容性，但也带来修改麻烦的问题
    $("#chongzhi").fadeTo(200,0.9);
    //关闭后隐藏
    $('#close').click(function(){
        $('#chongzhi').fadeOut(200)
    })

    $('.czsub').click(function() {
//        alert(111);
//        die;

////        var name=document.getElementsByClassName(user_name).value();
        $.ajax({
            cache: true,
            type: "POST",
            url:"recharge",
            data:$('#cz').serialize(),// 你的formid
            async: false,
//            dataType:'json',
            error: function(request) {
                alert("数据.....500");
            },
            success: function(data) {
                if(data){
                    alert(data);
                }
                // else {
                //     alert("失败");
                 }
//
//
////             }
        });




    //     $('#chongzhi').fadeOut(200)
     })
</script>
</body>
</html>
@endsection
