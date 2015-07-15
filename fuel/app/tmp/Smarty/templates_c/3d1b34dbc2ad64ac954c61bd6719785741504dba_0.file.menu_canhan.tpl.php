<?php /* Smarty version 3.1.23, created on 2015-06-04 10:59:58
         compiled from "C:/xampp/htdocs/cbuybank/fuel/app/views/users/menu_canhan.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:214265570138e300c73_86145980%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1b34dbc2ad64ac954c61bd6719785741504dba' => 
    array (
      0 => 'C:/xampp/htdocs/cbuybank/fuel/app/views/users/menu_canhan.tpl',
      1 => 1432002907,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214265570138e300c73_86145980',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_5570138e318848_72328939',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5570138e318848_72328939')) {
function content_5570138e318848_72328939 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '214265570138e300c73_86145980';
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