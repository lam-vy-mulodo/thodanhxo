<?php include __DIR__.'/../welcome/header.php';?>
 	<link href="assets/external/google-code-prettify/prettify.css" rel="stylesheet">
    
	<script src="assets/external/jquery.hotkeys.js"></script>
   
    <script src="assets/external/google-code-prettify/prettify.js"></script>
	<script src="assets/js/bootstrap-wysiwyg.js"></script>
	<script src="assets/js/init.js"></script>
<script>
$(document).ready(function(){
	$('#editor').wysiwyg();
	//alert();	
});
</script>
<style>
#editor {
  max-height: 250px;
  height: 150px;
  background-color: white;
  border-collapse: separate;
  border: 1px solid rgb(204, 204, 204);
  padding: 4px;
  box-sizing: content-box;
  -webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
  box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px;
  border-top-left-radius: 3px;
  overflow: scroll;
  outline: none;
}
</style>
<div class="container padBot">
    <div class="row">    
    
    <section class="span8">
        <article class="contentSpan">
            <div class="holder">
                <h2>Đăng kí nhanh</h2>
                <em></em>
            </div>
            <div class="contentHolder">
                <form id="contact-form" method="post" action="dang-ki-tim-tho">
                    <?php 
                		if(isset($message))echo'
						<div class="alert alert-success">'.$message.'</div>';
						if(isset($errors))echo'
						<div class="alert alert-danger">'.$errors.'</div>';
						if(isset($upload_error)) {
							foreach($upload_error as $k => $v) {
								echo'
								<div class="alert alert-danger">'.$v.'</div>';
							}
						
						}
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
                            <div class="form-div-2">
                                <p>E-mail*</p>
                                <label class="email">
                                <input type="email"  name="email" value="<?php if (isset($email))echo $email; ?>"/>
                                <br>
                                <?php if (isset($error['email']))echo'<span class="error" style="display: block;">*'.$error['email']['message'].'.</span>';?>
                            	</label>
                            </div>
                            <div class="form-div-3">
                                <p>Điện thoại (* dùng để xác nhận )</p>
                                <label class="phone notRequired">
                                <input type="tel"  name="phone" value="<?php if (isset($phone))echo $phone; ?>" />
                                <br>
                                
                                <?php if (isset($error['phone']))echo'<span class="error" style="display: block;">*'.$error['phone']['message'].'.</span>';?>
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
                            <div class="form-div-1">
                                <p>Nhập lại mật khẩu</p>
                                <label class="phone notRequired">
                                <input type="password"  name="re_pass" value="<?php if (isset($password2))echo $password2; ?>" />
                                <br>
                                <?php if (isset($error['re_pass']))echo'<span class="error" style="display: block;">*'.$error['re_pass']['message'].'.</span>';?>
                                </label>
                                </div>
                        </div>
                        <div class="clearfix"></div>
                    	<hr />
                        <div> <h3>Thông tin nhà tuyển dụng</h3>
                            <div class="form-div-1">
                                <p>Tên công ty / nhà tuyển dụng*</p>
                                <label class="name">
                                <input type="text"  name="u_name" value="<?php if (isset($u_name))echo $u_name; ?>"/>
                                <br>
                                <?php if (isset($error['u_name']))echo'<span class="error" style="display: block;">*'.$error['u_name']['message'].'.</span>';?>
                            	</label>
                            </div>
                            <div class="form-div-2">
                                <p>E-mail*</p>
                                <label class="email">
                                <input type="email"  name="u_email" value="<?php if (isset($u_email))echo $u_email; ?>"/>
                                <br>
                                <?php if (isset($error['u_email']))echo'<span class="error" style="display: block;">*'.$error['u_email']['message'].'.</span>';?>
                            	</label>
                            </div>
                            <div class="form-div-3">
                                <p>Điện thoại liên lạc</p>
                                <label class="phone notRequired">
                                <input type="tel"  name="u_phone" value="<?php if (isset($u_phone))echo $u_phone; ?>"/>
                                <br>
                                <?php if (isset($error['u_phone']))echo'<span class="error" style="display: block;">*'.$error['u_phone']['message'].'.</span>';?>
                            	</label>
                            </div>
                        
                        <div>
                            <p>Địa chỉ*</p>
                            <label >
                            <input type="text" name="u_address"  value="<?php if (isset($u_address))echo $u_address; ?>" />
                            <br>
                            <?php if (isset($error['u_address']))echo'<span class="error" style="display: block;">*'.$error['u_address']['message'].'.</span>';?>
                            </label>
                        </div>
                       <!-- upload file logo -->
                        <div class="form-div-1">
						    <p>Upload Logo</p>
						    <label>
						    <input type="file" id="exampleInputFile" name="u_image">
						   </label>
  						</div>
  					</div>	
  						<div class="clearfix"></div><hr />
  						<div><h3>Thông tin tuyển dụng</h3>
                        <div>
                            <p>Tiêu đề tìm thợ	*</p>
                            <label >
                            <input type="text" maxlength="50" name="u_title" value="<?php if (isset($u_title))echo $u_title; ?>"/>
                            <br>
                            <?php if (isset($error['u_title']))echo'<span class="error" style="display: block;">*'.$error['u_title']['message'].'.</span></label><br />';?>
                            </label>
                        </div>
                        <div>
                            <p>Sơ lược về công việc</p>
                            <label class="message">
                            <?php include __DIR__.'/../welcome/editor_tool.php';?>
                            <div id="editor" contenteditable="true">
      						Go ahead…
   							</div>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                        <div class="form-div-1">
                            <p>Ngành nghề*</p>
                            <label >
                            <select class="form-control" name="u_career">
                            	<?php 
                            	if (is_array($job)) {
                            		foreach($job as $item) {
                            			echo '
        									<option value="'.$item['id'].'" ';
        									if (isset($u_job) && $u_job == $item['id'] )echo' selected';
        									echo'>'.$item['name'].'</option>
        								';
                            		}
                            	}
                            
                            ?>
                            </select>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                        <div class="form-div-2">
                            <p>Nơi làm việc*</p>
                            <label >
                            <select name="u_location" class="form-control">
                            	<?php 
                            	if (is_array($thanhpho)) {
                            		foreach($thanhpho as $item) {
                            			echo '
        									<option value="'.$item['id'].'" ';
        									if (isset($u_location) && $u_location == $item['id'] )echo' selected';
        									echo'>'.$item['name'].'</option>
        								';
                            		}
                            	}
                            
                            ?>
                            </select>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                        <div class="form-div-3">
                            <p>Kinh nghiệm*</p>
                            <label >
                            <select name="u_exp" class="form-control">
                            	<?php 
                            	if (is_array($exp)) {
                            		foreach($exp as $item) {
                            			echo '
        									<option value="'.$item['id'].'" ';
        									if (isset($u_exp) && $u_exp == $item['id'] )echo' selected';
        									echo'>'.$item['name'].'</option>
        								';
                            		}
                            	}
                            
                            ?>
                            </select>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                        	
						<div class="form-div-1">
                            <p>Cần tuyển</p>
                            <label >
                            <select name="type" class="form-control">
                            	<option value="0">Gấp</option>
                            	<option value="1">Không gấp</option>
                            	
                            </select>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>	  
							 	
						</div>
                         
                        <div class="clearfix"></div>
                        <hr />
                        <div>	<h3>Thông tin liên hệ</h3>
                        <div class="form-div-1">
                                <p>Tên người liên hệ *</p>
                                <label class="name">
                                <input type="text" value="" name="u_lhname" value="<?php if (isset($u_lhname))echo $u_lhname; ?>">
                                <br>
                                <?php if (isset($error['u_lhname']))echo'<span class="error" style="display: block;">*'.$error['u_lhname']['message'].'.</span>';?>
                                </label>
                            </div>
                            <div class="form-div-2">
                                <p>E-mail*</p>
                                <label class="email">
                                <input type="email" value="" name="u_lhemail" value="<?php if (isset($u_lhemail))echo $u_lhemail; ?>">
                                <br>
                                <?php if (isset($error['u_lhemail']))echo'<span class="error" style="display: block;">*'.$error['u_lhemail']['message'].'.</span>';?>
                                </label>
                            </div>
                            <div class="form-div-3">
                                <p>Điện thoại</p>
                                <label class="phone notRequired">
                                <input type="tel" value="" name="u_lhphone" value="<?php if (isset($u_lhphone))echo $u_lhphone; ?>" >
                                <br>
                                <?php if (isset($error['u_lhphone']))echo'<span class="error" style="display: block;">*'.$error['u_lhphone']['message'].'.</span>';?>
                                </label>
                            </div>
                        </div>
                       
  						
  						
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
	<div class="inner-10">
	
		<div class="bg-quocte">
    <div id="idea-seeker" class="owl-carousel">
                <div class="item">
            <div class="block-sidebar no-border">
                <div class="content-sidebar">
                    <div class="block-quocte">
                        <div class="content">
                            Tôi rất hài lòng với các gói dịch vụ tìm kiếm ứng viên cũng như đăng tuyển của Tìm Việc Nhanh. Công ty chúng tôi đã lựa chọn được đội ngũ nhân viên rất năng động và phù hợp với các yêu cầu của từng vị trí.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user small-text">
                            Giap Thi Thanh Tuyen - Operation Manager <br>Leads Training (LT) Institute of Management                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right img-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-giap-thi-thanh-tuyen-leadinstitute.png" alt="" class="avatar-quocte">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
                <div class="item">
            <div class="block-sidebar no-border">
                <div class="content-sidebar">
                    <div class="block-quocte">
                        <div class="content">
                            Tôi rất hài lòng với các gói dịch vụ tìm kiếm ứng viên cũng như đăng tuyển của Tìm Việc Nhanh. Công ty chúng tôi đã lựa chọn được đội ngũ nhân viên rất năng động và phù hợp với các yêu cầu của từng vị trí.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user small-text">
                            Giap Thi Thanh Tuyen - Operation Manager <br>Leads Training (LT) Institute of Management                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right img-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-giap-thi-thanh-tuyen-leadinstitute.png" alt="" class="avatar-quocte">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
               <div class="item">
            <div class="block-sidebar no-border">
                <div class="content-sidebar">
                    <div class="block-quocte">
                        <div class="content">
                            Tôi rất hài lòng với các gói dịch vụ tìm kiếm ứng viên cũng như đăng tuyển của Tìm Việc Nhanh. Công ty chúng tôi đã lựa chọn được đội ngũ nhân viên rất năng động và phù hợp với các yêu cầu của từng vị trí.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user small-text">
                            Giap Thi Thanh Tuyen - Operation Manager <br>Leads Training (LT) Institute of Management                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right img-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-giap-thi-thanh-tuyen-leadinstitute.png" alt="" class="avatar-quocte">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
                <div class="item">
            <div class="block-sidebar no-border">
                <div class="content-sidebar">
                    <div class="block-quocte">
                        <div class="content">
                            Tôi rất hài lòng với các gói dịch vụ tìm kiếm ứng viên cũng như đăng tuyển của Tìm Việc Nhanh. Công ty chúng tôi đã lựa chọn được đội ngũ nhân viên rất năng động và phù hợp với các yêu cầu của từng vị trí.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user small-text">
                            Giap Thi Thanh Tuyen - Operation Manager <br>Leads Training (LT) Institute of Management                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right img-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-giap-thi-thanh-tuyen-leadinstitute.png" alt="" class="avatar-quocte">
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
                <div class="item">
            <div class="block-sidebar no-border">
                <div class="content-sidebar">
                    <div class="block-quocte">
                        <div class="content">
                            Tôi rất hài lòng với các gói dịch vụ tìm kiếm ứng viên cũng như đăng tuyển của Tìm Việc Nhanh. Công ty chúng tôi đã lựa chọn được đội ngũ nhân viên rất năng động và phù hợp với các yêu cầu của từng vị trí.                        </div>
                    </div>
                    <div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user small-text">
                            Giap Thi Thanh Tuyen - Operation Manager <br>Leads Training (LT) Institute of Management                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right img-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-employer/employer-giap-thi-thanh-tuyen-leadinstitute.png" alt="" class="avatar-quocte">
                        </div>
                    </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
             
       </div>
     </div>
     </div>
        <!--  <article class="contentSpan">
            <div class="holder">
                <h2>addresses</h2>
                <em></em>
            </div>
            <div class="contentHolder">
                <div class="info">
                    <h3>Address 1:</h3>
                    <p>The Company Name Inc.<br>8901 Marmora Road, Glasgow, D04 89GR.</p>
                    <h3>telephones:</h3>
                    <p>+1 800 559 6580<br>+1 800 603 6035</p>
                    <h3>Address 2:</h3>
                    <p>The Company Name Inc.<br>9863 - 9867 Mill Road, Cambridge, MG09 99HT.</p>
                </div>
            </div>
        </article>-->
        <?php include __DIR__.'/../fb.php' ;?>
    </section>
    </div>
</div>
<?php include __DIR__.'/../welcome/footer.php';?>