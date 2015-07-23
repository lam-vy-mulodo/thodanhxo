<?php include __DIR__.'/../welcome/header.php';?>

<div class="container padBot">
			<div class="row">
				
				<section class="span4-v">
				
	
					<div class="navbar navbar_ clearfix">
						<div class="navbar-inner">
							<div class="clearfix">
								<div class="nav-collapse">
									<ul class="user-menu-top">
										  <li><a href="<?php echo _SITE_DOMAIN_;?>tho-can">Trang cần thợ</a></li>
								          <li><a href="<?php echo _SITE_DOMAIN_;?>users/index">Tài khoản</a></li>
								          <li><a href="<?php echo _SITE_DOMAIN_;?>users/list-ho-so">Tủ hồ sơ</a></li>
								          
								          <li><a href="<?php echo _SITE_DOMAIN_;?>users/logout"><i class="icon-signout"></i>Thoát!</a></li>	
									</ul>
									
								</div>
								
							</div>
						</div>
					
					</div>
	
			<article class="contentSpan">
            <div class="holder">
                <h2>Hồ sơ của bạn</h2>
                <em></em>
            </div>
            <div class="contentHolder">
                <form id="contact-form" action="<?php echo _SITE_DOMAIN_;?>dang-ki-tim-viec" method="post" enctype="multipart/form-data">
                	                    
                    	<fieldset>
                    
                        </fieldset>
                </form>
            </div>
            </article>
            <br />
            <article class="contentSpan">
            <div class="holder">
                <h2>Việc làm phù hợp với bạn</h2>
                <em></em>
            </div>
            <div class="contentHolder">
                
            </div>
            </article>            
				</section>
				
				<!-- right menu for user -->
				<?php include 'right.php'?>
			</div>
</div>
<?php include __DIR__.'/../welcome/footer.php';?>