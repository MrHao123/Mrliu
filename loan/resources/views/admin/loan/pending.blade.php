<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=8" >
<title>房贷审核申请</title>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/reset.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/common.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('admin/css/thems.css')}}">
<script type="text/javascript" src="{{asset('admin/js/jquery-1.8.3.min.js')}}"></script>
<script type="text/javascript">
$(function(){
    //自适应屏幕宽度
    window.onresize=function(){ location=location }; 
    
    var main_h = $(window).height();
    $('.hy_list').css('height',main_h-45+'px');
    
    var search_w = $(window).width()-40;
    $('.search').css('width',search_w+'px');
    $('.list_hy').css('width',search_w+'px');
});
</script>
<!--框架高度设置-->
</head>

<body>
<div id="right_ctn">
    <div class="right_m">
        <!--审核列表-->
        <div class="hy_list">
            <div class="box_t">
                <span class="name">房贷审核列表</span>
                <!--当前位置-->
                <div class="position">
                    <a href=""><img src="{{asset('admin/images/icon5.png')}}" alt=""/></a>
                    <a href="">贷款审核</a>
                    <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">房贷审核列表</a>
                    <!-- <span><img src="{{asset('admin/images/icon3.png')}}" alt=""/></span>
                    <a href="">GK注册信息</a> -->
                </div>
                <!--当前位置-->
            </div>
            <div class="space_hx">&nbsp;</div>
            <!--列表-->
            <form action="" method="post">
            <table cellpadding="0" cellspacing="0" class="list_hy">
              <tr>
                <th class="xz" scope="col">选择</th>
                <th scope="col">抵押物</th>
                <th scope="col">贷款人</th>
                <th scope="col">亲属姓名</th>
                <th scope="col">与亲属关系</th>
                <th scope="col">亲属联系方式</th>
                <th scope="col">房产证照片</th>
                <th scope="col">房屋首付证明</th>
                <th scope="col">房屋位置</th>
                <th scope="col">审核提交时间</th>
                <th scope="col">审核完成时间</th>
                <th scope="col">状态</th>
              </tr>
                  @foreach ($info as $v)
              <tr>
                <td class="xz"><input name="" type="checkbox" value=""></td>
                <td>{{$v->house_id}}</td>
                <td>{{$v->house_name}}</td>
                <td>{{$v->house_name_relatives}}</td>
                <td>{{$v->house_relationship}}</td>
                <td>{{$v->house_relationship_tel}}</td>
                <td><img src="{{$v->house_prove}}" alt="" style="width:100px; height=100px; "></td>
                <td><img src="{{$v->house_img}}" alt="" style='width:100px,height:100px'></td>
                <td>{{$v->house_address}}</td>
                <td>{{$v->house_addtime}}</td>
                <td>{{$v->house_endtime}}</td>
                <td>
                    <select name="" house_id="{{$v->house_id}}" class="is_check">
                       {{---<option value="">全部</option>---}}
                       <?php
                        if ($v->house_state==0) 
                        {
                            echo "<option value='0' selected='selected'>未审核</option>
                                  <option value='1' >审核中</option>
                                  <option value='2' >审核失败</option>
                                  <option value='3' >审核成功</option>";
                           
                        }elseif($v->house_state==1)
                        {
                            echo "<option value='0' >未审核</option>
                                  <option value='1' selected='selected'>审核中</option>
                                  <option value='2' >审核失败</option>
                                  <option value='3' >审核成功</option>";

                        }
                        elseif($v->house_state==2)
                        {
                             echo "<option value='0' >未审核</option>
                                  <option value='1' >审核中</option>
                                  <option value='2' selected='selected'>审核失败</option>
                                  <option value='3' >审核成功</option>";

                        }
                        if($v->house_state==3)
                        {
                            echo "<option value='0' >未审核</option>
                                  <option value='1' >审核中</option>
                                  <option value='2' >审核失败</option>
                                  <option value='3' selected='selected'>审核成功</option>";
                        }
                       ?>
                    </select>
                </td>
                    
              </tr>
                    @endforeach
            </table>
            <!--列表-->
            <!--右边底部-->
             <div class="r_foot">
                <div class="r_foot_m">
                <span>
                    <input name="" type="checkbox" value="">
                    <em>全部选中</em>
                </span>
                <a href="" class="btn">删除</a>
                <a href="" class="btn">刷新</a>
                
                <!--分页-->
                <div class="page">
                    <a href="" class="prev"><img src="{{asset('admin/images/icon7.png')}}" alt=""/></a>
                    <a class="now">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">4</a>
                    <a href="">5</a>
                    <a href="">6</a>
                    <a href="" class="next"><img src="{{asset('admin/images/icon8.png')}}" alt=""/></a>
                </div>
                <!--分页-->
                </div>
            </div>
            </form>
            <!--右边底部-->

        </div>
        <!--会议列表-->
    </div>
</div>
</body>
</html>

<script src="{{asset('jquery-1.7.2.min.js')}}"></script>
<script>
    $(function(){
        $('.is_check').change(function(){
            // alert(1);die;
            var obj=$(this);
            var house_id=obj.attr('house_id');  //ID
            var status=obj.val();   //获取要修改的状态值
            // alert(house_id+','+status);
             var url="status";
        $.ajax({
            type:'get',
            url: url,
            data:{house_id:house_id,status:status},
            dataType:'json',
            success:function(msg){
                  // alert(msg);
                  // return;
                window.location.href=window.location.href;
            }
        })

        })
        })
</script>