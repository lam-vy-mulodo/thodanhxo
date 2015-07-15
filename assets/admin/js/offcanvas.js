$(document).ready(function () {
  $('[data-toggle="offcanvas"]').click(function () {
    $('.row-offcanvas').toggleClass('active')
  });
 
  $('.no-follow').click(function(){
  	if($(this).parents().nextAll('.toggle-container').is(':hidden')) {
  		t = $(this).parents().nextAll('.toggle-container');
  		
  		t.show();
  		
  		
  	} else {
  		t = $(this).parents().nextAll('.toggle-container');
  		t.hide();
  	}
  });
  $(".display-none").hide();
  $(".display-none[id=hd1]").show();
  
  $(".tabs-left li a").click(function(){
  	hd = $(this).attr("hd");
  	$(".display-none").hide();
  	$(".display-none[id="+hd+"]").show();
  })
});