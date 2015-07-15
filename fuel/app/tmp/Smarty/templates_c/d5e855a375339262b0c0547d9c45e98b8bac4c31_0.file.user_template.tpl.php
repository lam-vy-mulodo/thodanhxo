<?php /* Smarty version 3.1.23, created on 2015-06-04 10:59:50
         compiled from "C:/xampp/htdocs/cbuybank/fuel/app/views/user_template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1996557013862a5df4_15659096%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5e855a375339262b0c0547d9c45e98b8bac4c31' => 
    array (
      0 => 'C:/xampp/htdocs/cbuybank/fuel/app/views/user_template.tpl',
      1 => 1431587682,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1996557013862a5df4_15659096',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_557013864fda68_30449969',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_557013864fda68_30449969')) {
function content_557013864fda68_30449969 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1996557013862a5df4_15659096';
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