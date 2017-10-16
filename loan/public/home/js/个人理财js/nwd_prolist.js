$(function(){
	var navLi = $(".xinbiao_head li");
		navLi.hover(
			function(){
			if($(this).index()==4){
				$(this).children('.proNamemore').addClass('proNamemoreH');
				$(this).find("em").addClass("hovertpro");
				$(this).find(".proNamemorelist").stop(true).slideDown("fast");
			}
		},function(){
			if($(this).index()==4){
				$(".proNamemorelist").stop(true).slideUp("fast");
				$(this).find("em").removeClass("hovertpro");
				$(this).children(".proNamemore").removeClass('proNamemoreH');
		}
		}
		);//列表搜索产品条件
		
//		var newProName = $(".xinbiao_head li .proNamemorelist a");
//			newProName.click(
//			function(){
//				$(this).parent().slideUp().siblings(".proNamemoreCon").find("span").html($(this).children("label").html());
//			}
//		);


	$("#investHorize li.cur").addClass("ui-select-listBox-list--now").siblings().removeClass("ui-select-listBox-list--now");
	
	  var investHorizelength = $("#investHorize li.cur").index();
   		if(investHorizelength == -1){
	      $("#investHorize .ui-select-listBox-line .ui-select-listBox-l-blue").css({"left":"20px"})
	     } else if (investHorizelength == 1){
	      $("#investHorize .ui-select-listBox-line .ui-select-listBox-l-blue").css({"left":"190px"})
	     } else if(investHorizelength == 2){
	      $("#investHorize .ui-select-listBox-line .ui-select-listBox-l-blue").css({"left":"360px"})
	     }else if(investHorizelength == 3){
	      $("#investHorize .ui-select-listBox-line .ui-select-listBox-l-blue").css({"left":"520px"})
	     }else if(investHorizelength == 4){
	      $("#investHorize .ui-select-listBox-line .ui-select-listBox-l-blue").css({"left":"680px"})
	     }else if(investHorizelength == 5){
	      $("#investHorize .ui-select-listBox-line .ui-select-listBox-l-blue").css({"left":"820px"})
	     }
	  
//	  $(".xinbiao_head li .proNamemoreCon").find("span").html($('.proNamemorelist a.cur').children("label").html());
//	  $(".xinbiao_head li .proNamemoreCon2").find("span").html($('.proNamemorelist2 a.cur').children("label").html());

		var moneydate= $(".tradeRecord .listmoneydate");
			$(".tradeRecord").hover(
				function(){
					moneydate.stop(true).slideDown("fast");
				},function(){
					moneydate.stop(true).slideUp("fast");
				}
			)
	
})
