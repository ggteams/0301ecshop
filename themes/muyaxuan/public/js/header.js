// JavaScript Document
$('.head_1 li:eq(1)').hover(function(){
	$('.li_div').show();
	$('.div').show();
	$('.head_1 li:eq(1)').css('border','1px solid #ccc');
	$('.head_1 li').eq(1).css('background','#fff');
	},function(){
		$('.li_div').hide();
	    $('.div').hide();
	    $('.head_1 li').eq(1).css('border','1px solid #e4dfda');
		$('.head_1 li').eq(1).css('background','none');
		})
		
$('.head_2 li:eq(1)').hover(function(){
	$('.li_div_1').show();
	$('.div_1').show();
	$('.head_2 li').eq(1).css('border','1px solid #ccc');
	$('.head_2 li').eq(1).css('background','#fff');
	},function(){
		$('.li_div_1').hide();
	    $('.div_1').hide();
	    $('.head_2 li').eq(1).css('border','1px solid #e4dfda');
		$('.head_2 li').eq(1).css('background','none');
		})
		
$('.head_2 li:eq(2)').hover(function(){
	$('.li_div_2').show();
	$('.div_2').show();
	$('.head_2 li').eq(2).css('border','1px solid #ccc');
	$('.head_2 li').eq(2).css('background','#fff');
	},function(){
		$('.li_div_2').hide();
	    $('.div_2').hide();
	    $('.head_2 li').eq(2).css('border','1px solid #e4dfda');
		$('.head_2 li').eq(2).css('background','none');
		})

$('.head_2 li:eq(4)').hover(function(){
	$('.li_div_3').show();
	$('.div_3').show();
	$('.head_2 li').eq(4).css('border','1px solid #ccc');
	$('.head_2 li').eq(4).css('background','#fff');
	},function(){
		$('.li_div_3').hide();
	    $('.div_3').hide();
	    $('.head_2 li').eq(4).css('border','1px solid #e4dfda');
		$('.head_2 li').eq(4).css('background','none');
		})
		
//nav导航栏
$('.nav_1').hover(function(){
	$('.nav_1_select').toggle();
	})

//回到顶部的事件
$(function() {
	/* 给图片元素绑定 回到顶部的事件 */
	$(function() {
	  $(".thep img").on("click", function() {
		$('body,html').animate({
		  scrollTop: 0
		}, 1000);
		return false;
	  });
	});
	$(function() {
	  $(".thep p").on("click", function() {
		$('body,html').animate({
		  scrollTop: 0
		}, 1000);
		return false;
	  });
	});
  });
	
