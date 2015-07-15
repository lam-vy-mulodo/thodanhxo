<?php /* Smarty version 3.1.23, created on 2015-05-19 04:27:17
         compiled from "C:/xampp/htdocs/cbuybank/fuel/app/views/users/thanhtoan.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29813555a9f85741505_17038866%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '442a75a2e47884c03adc3cd18ebec4e15fd8446e' => 
    array (
      0 => 'C:/xampp/htdocs/cbuybank/fuel/app/views/users/thanhtoan.tpl',
      1 => 1432002188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29813555a9f85741505_17038866',
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_555a9f85758009_41404775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_555a9f85758009_41404775')) {
function content_555a9f85758009_41404775 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '29813555a9f85741505_17038866';
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