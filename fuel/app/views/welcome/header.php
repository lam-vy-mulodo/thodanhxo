<html lang="en">
<head>
<?php echo Asset::css('docs.css');?>
<title>Home</title>
<meta charset="utf-8">
<link rel="icon" href="<?php echo _ROOT_IMG_;?>favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="" type="image/x-icon">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">
<meta name="format-detection" content="telephone=no">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<!--CSS-->
<?php echo Asset::css('bootstrap.css');?>
<?php echo Asset::css('responsive.css');?>
<?php echo Asset::css('style.css');?>
<?php echo Asset::css('flexslider.css');?>
<?php echo Asset::css('bootstrap-datetimepicker.css');?>
<link rel="stylesheet" href="assets/fonts/font-awesome.css">

<!--JS-->
 
<script type="text/javascript" async=""	src="http://www.google-analytics.com/ga.js"></script>
<?php echo Asset::js('jquery.js');?>
<?php echo Asset::js('jquery-migrate-1.1.1.js');?>
<?php echo Asset::js('superfish.js');?>
<?php echo Asset::js('jquery.mobilemenu.js');?>
<?php echo Asset::js('jquery.cookie.js');?>
<?php echo Asset::js('jquery.easing.1.3.js');?>
<?php echo Asset::js('jquery.ui.totop.js');?>
<?php echo Asset::js('jquery.flexslider.js');?>
<?php echo Asset::js('moment-with-locales.js');?>
<?php echo Asset::js('bootstrap-datetimepicker.js');?>

<?php echo Asset::js('sort.js');?>
<script>
$(window).load(function() {
    $('#slides-pagination').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
	    prevText: "",
	    nextText: "",
        itemWidth: 253,
        itemMargin: 1,
        asNavFor: '#flexslider'
      });										
	$('#flexslider').flexslider({
    	animation: "slide",			
    	slideshow: true,			
    	slideshowSpeed: 7000,
    	animationDuration: 600,				
    	prevText: "",
    	nextText: "",
    	controlNav: false,
        sync: "#slides-pagination"					
	})	 				
})
</script>
<!--[if lt IE 8]>
		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/<?php echo _ROOT_IMG_;?>upgrade.jpg"border="0"alt=""/></a></div>  
<![endif]-->
<!--[if lt IE 9]>
  <?php echo Asset::css('ie.css');?>
  <?php echo Asset::css('docs.css');?>
  <?php echo Asset::js('html5shiv.js');?>
    <![endif]-->
   
</head>
<body>
	
	<div class="global">
		<section class="margBot1">
			<!--header-->
			<header>
				<div class="container">
					<div class="row">
						
						<article class="span12 linkBox">
							<div>
								<ul>
									<li><a href="dang-ki-tim-viec">Đăng kí tìm việc</a></li>
									<li><a href="dang-ki-tim-tho">Đăng kí tìm thợ</a></li>
									<li><a href="#">Hướng dẫn sử dụng</a></li>
									<li><a href="#">Liên kết datmang.net</a></li>
									<li><a href="#">Tài trợ</a></li>
								</ul>
							</div>
						</article>
						<article class="span12 logoBox">						
							<div>
								<div>
									<h1 class="brand">
										<a href="index.html"><img src="<?php echo _ROOT_IMG_;?>logo.png" alt=""></a>
									</h1>
								</div>
								<article class="telBox">
									<p class="title1">
										<span class="glyphicon glyphicon-earphone"></span>(800) 234-5678
									</p>
									<p class="title2">GỌI NGAY ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ</p>
								</article>
							</div>
						</article>
						<article class="span12">
							<div class="navbar navbar_ clearfix">
								<div class="navbar-inner">
									<div class="clearfix">
										<div class="nav-collapse nav-collapse_">
											<ul class="nav sf-menu clearfix sf-js-enabled">
												<li class="active"><a href="index">TRANG CHỦ</a></li>
												<li class="sub-menu"><a href="can-tho"
													class="sf-with-ul">CẦN THỢ<span></span><b
														class="sf-sub-indicator"></b></a>
													<ul class="submenu sub-menu" style="display: none;">
														<li><a href="#">THỢ CHUYÊN GIA</a></li>
														<li><a href="#" class="sf-with-ul">PHỤ ĐÁNH XÔ<span></span><b
																class="sf-sub-indicator"></b></a>
															<!--<ul class="submenu-1 sub-menu" style="">
																<li><a href="#">Conse ctetur</a></li>
																<li><a href="#">Dipisicing</a></li>
																<li><a href="#">Eeliteiusmod</a></li>
															</ul>-->
														</li>
														<!-- <li><a href="#">Conse ctetur</a></li>
														<li><a href="#">Dipisicing</a></li>
														<li><a href="#">Eeliteiusmod</a></li>-->
													</ul></li>
												<li><a href="tho-can">THỢ CẦN</a></li>
												<li><a href="can-viec-gap">CẦN VIỆC GẤP</a></li>
												<li><a href="can-tho-gap">CẦN THỢ GẤP</a></li>
											</ul>
											<!-- <select class="select-menu" style="display: inline-block;"><option
													value="#">Navigate to...</option></select>-->
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
			</header>
			<header>
				<div class="container">
					<div class="row" id="dechec">
						<form class="form-inline" name="formsearch" id="formsearch">
						<article class="span12 areasearch" id="areasearch1" >
							
								  <div class="form-group" >
								    <label for="exampleInputName2">Theo mục</label>
								    <select class="form-control" name="type">
							          <option value="">Cần thợ</option>
							          <option value="">Thợ cần</option>
							        </select>
								  </div>
								  <div class="form-group" >
								    <label for="exampleInputName2">Theo loại</label>
								    <select class="form-control" name="type">
							          <option value="">Chuyên gia</option>
							          <option value="">Đánh xô</option>
							        </select>
								  </div>
								  <div class="form-group" >
								    <label for="exampleInputName2">Nghề</label>
								    <select class="form-control" name="type">
							          <option value="">Xây dựng</option>
							          <option value="">Thiết kế quảng cáo</option>
							        </select>
								  </div>
								  <div class="form-group" >
								    <label for="exampleInputName2">Khu vực</label>
								    <select class="form-control" name="type">
							          <option value="">HCM</option>
							          <option value="">Hà Nội</option>
							        </select>
								  </div>
								  <div class="form-group" >
								    <label for="exampleInputName2">Quận</label>
								    <select class="form-control" name="type">
							          <option value="">1</option>
							          <option value="">2</option>
							        </select>
								  </div>
								  <div class="form-group" >
								    <a id="dateitem">Chọn ngày </a><i class="icon-calendar"></i>
								    
								  </div>			  
								  	
								  
								  <button class="btn btn-default" id="btn_search" type="submit">Tìm ngay</button>
							
						</article>
						<article class="span12 areasearch " id="areacalendar">
									<label for="exampleInputName2">Từ</label>
									<div class='input-group date' id='datetimepicker1'>
											
						                    <input type='text' class="form-control" />
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>
                					</div>
								  	<label for="exampleInputName2">Đến</label>
									<div class='input-group date' id='datetimepicker2'>
											
						                    <input type='text' class="form-control" />
						                    <span class="input-group-addon">
						                        <span class="glyphicon glyphicon-calendar"></span>
						                    </span>
                					</div>
								  	
						</article>
						</form>
					</div>
				</div>
						
			
		
		</header>
		</section>
		