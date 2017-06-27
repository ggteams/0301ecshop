// JavaScript Document
$(document).ready(function () {
	
	/* 图片滚动效果 */
	$(".mr_frbox").slide({
		titCell: "",
		mainCell: ".mr_frUl ul",
		autoPage: true,
		effect: "leftLoop",
		autoPlay: true,
		vis: 4
	});
});

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