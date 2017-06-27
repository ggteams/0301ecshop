// JavaScript Document
//banner部分
$('.ban_ul li:eq(0)').addClass('aa');
var inSize=$('.banner img').size();
var timer= setInterval(showImg,3000);
var n=0;
function showImg(){
	if(n>=inSize-1){
		n=0}
		else{
			n++}
	$('.ban_ul li').removeClass();
	$('.ban_ul li').eq(n).addClass('aa');
	$('.banner img').hide();
	$('.banner img').eq(n).show();}
$('.banner').hover(function(){
	clearInterval(timer);
       },
	function(){
		timer=setInterval(showImg,3000);
      })
$('.ban_ul li').hover(function(){
	n=$(this).index();
	$('.ban_ul li').removeClass();
	$('.ban_ul li').eq(n).addClass('aa');
	$('.banner img').hide();
	$('.banner img').eq(n).show();})

//实木砧板系列banner
$('.ul_2 li:eq(0)').addClass('bb');
$('.wood_ban .move li').eq(0).show();
var time= setInterval(showPng,3000);
var i=0;
function showPng(){
	if(i>=$('.wood_ban .move li').length-1){
		i=0}
		else{
			i++}
	$('.ul_2 li').removeClass();
	$('.ul_2 li').eq(i).addClass('bb');
	$('.wood_ban .move li').hide();
	$('.wood_ban .move li').eq(i).show();}
$('.wood_ban').hover(function(){
	clearInterval(time);
       },
	function(){
		time=setInterval(showPng,3000);
      })
$('.ul_2 li').hover(function(){
	i=$(this).index();
	$('.ul_2 li').removeClass();
	$('.ul_2 li').eq(i).addClass('bb');
	$('.wood_ban .move li').hide();
	$('.wood_ban .move li').eq(i).show();})
	
//实木调料罐系列banner
$('.tl_2 li:eq(0)').addClass('cc');
$('.wood_ban1 .move li').eq(0).show();
var time1= setInterval(showPng1,3000);
var k=0;
function showPng1(){
	if(k>=$('.wood_ban1 .move li').length-1){
		k=0}
		else{
			k++}
	$('.tl_2 li').removeClass();
	$('.tl_2 li').eq(k).addClass('cc');
	$('.wood_ban1 .move li').hide();
	$('.wood_ban1 .move li').eq(k).show();}
$('.wood_ban1').hover(function(){
	clearInterval(time1);
       },
	function(){
		time1=setInterval(showPng1,3000);
      })
$('.tl_2 li').hover(function(){
	k=$(this).index();
	$('.tl_2 li').removeClass();
	$('.tl_2 li').eq(k).addClass('cc');
	$('.wood_ban1 .move li').hide();
	$('.wood_ban1 .move li').eq(k).show();})
	
//创意厨房配件banner
$('.cy_2 li:eq(0)').addClass('dd');
$('.woods_ban .move li').eq(0).show();
var time2= setInterval(showPng2,3000);
var j=0;
function showPng2(){
	if(j>=$('.woods_ban .move li').length-1){
		j=0}
		else{
			j++}
	$('.cy_2 li').removeClass();
	$('.cy_2 li').eq(j).addClass('dd');
	$('.woods_ban .move li').hide();
	$('.woods_ban .move li').eq(j).show();}
$('.woods_ban').hover(function(){
	clearInterval(time2);
       },
	function(){
		time2=setInterval(showPng2,3000);
      })
$('.cy_2 li').hover(function(){
	j=$(this).index();
	$('.cy_2 li').removeClass();
	$('.cy_2 li').eq(j).addClass('dd');
	$('.woods_ban .move li').hide();
	$('.woods_ban .move li').eq(j).show();})
	
//实木米桶系列banner
$('.mt_2 li:eq(0)').addClass('ee');
$('.mtban .move li').eq(0).show();
var time3= setInterval(showPng3,3000);
var a=0;
function showPng3(){
	if(a>=$('.mtban .move li').length-1){
		a=0}
		else{
			a++}
	$('.mt_2 li').removeClass();
	$('.mt_2 li').eq(a).addClass('ee');
	$('.mtban .move li').hide();
	$('.mtban .move li').eq(a).show();}
$('.mtban').hover(function(){
	clearInterval(time3);
       },
	function(){
		time3=setInterval(showPng3,3000);
      })
$('.mt_2 li').hover(function(){
	a=$(this).index();
	$('.mt_2 li').removeClass();
	$('.mt_2 li').eq(a).addClass('ee');
	$('.mtban .move li').hide();
	$('.mtban .move li').eq(a).show();})
	
//shadow部分

$('.cnav_li li').hover(function(){
	var a=$(this).index();
	$('.shadow').eq(a).show();
	$('.cnav_li li h1').eq(a).hide();
	},function(){
		var a=$(this).index();
		$('.shadow').eq(a).hide();
	    $('.cnav_li li h1').eq(a).show();
		})
$('.shadow').click(function(){
	window.location.href='product_details.html';
	})

//选项卡
$('#gg_tab li').click(function() {
	var index = $(this).index();
	// alert(index)
	
	$('#gg_tab li.cnav_curt').removeClass('cnav_curt');
	$(this).addClass('cnav_curt');

	$('.cnav_li.show').removeClass('show');
	$('.cnav_li').eq(index).addClass('show');
});

	