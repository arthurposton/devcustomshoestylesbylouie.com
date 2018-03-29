<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 19:25:56
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/infaldbsqukv3lrw/themes/default/template/helpers/list/list_action_delete.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6524545635aa18e44dca223-39950445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f6c97e8c189025845da232a48f5b4804ce98d72' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/infaldbsqukv3lrw/themes/default/template/helpers/list/list_action_delete.tpl',
      1 => 1517271632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6524545635aa18e44dca223-39950445',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'confirm' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa18e44de5165_11857666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa18e44de5165_11857666')) {function content_5aa18e44de5165_11857666($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
"<?php if (isset($_smarty_tpl->tpl_vars['confirm']->value)) {?> onclick="if (confirm('<?php echo $_smarty_tpl->tpl_vars['confirm']->value;?>
')){return true;}else{event.stopPropagation(); event.preventDefault();};"<?php }?> title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="delete">
	<i class="icon-trash"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
