let tabNum = 0

function checkScrollListener(){
	/*********히스토리**********/
	winH = top.window.innerHeight;
	scTop = $(window).scrollTop();
	historyTop = $(".histroy_contents li").eq(0).find(".year").offset().top
	year19 = $(".year19").offset().top+120
	lastYear = $(".lastyear").offset().top+120
	tab0 = $(".tab0").offset().top+120
	tab1 = $(".tab1").offset().top+120
	tab2 = $(".tab2").offset().top+120
	tab3 = $(".tab3").offset().top+120
	//console.log(historyTop)
	if((scTop+winH/2)-120>=historyTop && (scTop+winH/2)<lastYear){
		$(".history_nav").css('position','fixed').css('top','50%').css('margin-top','-325px')
	}else if((scTop+winH/2)>=lastYear){
		$(".history_nav").css('position','absolute').css('top','5455px').css('margin-top','0px')
	}else{
		$(".history_nav").css('position','absolute').css('top','9px').css('margin-top','0px')
	}
	if(scTop+winH/2>year19){
		$(".history_nav .year").text('19')
	}else{
		$(".history_nav .year").text('20')
	}
	if((scTop+winH/2)-120<historyTop){
		if(tabNum != 0){
			tabNum = 0;
			settingTab();
		}
	}else if(scTop+winH/2>=tab0 && scTop+winH/2 < tab1){
		if(tabNum != 0){
			tabNum = 0;
			settingTab();
		}
	}else if(scTop+winH/2>=tab1 && scTop+winH/2 < tab2){
		if(tabNum != 1){
			tabNum = 1;
			settingTab();
		}
	}else if(scTop+winH/2>=tab2 && scTop+winH/2 < tab3){
		if(tabNum != 2){
			tabNum = 2;
			settingTab();
		}
	}else if(scTop+winH/2>=tab3 && (scTop+winH/2)<lastYear){
		if(tabNum != 3){
			tabNum = 3;
			settingTab();
		}
	}else{
		if(tabNum != 3){
			tabNum = 3;
			settingTab();
		}
	}
	if($(window).width()>1440){
		$(".history_nav").css("margin-left","-645px");
	}else{
		let _leftNum = -645-$(window).scrollLeft()-($(window).width()-1440)/2;
		if($(".history_nav").css("position") == 'absolute'){
			$(".history_nav").css("margin-left","-645px");
		}else{
			$(".history_nav").css("margin-left",_leftNum+"px");
		}
	}
	//if(scTop>500){
	//	TweenMax.to($("#btnTop"),0.5,{autoAlpha:1, ease:Expo.easeOut});
	//}else{
	//	TweenMax.to($("#btnTop"),0.5,{autoAlpha:0, ease:Expo.easeOut});
	//}
	/***********************************************************************************************/
}
function settingTab(){
	$(".history_nav ul").eq(0).find("li").each(function(){
		if($(this).index()<tabNum){
			TweenMax.to($(this),0.3,{y:0, autoAlpha:0.3, ease:Expo.easeOut});
		}else if($(this).index() == tabNum){
			TweenMax.to($(this),0.5,{y:0, autoAlpha:1, ease:Expo.easeOut});
		}else{
			TweenMax.to($(this),0.3,{y:50, autoAlpha:0, ease:Expo.easeOut});
		}
	})
	$(".history_nav ul").eq(1).find("li").each(function(){
		if($(this).index()<=tabNum){
			TweenMax.to($(this),0.5,{y:-50, autoAlpha:0, ease:Expo.easeOut});
		}else{
			TweenMax.to($(this),0.3,{y:0, autoAlpha:0.3, ease:Expo.easeOut});
		}
	})
}

function historyNaviClickHandler(e){
	e.preventDefault();
	tabTop = $(".tab"+$(this).index()).offset().top-(winH/2)+136
	TweenMax.to($('body',document),(0.4*$(this).index()+1),{scrollTop:tabTop, ease:Cubic.easeOut});
}

$(document).ready(function(){
	$("body",document,window).bind("scroll",checkScrollListener);
	$(document,window).bind("scroll",checkScrollListener);
	$(window).bind("resize",checkScrollListener);
	checkScrollListener();
	settingTab();
	$(".history_nav ul li").bind('click',historyNaviClickHandler);
});
