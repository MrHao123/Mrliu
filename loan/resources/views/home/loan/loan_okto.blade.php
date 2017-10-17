@extends('header')
@section('content')
    <!--18贷经理登陆设置成功页面内容开始-->
    <div class="jldl-content w1118">

        <h3 class="hy-left-title1">我的借款</h3>
        <?php foreach($reg as $k=>$v) :?>
        <?php if($v->credit_state == 1){ ?>

        <div>
            <ul>

                    <div class="jldl-info">
                        <h3 class="jldl-if-h31">您提交的信息正在审核中......，审核通知会在10-30分钟内通知您！</h3>

                    </div>

            </ul>
        </div>
        <?php  }else if($v->credit_state == 3){ ?>

            <div class="jldl-info">
                <h3 class="jldl-if-h31"> <img src="{{asset('home/images/tongguo.jpg')}}" style="width: 50px;height: 25px;"> 您的审核已经通过</h3>
                <br>
                <div id="content" style="text-align:center;margin:px auto;"> <a style="font-size:25px;" href="loan_user">立即贷款</a> </div>
            </div>
        <?php }else{ ?>

            <div class="jldl-info">
                <h3 class="jldl-if-h31">您提交的信息审核未通过</h3>
                <br>
                <div id="content" style="text-align:center;margin:px auto;"> <a style="font-size:25px;">点我查看明细</a> </div>
            </div>
        <?php }?>
        <?php endforeach ;?>
    </div>
    <!--底部开始-->

</body>
</html>
@endsection