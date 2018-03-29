<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:41
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/blockuserinfo/blockuserinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14503722515a83e835ecdb14-63277461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cddb333f34b9c0faf99a42e925c738e7b66ab248' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/blockuserinfo/blockuserinfo.tpl',
      1 => 1514779582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14503722515a83e835ecdb14-63277461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'context' => 0,
    'PS_CATALOG_MODE' => 0,
    'is_logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e835f074a0_83305029',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e835f074a0_83305029')) {function content_5a83e835f074a0_83305029($_smarty_tpl) {?><!-- <div class="blockuserinfo-top pull-right">
<div class="current">
	<i class="mdi mdi-account"></i>
</div>
<ul class="toogle_content" style="display:none;">
		<?php $_smarty_tpl->tpl_vars['context'] = new Smarty_variable(Context::getContext(), null, 0);?>
		<li><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a></li>
		<li><a class="link-myaccount" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="mdi mdi-account"></i> <?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a></li>
		<li><a class="link-wishlist wishlist_block" href="<?php echo $_smarty_tpl->tpl_vars['context']->value->link->getModuleLink('blockwishlist','mywishlist');?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="mdi mdi-heart"></i> <?php echo smartyTranslate(array('s'=>'My wishlist','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		
		<li><a class="link-myaccount" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="mdi mdi-rotate-3d"></i> <?php echo smartyTranslate(array('s'=>'Comparison','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a></li>
		<?php if (!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value) {?>
		<li><a class="link-mycart" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="mdi mdi-basket"></i> <?php echo smartyTranslate(array('s'=>'My cart','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		<?php }?>
		<li class="labLogin">
			<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
				<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
					<i class="mdi mdi-account-minus"></i><?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

				</a>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><i class="mdi mdi-account-box-outline"></i> <span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
			<?php } else { ?>
				<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
					<i class="mdi mdi-account-plus"></i><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

				</a>
			<?php }?> 
		</li>
	</ul>
</div>	 -->
<!-- Block user information module NAV  -->
<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<div class="header_user_info pull-right lab-user">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></a>
	</div>
<?php }?>
<div class="header_user_info pull-right">
	<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
		<a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="icon icon-user" aria-hidden="true"></i>
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php } else { ?>
		<a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<i class="icon icon-user" aria-hidden="true"></i>
			<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

		</a>
	<?php }?>
</div>
<!-- /Block usmodule NAV --><?php }} ?>
