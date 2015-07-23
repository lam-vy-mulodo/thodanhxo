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
                <h2>Thông tin tài khoản</h2>
                <em></em>
            </div>
            <div class="contentHolder">
                <form id="contact-form" action="<?php echo _SITE_DOMAIN_;?>dang-ki-tim-viec" method="post" enctype="multipart/form-data">
                	                    
                    <fieldset>
                    <div>	<h3>Thông tin đăng nhập</h3>
                            <div class="form-div-1">
                                <p>Tên đăng nhập*</p>
                                <label class="name">
                                <input type="text" name="user" value="">
                                <br>
                                                                </label>
                            </div>
                            <div class="form-div-2">
                                <p>E-mail*</p>
                                <label class="email">
                                <input type="email" name="email" value="">
                                <br>
                                                            	</label>
                            </div>
                            <div class="form-div-3">
                                <p>Điện thoại (* dùng để xác nhận )</p>
                                <label class="phone notRequired">
                                <input type="tel" name="phone" value="">
                                <br>
                                
                                                            	</label>
                            </div>
                            <div class="form-div-1">
                                <p>Mật khẩu</p>
                                <label class="phone notRequired">
                                <input type="password" name="pass" value="">
                                <br>
                                                            	</label>
                            </div>
                            <div class="form-div-1">
                                <p>Nhập lại mật khẩu</p>
                                <label class="phone notRequired">
                                <input type="password" name="re_pass" value="">
                                <br>
                                                                </label>
                                </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        <div><h3>Thông tin ứng viên</h3>
                            <div class="form-div-1">
                                <p>Họ tên*</p>
                                <label class="name">
                                <input type="text" name="u_name" value="">
                                <br>
                                                            	</label>
                            </div>
                            <div class="form-div-2">
                                <p>E-mail*</p>
                                <label class="email">
                                <input type="email" name="u_email" value="">
                                <br>
                                                            	</label>
                            </div>
                            <div class="form-div-3">
                                <p>Điện thoại liên lạc</p>
                                <label class="phone notRequired">
                                <input type="tel" name="u_phone" value="">
                                <br>
                                                            	</label>
                            </div>
                            <div>
                            <p>Địa chỉ*</p>
                            <label>
                            <input type="text" name="u_address" maxlength="120" value="">
                            <br>
                                                        </label>
                        </div>
                        </div>
                        <div class="group-field">
                                    <label class="label-form"></label>
                                    <div class="group-right">
                                        <button type="submit" class="btn btn-big btn-primary">Cập nhật</button>
                                    </div>
                                </div>
                        </fieldset>
                        </form>
                        </div>
                        </article>
                        
				</section>
				
				<!-- right menu for user -->
				<?php include 'right.php'?>
			</div>
</div>
<?php include __DIR__.'/../welcome/footer.php';?>