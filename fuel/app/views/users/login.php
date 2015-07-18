<?php include __DIR__.'/../welcome/header.php';?>
<div class="container padBot">
    <div class="row">    
    
    <section class="span8">
        <article class="contentSpan">
            <div class="holder">
                <h2>Đăng kí nhanh</h2>
                <em></em>
            </div>
            <div class="contentHolder">
                <form id="contact-form" method="post" action="<?php echo _SITE_DOMAIN_;?>users/login">
                    <?php 
                		if(isset($message))echo'
						<div class="alert alert-success">'.$message.'</div>';
						if(isset($error))echo'
						<div class="alert alert-danger">'.$error.'</div>';
					?>
                    <fieldset>
                    <div>	<h3>Thông tin đăng nhập</h3>
                            <div class="form-div-1">
                                <p>Tên đăng nhập*</p>
                                <label class="name">
                                <input type="text"  name="user" value="<?php if (isset($username))echo $username; ?>" />
                                <br>
                                <?php 
                                if (isset($error['username']))echo'<span class="error" style="display: block;">*'.$error['username']['message'].'.</span>';
                                ?>
                                </label>
                            </div>
                            
                            <div class="form-div-1">
                                <p>Mật khẩu</p>
                                <label class="phone notRequired">
                                <input type="password"  name="pass" value="<?php if (isset($password))echo $password; ?>" />
                                <br>
                                <?php if (isset($error['pass']))echo'<span class="error" style="display: block;">*'.$error['pass']['message'].'.</span>';?>
                            	</label>
                            </div>
                            
                        </div>
                        <div class="clearfix"></div>                                   
  						
  						
                        <div class="btns" style="clear:both">
                            <button data-type="submit" class="btn btn-primary" name="submit" type="submit" id="btn_submit">Đăng kí</button>
                            <p>* Bắt buộc nhập</p>
                        </div>
                    </fieldset>
                </form>
            </div>
        </article>
    </section>

<script>
    $(document).ready(function() {
        function random(owlSelector){
            owlSelector.children().sort(function() {
                return Math.round(Math.random()) - 0.5;
            }).each(function(){
              $(this).appendTo(owlSelector);
            });
        }
        $("#idea-seeker").owlCarousel({
            navigation : true,
            autoPlay: true,
            singleItem : true,
            navigationText: [
                "<i class='glyphicon glyphicon-triangle-left'></i>",
                "<i class='fa fa-chevron-circle-right'></i>"
            ],
            beforeInit : function(elem){
              random(elem);
            }
        });
    });
</script>  
    <section class="span4">
    	<div class="banner2">
						<p class="title1">HOT LINE hỗ trợ - tư vấn miễn phí nhà tuyển dụng</p>
						<p class="title1">
							<span class="glyphicon glyphicon-earphone"></span>    (800) 234-5678
						</p>
						
		</div>
	
      
        <?php include __DIR__.'/../fb.php' ;?>
    </section>
    </div>
</div>
<?php include __DIR__.'/../welcome/footer.php';?>