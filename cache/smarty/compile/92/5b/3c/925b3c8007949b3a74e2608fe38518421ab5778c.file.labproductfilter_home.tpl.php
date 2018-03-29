<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:42
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labproductfilter/views/templates/hook/labproductfilter_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1086789175a83e836383556-83118201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '925b3c8007949b3a74e2608fe38518421ab5778c' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labproductfilter/views/templates/hook/labproductfilter_home.tpl',
      1 => 1514779582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1086789175a83e836383556-83118201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'group_prod_fliter' => 0,
    'product_hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e836390b81_99414177',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e836390b81_99414177')) {function content_5a83e836390b81_99414177($_smarty_tpl) {?>
<?php  $_smarty_tpl->tpl_vars['product_hook'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product_hook']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group_prod_fliter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product_hook']->key => $_smarty_tpl->tpl_vars['product_hook']->value) {
$_smarty_tpl->tpl_vars['product_hook']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display']=='accordion') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("./labproductfilter_accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display']=='column') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("./labproductfilter_column.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['product_hook']->value['type_display']=='tab') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("./labproductfilter_tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_groups'=>$_smarty_tpl->tpl_vars['product_hook']->value['product_group']), 0);?>

	<?php }?>
<?php } ?><?php }} ?>
