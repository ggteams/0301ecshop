// JavaScript Document
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


$(".jia").click(function(){
	var num = parseInt($(this).prev().val());
	var price = $(this).parent().prev().text();
	$(this).prev().val(num+1);
	var total = (num+1)*price;
	$(this).parent().next().text(total);
	get_total();
})
$(".jian").click(function(){
	var num = parseInt($(this).next().val());
	if(num > 1){
		$(this).next().val(num-1);
		var price = $(this).parent().prev().text();
		var total = (num-1)*price;
		$(this).parent().next().text(total);
		get_total();
	}
	
})



$(".input").blur(function(){
	var price = $(this).parent().prev().text();
	var num = parseInt($(this).val());
	if($(this).val() !=''){
	  if(num < 1){
		$(this).val(1);
		
	}
	var total = num*price;
	$(this).parent().next().text(total);
	get_total();
	}else{
    $(this).val(1);
		}

})

function toDecimal2(x) {    
	var f = parseFloat(x);    
	if (isNaN(f)) {    
		return false;    
	}    
	var f = Math.round(x*100)/100;    
	var s = f.toString();    
	var rs = s.indexOf('.');    
	if (rs < 0) {    
		rs = s.length;
		s += '.';    
	}    
	while (s.length <= rs + 2) {    
		s += '0';    
	}    
	return s;
}
get_total();

function get_total(){
	var total_num = 0;
	var total_price = 0;
	$(".checkbox.aa").each(function(k,v){
		total_num += 1;
		var this_total = $(v).next().next().find("li").eq(2).text();
		this_total = parseFloat(this_total.replace("￥",""));
		total_price += this_total;
	})
	total_price = toDecimal2(total_price);
	$(".content h3 span").text("￥"+total_price);
}

