// JavaScript Document
$('.prcent ul li').hover(function(){
	$(this).find('.prhide').show();
	$(this).find('.prshow').hide();
	},function(){
		$(this).find('.prhide').hide();
	    $(this).find('.prshow').show();
		})
		
//单选

$('.price input[type=checkbox]').click(function(){
	$('.price input[type=checkbox]').prop('checked',false);		
	$(this).prop('checked',true);
})
	
	
//更多
// $('#banli').css('height','90px');
// $('#moreck').click(function(){
	// if($('#banli').css('height')=='90px'){
		// $('#banli').css('height','auto');
		// }else{
			// $('#banli').css('height','90px');
			// }	
	// })
