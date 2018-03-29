<?php /* Smarty version Smarty-3.1.19, created on 2018-03-08 19:17:08
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/infaldbsqukv3lrw/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103564865aa18c34966f33-21518684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '473a737402e080da0d3c8f3413aa052ec65ba377' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/infaldbsqukv3lrw/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1517271632,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103564865aa18c34966f33-21518684',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa18c3498cd09_83872855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa18c3498cd09_83872855')) {function content_5aa18c3498cd09_83872855($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
