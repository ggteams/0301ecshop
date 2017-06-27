// JavaScript Document
//全选框
var check_num = $(".checkbox").length;
$(".checkbox1").click(function(){
	if($(this).hasClass("aa")){
		$(this).removeClass("aa");
		$(".checkbox").removeClass("aa");
	}else{
		$(this).addClass("aa");
		$(".checkbox").addClass("aa");
	}
	get_total();
})

$(".checkbox").click(function(){
	if($(this).hasClass("aa")){
		$(this).removeClass("aa");
	}else{
		$(this).addClass("aa");
	}
	var now_check_num = $(".checkbox.aa").length;
	if(check_num == now_check_num){
		$(".checkbox1").addClass("aa");
	}else{
		$(".checkbox1").removeClass("aa");
	}
	get_total();
})