/**
 * the file to set sort
 */
$(document).ready(function(){
	var SITEDOMAIN ='';
	// browser check
    var userAgent = window.navigator.userAgent.toLowerCase();
    var appVersion = window.navigator.appVersion.toLowerCase();
    var _browser = 0;
    if (userAgent.indexOf('msie') != -1) {
      if (appVersion.indexOf("msie 6.") != -1) {
        _browser = 6; // IE6
      } else if (appVersion.indexOf("msie 7.") != -1) {
        _browser = 7; // IE7
      } else if (appVersion.indexOf("msie 8.") != -1) {
        _browser = 8; // IE8
      } else if (appVersion.indexOf("msie 9.") != -1) {
        _browser = 9; // IE9
      } else if (appVersion.indexOf("msie 10.") != -1) {
        _browser = 10; // IE10
      } else {
        _browser = 11; //IE11
      }
    } else if (userAgent.indexOf('chrome') != -1) {
      _browser = 200; // CHROME
    } else if (userAgent.indexOf('firefox') != -1) {
      _browser = 300; // FIREFOX
    } else if (userAgent.indexOf('safari') != -1) {
      _browser = 400; // SAFARI
    } else {
      _browser = 900; // OTHER
    }

    if (_browser < 9) {
      // IE - PNG �΍�
      $('img').each(function() {
        if($(this).attr('src').indexOf('.png') != -1) {
          $(this).css({
            'filter': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(src="' + $(this).attr('src') + '", sizingMethod="scale");'
          });
        }
      });
    }
    //check device
    var isMobile = {
    	    Android: function() {
    	        return navigator.userAgent.match(/Android/i);
    	    },
    	    BlackBerry: function() {
    	        return navigator.userAgent.match(/BlackBerry/i);
    	    },
    	    iOS: function() {
    	        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    	    },
    	    Opera: function() {
    	        return navigator.userAgent.match(/Opera Mini/i);
    	    },
    	    Windows: function() {
    	        return navigator.userAgent.match(/IEMobile/i);
    	    },
    	    any: function() {
    	        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    	    }
    	};
    //sort
    //var tho = new Tho();
    //check hover calendar in from s
    $("#dateitem").css("color","#fff");
    $("#datetimepicker1, #datetimepicker2").datetimepicker({format: 'DD/MM/YYYY'});
    $.btn_search = $("#btn_search");
    $("#dateitem").hover(function(){
        $(this).css("text-decoration","underline").css("cursor","pointer");
    });
    $("#dateitem").mouseout(function(){
        $(this).css("text-decoration","none");
    });
    $('.job-sort').css("cursor","pointer");
    //display calendar
    $.btn_calendar = $("#dateitem");
    $.calendar = $("#areacalendar");
    //date time
    $.btn_calendar.click(function(){
    	if ($.calendar.is(':visible')) {
    		
    		$.calendar.hide();
    		$.btn_search.remove();
			$.btn_search.appendTo('#areasearch1');
    	}else {
    		$.calendar.show();
    		$.btn_search.remove();
    		$.btn_search.appendTo("#areacalendar");
    	}
    	
    });
  
    if(isMobile.any()) {
    	 $(".holder").css("height","105px");
    	 $(".title-r").hide();
    	 $("blockquote.first").css("padding-left","20px");
    	 $(".list5 li").css("text-align","justify");
    	 btn = $("<button></button>");
    	 $("#dechec").append(btn);
    	 $.btn_quicksearch = btn;
    	 $("#formsearch").hide();
    	 $.btn_quicksearch.text("Tìm kiếm nhanh").addClass("btn").addClass("btn-default").attr("id","btn_quicksearch");
    	 $(".adv").parent().hide();
    	 $("blockquote").css("padding-right","30px");
    	 $(".inner-10").remove();
    }else{
    	if (document.location.pathname.match(/[^\/]+$/) != null) {
    		var page = document.location.pathname.match(/[^\/]+$/)[0];
        	if (page == 'dang-ki-tim-viec' || page == 'dang-ki-tim-tho') {
        	$("head").append("<link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/dangki.css\">");
        	$("head").append("<link type=\"text/css\" rel=\"stylesheet\" href=\"assets/css/owl.carousel.css\">");
        	$("head").append("<script type=\"text/javascript\" src=\"assets/js/owl.carousel.min.js\"></script>");
        	}
    	} 
    	
    }
    $("#btn_quicksearch").click(function(){	
    	if($("#formsearch").is(':visible')) $("#formsearch").hide();
    	else{
    		$("#formsearch").show();
    		$(this).text("Ẩn tìm kiếm");
    	}
    });
    //sort
    var loading = '<img src = "assets/img/load.gif" alt="Loading ..." class="load1" width="50px" height="50px" />';
    $('.job-sort').click(function(){
    	//loading
    	//$('#job-result').parent().parent().html('');
    	$('#job-result').parent().prepend(loading);
    	content = '';
    	$type = $(this).attr('id');
    	$.ajax({
    		url: SITEDOMAIN+'get-nganh-nghe/'+$type,
    		type: 'POST',
    		data: '',
    		success: function(data){
    			if (data != null) {
    				var getData = $.parseJSON(data);
        			for (i = 0; i < getData.length; i++) {
        				content += '<div class="col-md-4">'
    					  		+ '<span><a href="">'+getData[i].name+'</a></span><span class="gray-bold"></span>'
    					  		+ '</div>';
    						 
        			}
        			$("#job-result").html(content);
        			$('#job-result').parent().find(".load1").remove();
    			}
    			
    		}
    	});
    });
    $('.dropdown-toggle').dropdown();
});
