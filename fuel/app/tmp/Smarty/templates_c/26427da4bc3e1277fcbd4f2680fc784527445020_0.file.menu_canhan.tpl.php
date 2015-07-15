<?php /* Smarty version 3.1.23, created on 2015-05-19 04:36:58
         compiled from "C:/xampp/htdocs/cbuybank/fuel/app/views/users/menu_canhan.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13782555aa1caa7cce3_55061687%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26427da4bc3e1277fcbd4f2680fc784527445020' => 
    array (
      0 => 'C:/xampp/htdocs/cbuybank/fuel/app/views/users/menu_canhan.tpl',
      1 => 1432002907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13782555aa1caa7cce3_55061687',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_555aa1caa8f338_57835176',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_555aa1caa8f338_57835176')) {
function content_555aa1caa8f338_57835176 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '13782555aa1caa7cce3_55061687';
?>
<?php echo '<script'; ?>
>
$(document).ready(function(){
$("#3").addClass("active");

});
<?php echo '</script'; ?>
>
<div class="container">
	<ul class="nav navbar-nav submenu">
			  	<li><a href="ho-tro">Nhật ký truy cập</a></li>
			  	<li><a href="thong-tin-ca-nhan">Thông tin cá nhân</a></li>
			  	<li><a href="thay-doi-mat-khau">Thay đổi mật khẩu</a></li>
	</ul>
</div>
<?php }
}
?>