<?php /* Smarty version 3.1.23, created on 2015-05-14 09:14:53
         compiled from "C:/xampp/htdocs/cbuy.com/fuel/app/views/user_template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:986555544b6dc613a8_14477169%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b8f892aa3c0e6320487b6c20bb2f66aca4b36d1' => 
    array (
      0 => 'C:/xampp/htdocs/cbuy.com/fuel/app/views/user_template.tpl',
      1 => 1431587682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '986555544b6dc613a8_14477169',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_55544b6dd68970_57672697',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55544b6dd68970_57672697')) {
function content_55544b6dd68970_57672697 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '986555544b6dc613a8_14477169';
echo $_smarty_tpl->getSubTemplate ("users/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php if ($_smarty_tpl->tpl_vars['content']->value) {
echo $_smarty_tpl->tpl_vars['content']->value;
}?>
<?php echo $_smarty_tpl->getSubTemplate ("users/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
<?php }
}
?>