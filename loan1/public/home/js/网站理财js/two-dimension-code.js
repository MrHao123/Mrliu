$(function(){

	
	function twoDimensionCode(){
		/*
		var localHref = window.location.href;

		if(localHref.indexOf('user/myaccount')>0)
		{
			$(".lender_account_profile").find("a[href='http://www.yirendai.com/specialpage/fctj01/']").css("background","none");
			$(".lender_account_profile").find("a[href='http://www.yirendai.com/specialpage/fctj01/']").html('<img src="//www.yirendai.com/ccms/two-dimension-code/toMPic/toMPic02.png" />');

		}
		*/

		var localHref = window.location.href;
		var version = '12.0';
       $.ajax({  
				type : "GET",  
				url:'/home/cmsHeaderInfo?i='+Math.random(), 
				dataType : "json",  
				json	: 'aaa',		 
				async: false,
				success:function(cdata){
				if (cdata.status == 'success') {
	
						//出借人
						if (cdata.content.userType == '1') {
				             $('.toMPic01_fe').html('<img src="//www.yirendai.com/ccms/two-dimension-code/toMPic/toMPic06.png?v='+version+'" />');
                             $('.toMPic01_fe').attr("href","//www.yirendai.com/yiqizhuan/invite_friends_2/index.html");
						} 
						//借款人
						if (cdata.content.userType == '0') {					
                             $('.toMPic01_fe').html('<img src="//www.yirendai.com/ccms/two-dimension-code/toMPic/toMPic01.png?v='+version+'" />');
                             $('.toMPic01_fe').attr("href","//app.yirendai.com/n_yirendai.html");
						}
				
					       } 

					}
			 });
        
        

		
        
        
		$('.toMPic02_fe').html('<img src="//www.yirendai.com/ccms/two-dimension-code/toMPic/toMPic02.png?v='+version+'" />');
		$('.toMPic03_fe').html('<img src="//www.yirendai.com/ccms/two-dimension-code/toMPic/toMPic03.jpg?v='+version+'" />');
		//$('.toMPic04_fe').html('<img src="//www.yirendai.com/ccms/two-dimension-code/toMPic/toMPic04.png?v='+version+'" />');
		$('.toMPic05_fe').html('<img src="//www.yirendai.com/ccms/two-dimension-code/toMPic/toMPic05.jpg?v='+version+'" />');
		$('.toMPic02_fe').children("img").css({"width":"100%","height":"42px"})
		// $('.toMPic01_fe,.toMPic02_fe,.toMPic03_fe,.toMPic04_fe,.toMPic05_fe').attr("href","//www.yirendai.com/LandingPage/cj/zh10/");
		$('.toMPic03_fe').attr("href","//www.yirendai.com/specialpage/yrdlc/");
          


                $('.toMPic02_fe').attr("href","//www.yirendai.com/yiqizhuan/invite_friends_2/index.html");
		$('.toMPic05_fe').attr("href","//www.yirendai.com/yiqizhuan/act10-10/index.html");

		$('.footer').find('.footer_cont.innerbox').html('<a class="footer_link_a" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010502031581" target="_blank"> 京公网安备 11010502031581号</a> <a class="footer_link_a" href="/about/icp.html" target="_blank"> 京ICP证150277号</a> 京ICP备15002532号  CreditEase &copy; 2016   恒诚科技发展（北京）有限公司');
		
		//fixbug for java togetherGan.jsp
		if(localHref.indexOf('user/profile/togethergain')>0)
		{
			$('.pro_togetherGan').find('.t_showBox').find('.scrollBox').find('li:last').find('.img').find('img').attr('src','/static/images/yqz/img5.jpg?v=2');

		}
		/*
		if(localHref.indexOf('borrowguide')>0)
		{
			$('.ad-fe-1000').html('<a href="http://www.yirendai.com/specialpage/2015oct/" target="_blank" ><img src="//www.yirendai.com/ccms/two-dimension-code/ad/ad01.gif?v='+version+'" /></a>');
			
			setTimeout(function(){

				$('.show-default').fadeIn();
				
			},4000)
			

		}
		
		*/

	}
	
	twoDimensionCode()

	window.twoDimensionCode = twoDimensionCode;

})