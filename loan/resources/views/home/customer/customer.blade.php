@extends('header')
@section('content')
     <!-- 广告位 -->
<div class="chedai-banner">
    <a href="#"><img src="{{asset('home/images/daikuan-01.jpg')}}" /></a>
    <div class="cd-bn-box">
    </div>
</div>
    <!-- 广告位 -->
<style>
    .dai-left{
        width: 1200px;
    }
    #wenchang1{
        height: 300px;
        width: 1200px;
        background-image:url( {{asset('home/images/chedai-01.jpg')}});
    }
    .dai-r-ft li{
        margin-top: 190px;margin-left:300px
    }
    #wenchang2{
        height: 200px;
        width: 1200px;
        background-image:url( {{asset('home/images/chedai-01.jpg')}});
    }
    #wenchang3{
       height: 500px;
       width: 1200px;
       background-image:url( {{asset('home/images/chedai-01.jpg')}});
    }
</style>
            <!--18贷款列表页   开始-->
<div class="dai-content w1120" >
    <div class="dai-left f-l">
        <div class="dai-l-title1">
            <h3>选择理财模式</h3>
        </div>
        <!-- 循环开始 -->
            <div class="dai-con-box">
                <div class="dai-box-ifon3">
                <!--  -->
                    <div class="dai3-kuai" id="wenchang1">
                        <div class="dai-k-r f-r" >
                          <ul class="dai-r-ft">
                                <li>
                                    <a href=""><button>网站投资理财</button></a>
                                </li>
                            </ul>
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
         </div>
         <!-- 循环结尾 -->
     </div>
<!-- 理财流程图 -->
   <div class="dai-left f-l" style="width: 1200px ">
        <div class="dai-l-title1">
            <h3>理财流程图</h3>
        </div>
        <!-- 循环开始 -->
            <div class="dai-con-box">
                <div class="dai-box-ifon3">
                    <div class="dai3-kuai" id="wenchang2">
                        <div class="dai-k-r f-r" >
                       
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
         </div>
         <!-- 循环结尾 -->
     </div>
<!-- 理财流程图 -->
<!-- 网站信息介绍 -->
   <div class="dai-left f-l" style="width: 1200px ">
        <div class="dai-l-title1">
            <h3>网站信息介绍</h3>
        </div>
        <!-- 循环开始 -->
            <div class="dai-con-box">
                <div class="dai-box-ifon3">
                    <div class="dai3-kuai" id="wenchang3">
                        <div class="dai-k-r f-r" >
                       
                        </div>
                        <div style="clear:both;"></div>
                    </div>
                </div>
         </div>
         <!-- 循环结尾 -->
     </div>
<!-- 网站信息介绍 -->
</div>
<!-- 底部固定 -->
 <div style="clear:both;"></div>
 <!-- 底部固定 -->
</body>
</html>
@endsection
