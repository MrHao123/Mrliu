@extends('header')
@section('content')
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
                            <li>
                                <p>房屋购买时间：</p>
                                <input type="date" name="house_addtime"/>
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
    


</body>
</html>
@endsection
