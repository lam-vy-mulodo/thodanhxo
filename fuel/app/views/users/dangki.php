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
<<style>
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
                <form id="contact-form" action="dang-ki-tim-viec" method="post">
                	<?php 
                		if(isset($message))echo'
						<div class="alert alert-success">'.$message.'</div>';
						if(isset($errors))echo'
						<div class="alert alert-danger">'.$errors.'</div>';
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
                        <div><h3>Thông tin ứng viên</h3>
                            <div class="form-div-1">
                                <p>Họ tên*</p>
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
                            <input type="text" name="u_address" maxlength="120" value="<?php if (isset($u_address))echo $u_address; ?>" />
                            <br>
                            <?php if (isset($error['u_address']))echo'<span class="error" style="display: block;">*'.$error['u_address']['message'].'.</span>';?>
                            </label>
                        </div>
                        </div>
                        <div>
                            <p>Tiêu đề tìm việc	*</p>
                            <label >
                            <input type="text" maxlength="50" name="u_title" value="<?php if (isset($u_title))echo $u_title; ?>"/>
                            <br>
                            <?php if (isset($error['u_title']))echo'<span class="error" style="display: block;">*'.$error['u_title']['message'].'.</span></label><br />';?>
                            </label>
                        </div>
                        <div>
                            <p>Mục tiêu nghề nghiệp</p>
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
                            <select name="u_career" class="form-control">
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
                        <!-- upload file CV -->
                        <div class="form-div-2">
						    <p>Upload Hình ảnh bản thân</p>
						    <label>
						    <input type="file" id="exampleInputFile" name="u_avt">
						   </label>
  						</div>
  						<div class="form-div-3">
						    <p>Upload CV</p>
						    <label>
						    <input type="file" id="exampleInputFile" name= "u_cv">
						    </label>
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
						<p class="title1">HOT LINE hỗ trợ - tư vấn miễn phí người tìm việc</p>
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
                            Các tính năng của Tìm Việc Nhanh đơn giản, dễ sử dụng, đội ngũ tư vấn viên rất nhiệt tình.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Hoàng Thị Ánh Hằng                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-hang.png" alt="" class="avatar-quocte">
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
                            Trên timviecnhanh.com, thông tin nhà tuyển dụng và công việc được hiển thị rõ ràng, cập nhật thường xuyên. Hồ sơ của tôi được nhiều nhà tuyển dụng tìm kiếm và liên lạc.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Nguyễn Thị Sương                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-suong.png" alt="" class="avatar-quocte">
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
                            Với phong cách làm việc chuyên nghiệp, Tìm Việc Nhanh là cầu nối tin cậy giữa nhà tuyển dụng và người tìm việc.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Lò Văn Thánh                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-thanh.png" alt="" class="avatar-quocte">
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
                            Tìm Việc Nhanh đã hỗ trợ rất nhiều cho người tìm việc, đặc biệt là với những người mới tốt nghiệp. Chỉ cần một bộ hồ sơ trên Tìm Việc Nhanh là tôi có thể nộp cho bất cứ công ty nào có nhu cầu tuyển dụng.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Trần Cẩm Tú                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-minh-luan.png" alt="" class="avatar-quocte">
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
                            Bộ phận tư vấn cho người tìm việc của Tìm Việc Nhanh rất nhiệt tình. Các anh chị đã hỗ trợ tôi rất nhiều để hoàn thiện hồ sơ                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Lê Minh Luân                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-cam-tu.png" alt="" class="avatar-quocte">
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
                            Trên Tìm Việc Nhanh có rất nhiều doanh nghiệp uy tín đăng tin tuyển dụng. Thông tin việc làm từ website mang đến cho tôi thêm hy vọng trong việc tìm thấy công việc phù hợp.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Lê Thị Thủy                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-le-thuy.png" alt="" class="avatar-quocte">
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
                            Tìm Việc Nhanh không chỉ không chỉ cung cấp các thông tin việc làm mà còn tư vấn cho tôi nhiều điều bổ ích để đáp ứng tốt hơn các yêu cầu từ nhà tuyển dụng.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Phạm Thanh Long                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-thanh-long.png" alt="" class="avatar-quocte">
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
                            Việc đăng ký hồ sơ và cập nhật tài khoản trên Tìm Việc Nhanh rất đơn giản và không tốn nhiều thời gian.                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Lê Hồng Ngọc                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-hong-ngoc.png" alt="" class="avatar-quocte">
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
                            Tôi rất tin tưởng Tìm Việc Nhanh vì thông tin nhà tuyển dụng trên website rất rõ ràng, bộ phận hỗ trợ người tìm việc rất nhiệt tình                        </div>
                    </div>
                    <div class="col-xs-2 offset20 block-name">
                        <div class="info-user">
                            Nguyễn Xuân Vinh                        </div>
                    </div>
                    <div class="col-xs-2 offset10 text-right">
                        <div class="radius50">
                            <img src="http://cdn.timviecnhanh.com/asset/home/img/idea-seeker/seeker-vinh.png" alt="" class="avatar-quocte">
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