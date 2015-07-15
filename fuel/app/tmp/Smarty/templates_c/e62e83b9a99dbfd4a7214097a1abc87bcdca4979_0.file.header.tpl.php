<?php /* Smarty version 3.1.23, created on 2015-05-19 04:36:57
         compiled from "C:/xampp/htdocs/cbuybank/fuel/app/views/users/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18840555aa1c92ed341_44396553%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e62e83b9a99dbfd4a7214097a1abc87bcdca4979' => 
    array (
      0 => 'C:/xampp/htdocs/cbuybank/fuel/app/views/users/header.tpl',
      1 => 1432003014,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18840555aa1c92ed341_44396553',
  'variables' => 
  array (
    'css_asset_url' => 0,
    'js_asset_url' => 0,
    'base_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_555aa1c93fb894_39490670',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_555aa1c93fb894_39490670')) {
function content_555aa1c93fb894_39490670 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '18840555aa1c92ed341_44396553';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Cbuy bank - ngan hang dien tu</title>

    <!-- Bootstrap core CSS -->    
	<link href="<?php echo $_smarty_tpl->tpl_vars['css_asset_url']->value;?>
/bootstrap.min.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_asset_url']->value;?>
/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
   
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_asset_url']->value;?>
/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_asset_url']->value;?>
/vendor/holder.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js_asset_url']->value;?>
/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Custom styles for this template -->
    
    <link href="<?php echo $_smarty_tpl->tpl_vars['css_asset_url']->value;?>
/style.css" rel="stylesheet" />
    <style>
    	.carousel .item{
    		
    		background:#fff;
    	}
    	#myCarousel{
    		width : 70%;
    		float:right;
    		border-radius: 4px;
    	}
    	.panel-danger{
			width:29%;
			float:left;    	
			height:300px;
    	}
    	.col-lg-4 p {
    		text-align:left;
    	}
    	
    </style>
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">
      	<!-- hide nav bar menu -->
		<!--
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Trang chủ</a></li>                
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tài khoản <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Thông tin chung</a></li>
                    <li><a href="#">Nạp tiền/thẻ cào</a></li>
                    <li><a href="#">Tìm kiếm giao dịch</a></li>                    
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>-->
		<!-- nav tab menu -->
		<div id="rootwizard" class="tabbable tabs-center">
			<ul class="nav nav-tabs">
			  	<li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
">Trang chủ</a></li>
				<li class="" id="1"><a href="ca-nhan">Tài khoản</a></li>
				<li class="" id="2"><a href="thanh-toan">Thanh toán</a></li>
				<li class="" id="3"><a href="ho-tro">Hỗ trợ</a></li>
				<li class="" id="4"><a href="#tab3" data-toggle="tab" aria-expanded="true">Tin tức</a></li>
				<li class="" id="5"><a href="#tab3" data-toggle="tab" aria-expanded="true">Hướng dẫn</a></li>
			</ul>
			<!--<div class="tab-content">
			    <div class="tab-pane" id="tab1">
			      
			    </div>
			    <div class="tab-pane active" id="tab2">
			      	
			      
			    </div>
			    <div class="tab-pane" id="tab3">
					
			      	
			    </div>
				<div class="tab-pane" id="tab4">
					4
			    </div>
			    <div class="tab-pane" id="tab5">
					5
			    </div>
				
			</div>	-->
		</div>
		<!-- end nav tab menu -->
      </div>
    </div>
       <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing"><?php }
}
?>