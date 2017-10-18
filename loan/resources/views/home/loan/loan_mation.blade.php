@extends('header')
@section('content')

<?php if($error==1){ ?>

    <?php if($msg!=-1){?>
        <!--18贷信息填写页面内容开始-->
            <!--当前地点-->
    <div class="current-dd w1120">
        <p><a href="#">首页</a> > <a href="#">首次登录跳转页面</a></p>
    </div>
    
            <!--18贷信息填写页面   开始-->
    <div class="dai-xingxi w1120">

        <div class="dai-xx-con">
            <div class="dai-xx-left f-l">
                <div class="dai-x-l2">
                    <div class="dai-l2-title">
                <?php foreach($data as $k=>$v): ?>
                        <h3><?php echo $v->type_name; ?></h3>
                        <?php endforeach ; ?>
                    </div>
                    <div class="dai-l2-box">
                        <ul class="dai-l2-con f-l">
                            <form action="loan_add" method="post" enctype="multipart/form-data">
                                <li>
                                    <p>贷款类型：</p>
                                    <p><?php echo $v->type_name; ?></p>
                                    <input type="hidden" value="<?php echo $v->type_id; ?>" name="type_id"/>
                                    <div style="clear:both;"></div>
                                </li>
                            <li>
                                <p>房主姓名：</p>
                                <input type="text" name="house_name"/>
                                <div style="clear:both;"></div>
                            </li>
                                <li>
                                    <p>亲属姓名：</p>
                                    <input type="text" name="house_name_relatives"/>
                                    <div style="clear:both;"></div>
                                </li>
                                <li>
                                    <p>亲属关系：</p>
                                    <input type="text" name="house_relationship"/>
                                    <div style="clear:both;"></div>
                                </li>
                                <li>
                                    <p>亲属联系方式：</p>
                                    <input type="text" name="house_relationship_tel"/>
                                    <div style="clear:both;"></div>
                                </li>
                            <li>
                                <p>房产证照片：</p>
                                <input type="file" name="house_img"/>
                                <div style="clear:both;"></div>
                            </li>
                                <li>
                                    <p>房屋首付证明：</p>
                                    <input type="file" name="house_prove"/>
                                    <div style="clear:both;"></div>
                                </li>
                            <li>
                                <p>房屋位置：</p>
                                <input type="text" name="house_address"/>
                                <div style="clear:both;"></div>
                            </li>

                                <li align="center">
                                    <input type="submit" value="提交信息" />
                                    <div style="clear:both;"></div>
                                </li>
                            </form>
                        </ul>
                        <div class="dai-l2-tu f-r">
                            <img src="{{asset('home/images/xiangxi-03.gif')}}" />
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>

            </div>
            <div class="dai-xx-right f-l">
                <h3>特别声明：</h3>
                <p>您的信息将只作为产品推荐使用，不会以任何形式泄露给其他人员或机构。</p>
                <p>您的信息将只作为产品推荐使用，不会以任何形式泄露给其他人员或机构。</p>
            </div>
            <div style="clear:both;"></div>
        </div>
    </div>
<?php }else{?>
数据库错误，请联系客服人员，并提交该错误
<?php }?>
<?php }else{?>
<div id="overlay">
<div class="wenchang1">
    <p></p><br>
    <p class="p">您还没有实名认证</p>
    <p></p><br><br>
    <p class="p">完成实名认证即可贷款</p>
    <button class="but" id="buts">前去实名认证</button>
    <button class="but" id="but">取消,返回首页</button>

</div>
</div>
<?php }?>
<style>
    .wenchang1{
        width: 800px;
        height: 340px;
        background-color: red;
        margin-left: 350px;
    }
    .p{
        font-size: 30px;
        text-align: center;
    }
    .but{
      height: 50px;
      margin-top: 140px;
    }
     #buts{
      margin-left: 240px;
    }
    #but{
        margin-left: 70px;
    }
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
<script>
 /* 当前页面高度 */
    var height=document.body.scrollHeight;
    /* 当前页面宽度 */
    var width=document.body.scrollWidth;
 
    /* 当前页面宽度 */
    $("#overlay").height(height);
    $("#overlay").width(width);
    // // fadeTo第一个参数为速度，第二个为透明度
    // // 多重方式控制透明度，保证兼容性，但也带来修改麻烦的问题
    $("#overlay").fadeTo(200,0.5);
    // //关闭后隐藏
    // $('#imgs').click(function(){
    //     $('#overlay').fadeOut(200)
    // })
</script>
</body>
</html>
@endsection
