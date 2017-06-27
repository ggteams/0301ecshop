// JavaScript Document
//图片滚动
$(document).ready(function () {
	
	/* 图片滚动效果 */
	$(".mr_frbox").slide({
		titCell: "",
		mainCell: ".mr_frUl ul",
		autoPage: true,
		effect: "leftLoop",
		autoPlay: true,
		vis: 3
	});
});

//地址点击效果
$('#onadd li:eq(0)').addClass('addn');
$('#onadd li').click(function(){
	if($(this).hasClass('addn')){
	$(this).removeClass('addn');
	}else{
		$('#onadd li').removeClass('addn');
		$(this).addClass('addn');
		}
	$('#onadd li').last().removeClass('addn');
	})