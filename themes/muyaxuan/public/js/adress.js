// JavaScript Document
 /* $('.cydz li').click(function(){
		 $('.kka').hide();
		 $(".kka:eq("+$(this).index()+")").show();
		 });
		  $('.lsdz li').click(function(){
		 $('.ssa').hide();
		 $(".ssa:eq("+$(this).index()+")").show();
		 });*/

$('.add li:eq(0)').addClass('add_b');
$('.add li').click(function(){
	if($(this).hasClass('add_b')){
	$(this).removeClass('add_b');
	}else{
		$('.add li').removeClass('add_b');
		$(this).addClass('add_b');
		}
	})
$('.history li:eq(0)').addClass('add_b');
$('.history li').click(function(){
	if($(this).hasClass('add_b')){
	$(this).removeClass('add_b');
	}else{
		$('.history li').removeClass('add_b');
		$(this).addClass('add_b');
		}
	})