@extends('header')
@section('content')
<!--我的账户开始-->
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
        <!-- 个人信息完善、展示 -->
        <div class="hy-right-info2" id='one'>
            <div class="hy-rif2-title1">
                <h3><img src="{{asset('home/images/huiyuan-12.gif')}}" />个人信息</h3>
            </div>
            {{--展示个人信息--}}
            <?php if($select!=1){ ?>
            <?php foreach ($select as $val) : ?>
            <div>
                <ul>
                    <li>
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
                        <button style="background-color: #881280 "> 银行卡号</button><input type="text"  id="pwd" value="<?php echo $val->info_bankcard; ?>" disabled>
                        <button style="background-color: #881280 "> 余&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;额</button><input type="text"  id="pwd" value="<?php echo $val->info_money; ?>" disabled>单位元
                    </li>

                </ul>
            </div>
            <?php endforeach ?>
            <?php  }else{ ?>
            <style>
                #overlay {
                    background: #000;
                    filter: alpha(opacity=50); 
                    position: fixed;
                    top: 22%;
                    left: 37%;
                }
                #form{
                    position: fixed;
                    top: 30%;
                    left: 43%;
                    background-color: #FCF6EA;
                    width: 580px;
                    height: 460px;
                }
                #imgs{
                    position: fixed;
                    top: 31%;
                    left: 70%;
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
                <p> <input type="text" name="info_bankcard" id="pwd" placeholder="银行卡号：">&nbsp;&nbsp;
                    <input type="text" name="info_pwd" id="pwd" placeholder="支付密码：">
                </p>
                <p><input type="submit" id="submit"  class="subs" value="提交" style="background-color:#11CBBE"></p>
            </center>
        </form>
            </div>
            <?php }?>

        </div>

        <!-- 我要借款 -->
        <div class="hy-left-info2" id='two' style="display: none">
            <h3 class="hy-left-title1">我的借款</h3>
            <div class="hy-if3-k1">




            </div>
        </div>
    <!-- 我的理财 -->
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
    <!-- 我的账户 -->

        <div class="hy-left-info3" id='five' style="display: none">
        <h3 class="hy-left-title1">我的账户</h3>
        <div class="hy-if3-k1" >

            <?php if($select!=1){ ?>
                <?php foreach ($select as $val) : ?>

                <p class="current">我的余额:&nbsp;&nbsp;<?php echo $val->info_money; ?>&nbsp;&nbsp;人民币</p><br><br><br>
                <?php endforeach ?>
                <?php }else{ ?>
                <p class="current">您当前尚未充值。。。</p><br><br><br>
                <?php } ?>
                <p><input type="button" value="我要充值" id="recharge" style="background-color:#0000ff">&nbsp<input type="button" value="我要提现" id="withdraw" style="background-color: #0000ff"></p>
            </center>

        </div>


    <div style="clear:both;"></div>
<div>
    <style>
        #cz {
            background: #000;
            filter: alpha(opacity=50);
            position: fixed;
            top: 22%;
            left: 37%;
        }
        #czb{
            display:none;
            position: fixed;
            top: 30%;
            left: 44%;
            background-color: #FCF6EA;
            width: 400px;
            height: 300px;
        }
        #img{
            position: fixed;
            top: 31%;
            left: 63%;
        }
    </style>
    <div id="cz">

        <form  id="czb" >
            <center>
                <img src="{{asset('home/images/huiyuan-12.gif')}}" id="img" title="关闭">
                <p><input type="text" name="cz_card"  id="user"  placeholder="银行卡号："></p>
                <p><input type="text" name="cz_money" id="pwd"   placeholder="金额："></p>
                <p><input type="text" name="cz_pwd"   id="pwd"   placeholder="支付密码："></p>
                <p><input type="button"   class="subss" value="提交" style="background-color:#11CBBE"></p>
            </center>
        </form>
    </div>
</div>
    </div>

        </div >
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
        $.ajax({
            cache: true,
            type: "POST",
            url:"information",
            data:$('#form').serialize(),// 你的form id
            async: false,
//            dataType:'json',
//            error: function(request) {
//                alert("error");
//            },
            success: function(data) {
                if(data) {
                    alert(data);
                }else {
                    alert("失败");
                }
            }
        });
        $('#overlay').fadeOut(200);
    })
</script>
    <script>

        $('#recharge').click(function(){
            $("#czb").attr("style"," display: block;");
            var height=document.body.scrollHeight;
            /* 当前页面宽度 */
            var width=document.body.scrollWidth;
            /* 当前页面宽度 */
            $("#cz").height(height);
            $("#cz").width(width);
            // fadeTo第一个参数为速度，第二个为透明度
            // 多重方式控制透明度，保证兼容性，但也带来修改麻烦的问题
            $("#cz").fadeTo(200,0.9);
            //关闭后隐藏
            $('#img').click(function(){
                $('#cz').fadeOut(200)
            })

            $('.subss').click(function(){
                $.ajax({
                    cache: true,
                    type: "POST",
                    url:"recharge",
                    data:$('#czb').serialize(),// 你的form id
                    async: false,
                    success: function(data) {
//                        alert(data);
                        if(data) {
                            alert("充值成功");
                        }
                        else {
                            alert("充值失败");
                        }
                    }
                })
                $('#cz').fadeOut(200);
            })
        })
    </script>

{{--</body> </html>--}}
@endsection
