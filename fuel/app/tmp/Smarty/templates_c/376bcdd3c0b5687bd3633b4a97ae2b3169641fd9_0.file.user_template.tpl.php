<?php /* Smarty version 3.1.23, created on 2015-05-15 10:34:56
         compiled from "C:/xampp/htdocs/cbuybank/fuel/app/views/user_template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:321485555afb0e40308_66560781%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '376bcdd3c0b5687bd3633b4a97ae2b3169641fd9' => 
    array (
      0 => 'C:/xampp/htdocs/cbuybank/fuel/app/views/user_template.tpl',
      1 => 1431587682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321485555afb0e40308_66560781',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_5555afb1021064_55561914',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5555afb1021064_55561914')) {
function content_5555afb1021064_55561914 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '321485555afb0e40308_66560781';
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