<?php include 'header.php';?>
		<!--content-->
		<!--  slider -->
		<?php //include 'slider.php';?>
		<div class="container padBot">
			<div class="row">
				
				<section class="span4-v">
					<!-- <div class="banner">
						<p class="title1">Welcome!</p>
						<p class="title2">Lorem ipsum dolor sit amet conse ctetur
							adipisicing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Lorem ipsum dolor sit amet conse ctetur
							adipisicing.</p>
							
					</div>-->
					<article class="contentSpan">
						<div class="holder">
							<div class="col-md-6">
								<h2>Cần thợ gấp</h2>
							</div>
							<div class="col-md-6">
								<ul class="u-inline">
									<li>Sắp xếp theo : </li>
									<li class="e-sort" id="1" type="cantho"><span class="icon-ok"></span>Chuyên gia</li> 
									<li class="e-sort" id="2" type="cantho">
									<span class="icon-ok"></span>Đánh xô</li>
									<li class="e-sort" id="3" type="cantho">
									<span class="icon-ok"></span>Khu vực</li>  
								</ul>
							</div>
							<em></em>
						</div>
						<div class="contentHolder">
							<ul class="list2">
								<li>
									<div class="row">
									
										  <div class="col-md-6">
										  	<a href="">Nhân viên kinh doanh lương 7-10 triệu</a>
										  	<br />
										  	<span class="gray-bold">Công ty Cổ phần Đầu tư thương mại B.E.E</span>
										  </div>
										  <div class="col-md-3">Thợ chuyên gia</div>
										  <div class="col-md-3">TP. HCM</div>
										
									</div>
								</li>
							</ul>
							<a href="#" class="btn btn-primary">Xem thêm</a>
						</div>
					</article>
					
				
				<br />
				<!-- tho danh xo theo nganh nghe -->
				
					
					<article class="contentSpan">
						<div class="holder">
							<div class="col-md-7">
								<h2>Thợ đánh xô theo ngành nghề</h2>
							</div>
							<div class="col-md-5">
								<ul class="u-inline">
									<li>Sắp xếp theo : </li>
									<li class="job-sort" id="1" type="cantho"><span class="icon-ok"></span>ABC</li> 
									<li class="job-sort" id="2" type="cantho">
									<span class="icon-ok"></span>Ngành hot</li> 
								</ul>
							</div>
							<em></em>
						</div>
						<div class="contentHolder">
							
							<ul class="list2">
								<li>
									<div class="row" id="job-result">
										  <?php 
										  if (isset($job)) {
										  foreach ($job as $item) {
										  	echo '
												  <div class="col-md-4">
												  	<span><a href="">'.$item['name'].'</a></span><span class="gray-bold">($count)</span>
												  	
												  </div>';
										  }
										  }
										  ?>										  
										  
										
									</div>
								</li>
								
							</ul>
							<a href="#" class="btn btn-primary">Xem thêm</a>
						</div>
					</article>
					<br />
					<!-- tin tho can -->
					<article class="contentSpan">
						<div class="holder">
							<div class="col-md-6">
								<h2>Thợ cần việc mới nhất</h2>
							</div>
							<div class="col-md-6">
								<ul class="u-inline">
									<li>Sắp xếp theo : </li>
									<li class="e-sort" id="1" type="thocan"><span class="icon-ok"></span>Tất cả</li> 
									<li class="e-sort" id="2" type="thocan">
									<span class="icon-ok"></span>Chuyên gia</li>
									<li class="e-sort" id="3" type="thocan">
									<span class="icon-ok"></span>Đánh xô</li>
								</ul>
							</div>
							<em></em>
						</div>
						<div class="contentHolder">
							<ul class="list2">
								<li>
									<div class="row title-r">
									
										  <div class="col-md-4">
										  	<span>Tên ứng viên </span>
										  	
										  </div>
										  <div class="col-md-4">
										  	<span>Ngành nghề </span>
										  	
										  </div>
										  <div class="col-md-2">
										  	<span>Khu vực làm </span>
										  	
										  </div>
										  										  
										  <div class="col-md-2">
										  	<span>Gọi ngay</span>
										  	
										  </div>
										  
										
									</div>
									
									
								</li>
								<!-- goi va loop -->
								<li>
									<div class="row text-r">
									
										  <div class="col-md-4">
										  	<span><a href="">Nguyen Van A</a> </span>
										  	
										  </div>
										  <div class="col-md-4">
										  	<span>Xây dựng </span>
										  	
										  </div>
										  <div class="col-md-2">
										  	<span>HCM - HN </span>
										  	
										  </div>
										  										  
										  <div class="col-md-2">
										  	<span class="c-phone" phone="098-000-000">Click để xem</span>
										  	
										  </div>
										  
										
									</div>
									
									
								</li>
							</ul>
							<a href="#" class="btn btn-primary">Xem thêm</a>
						</div>
					</article>
					<!-- HOT LINE OR ADV -->
					<br />
					</article class="contentSpan">
						<div class="contentHolder">
							
							<div class="col-md-5">
								<figure><img src="<?php echo _SITE_DOMAIN_.'assets/adv/adv1.png'?>" width="100%"/></figure>
							</div>
							<div class="col-md-2"></div>
							<div class="col-md-5">
								<figure><img src="<?php echo _SITE_DOMAIN_.'assets/adv/adv1.png'?>" width="100%"/></figure>
							</div>
						</div>
						
						
					</article>
				</section>
				
				<?php include 'right.php';?>
				
			</div>
		</div>
				
				
			
	<?php include 'footer.php';?>