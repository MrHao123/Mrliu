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
                        <h3>填写抵押资料</h3>
                    </div>
                    <div class="dai-l2-box">
                        <ul class="dai-l2-con f-l">
                            <form action="loan_mation" method="post" enctype="multipart/form-data">
                                <li>
                                    <p>贷款类型：</p>
                                    <p></p>
                                    <select name="type_id" class="sele">
                                    <option value="0">--请选择--</option>
                                    <?php foreach($data as $k=>$v):?>
                                            <option value="<?=$v->type_id.'/'.$v->table_name?>"><?=$v->type_name?></option>
                                        <?php endforeach;?>
                                    </select>
                                        <input type="hidden" value="<?=$info->info_id?>" name='info_id'>
                                        <input type="hidden" value="<?=$info->info_name?>" name='info_name'>
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
    <script>
    $('.sele').change(function(){
       var types=$(this).val()
       var arr=types.split('/');
       than=$(this)
       var str='';
       // console.log(arr[0],"\n",arr[1]);
       if(arr[1]=='houseloan')
       {
          than.parent().next().remove()
        str+='<li>';
        str+='<p>房主名称：</p>';
        str+='<p></p>';
        str+='<input type="text" name="house_name">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<p>实名认证：</p>';
        str+='<p></p>';
        str+='<input type="hidden" name="yes" value="1"/>';
        str+='<b style="color: red">已认证</b>';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<p>联系电话：</p>';
        str+='<p></p>';
        str+='<input type="text" name="user_tel">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<p>备用电话：</p>';
        str+='<p></p>';
        str+='<input type="text" name="user_tels">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<p>房产证件照：</p>';
        str+='<p></p>';
        str+='<input type="file" name="house_img">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<input type="submit" value="提交信息">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
            than.parent().after("<span>"+str+"</span>")

       }
       else if(arr[1]=='chezi')
       {
            than.parent().next().remove()
        str+='<li>';
        str+='<p>车主名称：</p>';
        str+='<p></p>';
        str+='<input type="text" name="house_name">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<p>实名认证：</p>';
        str+='<p></p>';
        str+='<input type="hidden" name="yes" value="1"/>';
        str+='<b style="color: red">已认证</b>';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<p>联系电话：</p>';
        str+='<p></p>';
        str+='<input type="text" name="user_tel">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<p>备用电话：</p>';
        str+='<p></p>';
        str+='<input type="text" name="user_tels">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<p>车辆证件照：</p>';
        str+='<p></p>';
        str+='<input type="file" name="house_prove">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        str+='<li>';
        str+='<input type="submit" value="提交信息">';
        str+='<div style="clear:both;"></div>';
        str+='</li>';
        than.parent().after("<span>"+str+"</span>")
       }
       else
       {
        than.parent().next().remove()
       }
        // $.ajax({
        //     data:{
        //         'types':types
        //     },
        //     url:'loan_mation',
        //     type:'post',
        //     // dataType:'json',
        //     success:function(data)
        //     {
        //         alert(data)
        //     }
        // })
        
    })


</script>
</body>
</html>
@endsection

