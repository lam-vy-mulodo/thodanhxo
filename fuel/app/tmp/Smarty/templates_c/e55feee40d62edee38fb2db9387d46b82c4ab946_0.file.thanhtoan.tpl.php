<?php /* Smarty version 3.1.23, created on 2015-06-04 10:59:56
         compiled from "C:/xampp/htdocs/cbuybank/fuel/app/views/users/thanhtoan.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:94925570138cc03957_03604339%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e55feee40d62edee38fb2db9387d46b82c4ab946' => 
    array (
      0 => 'C:/xampp/htdocs/cbuybank/fuel/app/views/users/thanhtoan.tpl',
      1 => 1432002188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '94925570138cc03957_03604339',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_5570138cc1a494_81626283',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5570138cc1a494_81626283')) {
function content_5570138cc1a494_81626283 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '94925570138cc03957_03604339';
?>
<?php echo '<script'; ?>
>
$(document).ready(function(){
$("#2").addClass("active");

});
<?php echo '</script'; ?>
>
<div class="container">
	<ul class="nav navbar-nav submenu">
			  	<li><a href="cac-giao-dich-cho-xac-nhan">Các giao dịch chờ xác nhận</a></li>
			  	<li><a href="thanh-toan">Thanh toán hóa đơn</a></li>
	</ul>
</div>
<?php }
}
?>