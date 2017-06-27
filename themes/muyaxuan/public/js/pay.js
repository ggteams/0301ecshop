// JavaScript Document
$(".pwd").each(function(k,v){
	$(v).keyup(function(e){
		var oEvent = e.keyCode||e.which||e.charCode;
		if (oEvent == 8) {  //判断你是否点击的是删除
			if(k > 0){
				var a = $(v).prev().val();
				$(v).prev().focus().val(a);
			}
		}else{
			if(k < 5&($(v).val()!=="")){
				$(v).next().focus();
			}
		}
	})
})
