<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:42
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labslideshow/views/templates/hook/labslideshow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17182699985a83e836334af0-26030177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85b2886af2fec4b72a978fda6a9518d4f253f52d' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labslideshow/views/templates/hook/labslideshow.tpl',
      1 => 1514779582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17182699985a83e836334af0-26030177',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'labslideshow_slides' => 0,
    'slide' => 0,
    'link' => 0,
    'labslideshow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e836369797_61654872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e836369797_61654872')) {function content_5a83e836369797_61654872($_smarty_tpl) {?> 
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
    <!-- Module labslideshow -->
    <?php if (isset($_smarty_tpl->tpl_vars['labslideshow_slides']->value)) {?>
	<div class="lab-nivoSlideshow">
		<div class="lab-loading"></div>
        <div id="lab-slideshow" class="slides">
                <?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labslideshow_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
                                <img 
									data-thumb="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."labslideshow/images/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
"  
									src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)@constant('_MODULE_DIR_'))."labslideshow/images/".((string)mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8')));?>
"
                                     alt="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
"
									 title="#htmlcaption<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" />
                    <?php }?>
                <?php } ?>
        </div>
		
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['labslideshow_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value) {
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['slide']->value['active']) {?>
			<?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_TITLE']=='true') {?>
				<div id="htmlcaption<?php echo $_smarty_tpl->tpl_vars['slide']->value['id_slide'];?>
" class=" nivo-html-caption nivo-caption">
					<div class="lab_description active <?php echo $_smarty_tpl->tpl_vars['slide']->value['margin'];?>
 <?php echo $_smarty_tpl->tpl_vars['slide']->value['style'];?>
">
					
					
					<div class="title">
						<h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</h4>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['legend']) {?>
					<div class="lab_caption">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8', true);?>

					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
					<div class="description">
						<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

					</div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']) {?>
					<div class="readmore">
						<a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
"><?php echo smartyTranslate(array('s'=>'Show Now','mod'=>'labslideshow'),$_smarty_tpl);?>
</a>
					</div>
					<?php }?>
					</div>
				</div>
			<?php }?>
		<?php }?>
        <?php } ?>
	</div>
	<!-- <?php echo var_dump($_smarty_tpl->tpl_vars['labslideshow']->value);?>
 -->
<script type="text/javascript">
    $(window).load(function() {
		$(document).off('mouseenter').on('mouseenter', '.lab-nivoSlideshow', function(e){
			$('.lab-nivoSlideshow .timeline').addClass('lab_hover');
		});

		$(document).off('mouseleave').on('mouseleave', '.lab-nivoSlideshow', function(e){
			$('.lab-nivoSlideshow .timeline').removeClass('lab_hover');
		});
        $('#lab-slideshow').nivoSlider({
			effect: 'random',
			slices: 15,
			boxCols: 8,
			boxRows: 4,
			animSpeed: '<?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_SPEED']!='') {?><?php echo $_smarty_tpl->tpl_vars['labslideshow']->value['LAB_SPEED'];?>
<?php } else { ?>600<?php }?>',
			pauseTime: '<?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_PAUSE']!='') {?><?php echo $_smarty_tpl->tpl_vars['labslideshow']->value['LAB_PAUSE'];?>
<?php } else { ?>5000<?php }?>',
			startSlide: 0,
			directionNav: <?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_E_N_P']=='true') {?>true<?php } else { ?>false<?php }?>,
			controlNav: <?php if ($_smarty_tpl->tpl_vars['labslideshow']->value['LAB_E_CONTROL']=='true') {?> true <?php } else { ?> false <?php }?>,
			controlNavThumbs: false,
			pauseOnHover: true,
			manualAdvance: false,
			prevText: '<i class="icon-angle-left"></i>',
			nextText: '<i class="icon-angle-right"></i>',
                        afterLoad: function(){
                         $('.lab-loading').css("display","none");
                        },     
						beforeChange: function(){ 
                            $('.nivo-caption .lab_description').removeClass("active").css("opacity","0");
                        },
                        afterChange: function(){ 
                            $('.nivo-caption .lab_description').addClass("active" ).css("opacity","1");
                        }
 		});
		//$(document).ready(function() {
		//	$(".nivo-caption .title h4").lettering('words');
		//});
		
    });
    </script>
	
    <?php }?>
    <!-- /Module labslideshow -->
<?php }?><?php }} ?>
