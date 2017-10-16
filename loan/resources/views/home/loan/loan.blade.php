@extends('header')
@section('content')
    <link type="text/css" rel="stylesheet" href="{{asset('home/css/basic.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('home/css/index.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('home/css/iconfont.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('home/css/layer.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{asset('home/css/call.css')}}" />

    <!--18贷款列表页 页面内容开始-->
    <!--banner 图部分-->
    <div class="chedai-banner">
        <a href="#"><img src="{{asset('home/images/daikuan-01.jpg')}}" /></a>
        <div class="cd-bn-box">
        </div>
    </div>
    <!--当前地点-->
    <!--18贷款列表页   开始-->


    <div class="bg_color4">
        <div class="ofh wl mtauto bg_color2">

            <?php foreach($data as $k => $v) :?>

            <div class="wanted-borrow bd_e6 mt22 ofh wanted-borrow-wdx1">
                <div class="fl bg_color6 wanted-borrow-l">
                    <p class="fs20 fc3 tc mt35 mb25"><?php echo $v->type_name;?></p>
                    <div class="tc"><img src="<?php echo $v->type_img; ?>"/></div>
                    <p class="wanted-borrow-l-txt fs12 fc_80 fstyle1 lh22"><?php echo $v->type_message?></p>
                </div>
                <div class="fr">
                    <div class=" mt10">
                        <ul class="process-invest process-invest2">
                            <li class=" animate2">
                                <div class="process-invest-pic process-invest-iocn12"></div>
                                <div class="process-invest2-txt1">借款对象</div>
                                <div class="process-invest2-txt2"><?php echo $v->type_object; ?></div>
                            </li>
                            <li>
                                <div class="triangle-right3"></div>
                            </li>
                            <li class=" animate2">
                                <div class="process-invest-pic process-invest-iocn13"></div>
                                <div class="process-invest2-txt1">授信额度</div>
                                <div class="process-invest2-txt2">1万－500万</div>
                            </li>
                            <li>
                                <div class="triangle-right3"></div>
                            </li>
                            <li class="animate2">
                                <div class="process-invest-pic process-invest-iocn14"></div>
                                <div class="process-invest2-txt1">贷款利率</div>
                                <div class="process-invest2-txt2">8%－15%</div>
                            </li>
                            <li>
                                <div class="triangle-right3"></div>
                            </li>
                            <li class=" animate2">
                                <div class="process-invest-pic process-invest-iocn15"></div>
                                <div class="process-invest2-txt1">质押物</div>
                                <div class="process-invest2-txt2">房屋质押</div>
                            </li>
                            <li>
                                <div class="triangle-right3"></div>
                            </li>
                            <li class=" animate2">
                                <div class="process-invest-pic process-invest-iocn16"></div>
                                <div class="process-invest2-txt1">借款周期</div>
                                <div class="process-invest2-txt2">6个月以内</div>
                            </li>
                        </ul>
                    </div>
                    <a href="loan_mation?id=<?php echo $v->type_id; ?>" id="login"> <div class="btn-reg-box1" id="apply_invest1"><div class="btn-reg pr40 pl40">立 即 申 请</div></div> </a>
                </div>
            </div>
            <?php endforeach ?>


            <div class="process-title2 mt45"><span>借款流程</span></div>
            <div class=" mt56">
                <ul class="process-invest w8 pl40">
                    <li class=" animate">
                        <div class="process-invest-pic process-invest-iocn1"></div>
                        <div class="process-invest-txt">免费注册</div>
                    </li>
                    <li>
                        <div class="triangle-right"></div>
                    </li>
                    <li class=" animate">
                        <div class="process-invest-pic process-invest-iocn2"></div>
                        <div class="process-invest-txt">开通新浪托管账户</div>
                    </li>
                    <li>
                        <div class="triangle-right"></div>
                    </li>
                    <li class=" animate">
                        <div class="process-invest-pic process-invest-iocn3"></div>
                        <div class="process-invest-txt">域名授信</div>
                    </li>
                    <form action="" enctype="multipart/form-data"></form>
                    <li>
                        <div class="triangle-right"></div>
                    </li>
                    <li class=" animate">
                        <div class="process-invest-pic process-invest-iocn4"></div>
                        <div class="process-invest-txt">发标借款</div>
                    </li>
                    <li>
                        <div class="triangle-right"></div>
                    </li>
                    <li class=" animate">
                        <div class="process-invest-pic process-invest-iocn5"></div>
                        <div class="process-invest-txt">满标放款</div>
                    </li>
                    <li>
                        <div class="triangle-right"></div>
                    </li>
                    <li class=" animate">
                        <div class="process-invest-pic process-invest-iocn6"></div>
                        <div class="process-invest-txt">按期还款</div>
                    </li>
                </ul>
            </div>
            <div class="process-title2 mt45"><span>常见问题</span></div>
            <ul class="borrow-info mt45 mb60">
                <li>
                    <div class="borrow-info-num">1</div>
                    <div class="borrow-info-txt">
                        <p class="borrow-info-txt-xx1">如何申请授信？</p>
                        <p class="borrow-info-txt-xx2">注册登录简贷官网或者app通过实名认证后提交本人的域名给简贷平台，提交的域名必须是有价值易流通的符合平台规定。</p>
                    </div>
                </li>
                <li>
                    <div class="borrow-info-num">2</div>
                    <div class="borrow-info-txt">
                        <p class="borrow-info-txt-xx1">如何质押？</p>
                        <p class="borrow-info-txt-xx2">借款人将经过简贷风控团队授信后的域名PUSH到简贷指定的平台账号：易名中国ID(167719)、爱名网ID（1060210）、万网账号（简贷金融）下，并通知客服确认。</p>
                    </div>
                </li>
                <li>
                    <div class="borrow-info-num">3</div>
                    <div class="borrow-info-txt">
                        <p class="borrow-info-txt-xx1">如何发布借款项目？</p>
                        <p class="borrow-info-txt-xx2">只有经过授信且域名质押后才可以提交申请借款，通过质押/域名管理的已质押域名列表申请发布借款项目。</p>
                    </div>
                </li>
                <li>
                    <div class="borrow-info-num">4</div>
                    <div class="borrow-info-txt">
                        <p class="borrow-info-txt-xx1">为什么发布不了借款项目？</p>
                        <p class="borrow-info-txt-xx2">您有严重逾期或者授信额度不够。</p>
                    </div>
                </li>
                <li>
                    <div class="borrow-info-num">5</div>
                    <div class="borrow-info-txt">
                        <p class="borrow-info-txt-xx1">逾期了怎么办？</p>
                        <p class="borrow-info-txt-xx2">如果借款人未在规定的时间还本付息，平台将加收罚金；借款逾期七天后，平台将对借款人的抵质押物进行依法处理用以清偿债务。如果逾期还款，简贷平台有权根据具体情况将用户列入不良信用客户，强烈呼吁借款人尽量避免逾期还款，一旦发生逾期请尽快还清贷款。</p>
                    </div>
                </li>

                <li>
                    <div class="borrow-info-num">6</div>
                    <div class="borrow-info-txt">
                        <p class="borrow-info-txt-xx1">可以提前还款吗？</p>
                        <p class="borrow-info-txt-xx2">可以提前还款，提前还款需支付1期利息及管理费做为违约罚金。</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="wzlb-right f-r">
        <div class="wzlb-r-info1">
        </div>
    </div>
    <div style="clear:both;"></div>
    </dl>
    </div>
    <div style="clear:both;"></div>
    </div>
    </body>
    </html>
@endsection
