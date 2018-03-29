<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:42
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/modules/labcompare/views/templates/hook/labcompare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13814471365a83e8365be604-67726877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e290ce5653df7e60d50d3b9e2d85f83a20dddd2' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/modules/labcompare/views/templates/hook/labcompare.tpl',
      1 => 1514779895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13814471365a83e8365be604-67726877',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'compare_nbr' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e8365cc198_54931252',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e8365cc198_54931252')) {function content_5a83e8365cc198_54931252($_smarty_tpl) {?>
<!-- MODULE st compare -->
<div id="rightbar_compare" class="rightbar_wrap">
    <a id="rightbar-product_compare" class="rightbar_tri icon_wrap" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>"Compare Products",'mod'=>'labcompare'),$_smarty_tpl);?>
">
        <i class="icon-ajust icon-0x"></i>
        <span class="icon_text"><?php echo smartyTranslate(array('s'=>'Compare','mod'=>'labcompare'),$_smarty_tpl);?>
</span>
        <span class="compare_quantity amount_circle <?php if (!isset($_smarty_tpl->tpl_vars['compare_nbr']->value)||!$_smarty_tpl->tpl_vars['compare_nbr']->value) {?> hidden <?php }?><?php if ((isset($_smarty_tpl->tpl_vars['compare_nbr']->value)&&$_smarty_tpl->tpl_vars['compare_nbr']->value>9)) {?> dozens <?php }?>"><?php if (isset($_smarty_tpl->tpl_vars['compare_nbr']->value)&&$_smarty_tpl->tpl_vars['compare_nbr']->value) {?><?php echo $_smarty_tpl->tpl_vars['compare_nbr']->value;?>
<?php }?></span>
    </a>
</div>
<!-- /MODULE st compare --><?php }} ?>
