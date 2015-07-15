<?php include 'header.php';?>

<link rel="stylesheet" href="assets/js/jqwidgets/styles/jqx.base.css" type="text/css"/>
<?php echo Asset::js('calendar.js');?>
<?php echo Asset::js('jqwidgets/jqxcore.js');?>
<?php echo Asset::js('jqwidgets/jqxdatetimeinput.js');?>
<?php echo Asset::js('jqwidgets/jqxcalendar.js');?>
<?php echo Asset::js('jqwidgets/globalization/globalize.js');?>
<div class="container padBot">
        <div class="row">
            <section class="span8">
                <article class="contentSpan">
                    <div class="holder">
                        <h2>Cần việc gấp trong ngày <?php echo date('d/m/Y');?></h2>
                        <em></em>
                    </div>
                    <div class="contentHolder">
                        <div class="tableBox">
                        
                        <?php
							//loop for echo
							for($i = 0; $i < 12; $i++) {
								$content = '
		        					<table><tbody><tr>
		                            <td><a href="#">Cần thợ gấp trong ngày 29/07/2015</a></td>
		                            <td class="dots"></td><td class="pr">29/07/2015</td>
		                            </tr></tbody></table>
		                            <p>Cần tuyển 30 ứng viên làm việc bán thời gian tại khu vực Tân Bình TP.HCM</p>
		                            <table><tbody><tr>
		                            <td><a href="#">Ngành nghề: Quản trị kinh doanh</a></td>
		                            <td class="dots"></td><td class="pr"><a href="#">Thợ chuyên gia</a></td>
		                            </tr></tbody></table>
		                            <hr />';
								echo $content;
							}
                        ?>
                            
                            
                        </div>
                    </div>
                </article>
            </section>
            <section class="span4">
            	<article class="contentSpan">
                    <div class="holder">
                        <h2>Lọc theo ngày</h2>
                        <em></em>
                    </div>
                    <div class="contentHolder">
                        <div id='jqxcalendar'></div>
  						<div id='log'></div>
                    </div>
                </article>
                <article class="contentSpan">
                    <div class="holder">
                        <h2>Các ngành nghề khác</h2>
                        <em></em>
                    </div>
                    <div class="contentHolder">
                        <ul class="list2 borderNone">
                        	<?php 
                        	for($i = 0; $i < 25; $i++){
                        		echo '<li><span class="icon-angle-right"></span><div><a href="#">Quản trị kinh doanh (386 việc làm)</a></div></li>';
                        	}
                        	?>
                        </ul>
                    </div>
                </article>
            </section>
        </div>
    </div>
	<?php include 'footer.php';?>