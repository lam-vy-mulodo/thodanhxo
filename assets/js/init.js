/**
 * 
 */
$(document).ready(function(){
	$("#btn_submit").click(function(){
		
		var input = $("<input>").attr("type", "hidden").attr('name','u_des').val($('#editor').html());
		$('#contact-form').append($(input));
		$('#contact-form').submit();
		//return false;
	});
})