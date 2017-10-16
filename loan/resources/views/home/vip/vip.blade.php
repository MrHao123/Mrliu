@extends('header')
@section('content')
    <!--我的会员中心内容开始-->

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


                <div>
                    <ul>
                        <li>
                            {{--placeholder--}}
                            <button style="background-color: #881280 "> 姓&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;名</button><input type="text" id="user"  disabled>
                            <button style="background-color: #881280 "> 身份证号</button><input type="text"  id="pwd"  disabled>
                        </li>
                        <li>
                            <button style="background-color: #881280 "> 年&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;龄</button><input type="text" id="pwd"  disabled>
                            <button style="background-color: #881280 "> 性&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;别</button><input type="text"  id="pwd" disabled>
                        </li>
                        <li>
                            <button style="background-color: #881280 "> 电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</button><input type="text" id="pwd"  disabled>
                            <button style="background-color: #881280 "> 邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;箱</button><input type="text"  id="pwd" disabled>
                        </li>
                        <li>
                            <button style="background-color: #881280 "> 家庭住址</button><input type="text"  id="pwd"  disabled>
                            <button style="background-color: #881280 "> 现居地址</button><input type="text"  id="pwd"  disabled>
                        </li>
                        <li>
                            <button style="background-color: #881280 "> 公&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;司</button><input type="text"  id="pwd" disabled>
                            <button style="background-color: #881280 "> 薪&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;资</button><input type="text"  id="pwd" disabled>千元
                        </li>

                    </ul>
                </div>



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
          <div class="hy-left-info3" id='five' style="display: none">
                <h3 class="hy-left-title1">我的账户</h3>
                <div class="hy-if3-k1">
                    <center>
                    <p class="current">我的余额:(显示当前用户下的余额）</p><br><br><br>
                    <p><input type="button" value="我要充值" id="recharge" style="background-color:#0000ff">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="button" value="我要提现" id="withdraw" style="background-color: #0000ff"></p>
                    </center>
                </div>
            </div>
        </div>
        <div style="clear:both;"></div>
    </div>
 <!-- 4 -->
        </div>
        <div style="clear:both;"></div>
    </div>

    {{--<form action=""></form>--}}

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
</script>

</body>
</html>
@endsection
