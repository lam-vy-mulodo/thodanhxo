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
                <form id="contact-form">
                    <div class="success" style="display: none;"> Contact form submitted! <strong>We will be in touch soon.</strong> </div>
                    
                    <fieldset>
                    <div>	<h3>Thông tin đăng nhập</h3>
                            <div class="form-div-1">
                                <p>Tên đăng nhập*</p>
                                <label class="name">
                                <input type="text" value="" name="user">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid name.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-2">
                                <p>E-mail*</p>
                                <label class="email">
                                <input type="email" value="" name="email">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid email address.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-3">
                                <p>Điện thoại liên lạc</p>
                                <label class="phone notRequired">
                                <input type="tel" value="" name="phone">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid phone number.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-1">
                                <p>Mật khẩu</p>
                                <label class="phone notRequired">
                                <input type="password" value="" name="pass">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid phone number.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-1">
                                <p>Nhập lại mật khẩu</p>
                                <label class="phone notRequired">
                                <input type="password" value="" name="re_pass">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid phone number.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                       </div>
                        <div class="clearfix"></div>
                    	<hr />
                        <div> <h3>Thông tin nhà tuyển dụng</h3>
                            <div class="form-div-1">
                                <p>Tên công ty / nhà tuyển dụng*</p>
                                <label class="name">
                                <input type="text" value="" name="c_name">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid name.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-2">
                                <p>E-mail*</p>
                                <label class="email">
                                <input type="email" value="" name="c_email">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid email address.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-3">
                                <p>Điện thoại</p>
                                <label class="phone notRequired">
                                <input type="tel" value="" name="c_phone">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid phone number.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                        
                        <div>
                            <p>Địa chỉ*</p>
                            <label >
                            <input type="text" name="c_address" />
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                       <!-- upload file logo -->
                        <div class="form-div-1">
						    <p>Upload Logo</p>
						    <label>
						    <input type="file" id="exampleInputFile" name="c_logo">
						   </label>
  						</div>
  					</div>	
  						<div class="clearfix"></div><hr />
  						<div><h3>Thông tin tuyển dụng</h3>
                        <div>
                            <p>Tiêu đề tìm thợ	*</p>
                            <label >
                            <input type="text" maxlength="50" name="c_title"/>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                        <div>
                            <p>Sơ lược về công việc</p>
                            <label class="message">
                            <textarea name="c_des"></textarea>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                        <div class="form-div-1">
                            <p>Ngành nghề*</p>
                            <label >
                            <select class="form-control" name="c_career">
                            	<option value="TDX01">Lao động phổ thông</option>
                            	<option value="TDX02">Công nghệ thông tin</option>
                            </select>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                        <div class="form-div-2">
                            <p>Nơi làm việc*</p>
                            <label >
                            <select name="c_location" class="form-control">
                            	<option value="TDX01">TP Hồ Chí Minh</option>
                            	<option value="TDX02">Hà Nội</option>
                            </select>
                            <br>
                            <span class="error" style="display: none;">*The message is too short.</span> <span class="empty" style="display: none;">*This field is required.</span>
                            </label>
                        </div>
                        <div class="form-div-3">
                            <p>Kinh nghiệm*</p>
                            <label >
                            <select name="c_exp" class="form-control">
                            	<option value="TDX01">Chuyên gia</option>
                            	<option value="TDX02">Thợ đánh xô</option>
                            	<option value="TDX02">1 năm</option>
                            	<option value="TDX02">2~5năm</option>
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
                                <p>Tên người liên hệ</p>
                                <label class="name">
                                <input type="text" value="" name="c_lhname">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid name.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-2">
                                <p>E-mail*</p>
                                <label class="email">
                                <input type="email" value="" name="c_lhemail">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid email address.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                            <div class="form-div-3">
                                <p>Điện thoại</p>
                                <label class="phone notRequired">
                                <input type="tel" value="" name="c_lhphone">
                                <br>
                                <span class="error" style="display: none;">*This is not a valid phone number.</span> <span class="empty" style="display: none;">*This field is required.</span> </label>
                            </div>
                        </div>
                       
  						
  						
                        <div class="btns" style="clear:both">
                            <a href="#" data-type="submit" class="btn btn-primary">Đăng kí</a>
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