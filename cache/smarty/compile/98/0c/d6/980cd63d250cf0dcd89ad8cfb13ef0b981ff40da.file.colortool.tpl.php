<?php /* Smarty version Smarty-3.1.19, created on 2018-02-14 07:41:42
         compiled from "/home/sa7rru46ljhy/public_html/dev/prestashop/modules/labthemeoptions/views/templates/front/colortool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4538811315a83e836134929-79066700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '980cd63d250cf0dcd89ad8cfb13ef0b981ff40da' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/modules/labthemeoptions/views/templates/front/colortool.tpl',
      1 => 1514779895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4538811315a83e836134929-79066700',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'show_labskin' => 0,
    'id' => 0,
    'modules_dir' => 0,
    'PS_BASE_URL' => 0,
    'PS_BASE_URI' => 0,
    'LAB_THEMENAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a83e836159381_97678382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a83e836159381_97678382')) {function content_5a83e836159381_97678382($_smarty_tpl) {?>
     <?php if ($_smarty_tpl->tpl_vars['show_labskin']->value!=0) {?>

        <div class="lab-wrap">
		<h2 class="lab-title">Theme Options</h2>
		<div class="lab-option">
			<!-- <div class="cl-table">
				<div class="cl-tr cl-tr-mode-label">
					<div class="cl-tr cl-tr-style-label"><?php echo smartyTranslate(array('s'=>'Mode Layout'),$_smarty_tpl);?>
</div>
				</div>
				<div class="cl-tr cl-tr-mode">
					<div class="pull-left">
						<input class="mode_theme" id="labbox" type="radio" value="box" name="mode_css"><?php echo smartyTranslate(array('s'=>'Box'),$_smarty_tpl);?>

					</div>
					<div class="pull-right">
						<input class="mode_theme" id="labwide" type="radio" value="wide" name="mode_css" checked="checked"><?php echo smartyTranslate(array('s'=>'Wide'),$_smarty_tpl);?>

					</div>
				</div>
			</div> -->
			
			
			<div class="cl-wrapper">
				<div class="cl-container">
					<div class="cl-tr cl-tr-mode-label">
						<div class="cl-tr cl-tr-style-label"><?php echo smartyTranslate(array('s'=>'Theme color'),$_smarty_tpl);?>
</div>
					</div>
					<div class="cl-table">
                        <div class="cl-tr cl-tr-style box-layout">
                            <div class="cl-td-l cl-td-layout cl-td-layout1"><a href="javascript:void(0)" id="color1" title="<?php echo smartyTranslate(array('s'=>'color1'),$_smarty_tpl);?>
"><span class="cl1"></span></a></div>
                            <div class="cl-td-l cl-td-layout cl-td-layout2"><a href="javascript:void(0)" id="color2" title="<?php echo smartyTranslate(array('s'=>'color2'),$_smarty_tpl);?>
"><span class="cl1"></span></a></div>
                        
                            <div class="cl-td-l cl-td-layout cl-td-layout3"><a href="javascript:void(0)" id="color3" title="<?php echo smartyTranslate(array('s'=>'color3'),$_smarty_tpl);?>
"><span class="cl1"></span></a></div>
                            <div class="cl-td-l cl-td-layout cl-td-layout4"><a href="javascript:void(0)" id="color4" title="<?php echo smartyTranslate(array('s'=>'color4'),$_smarty_tpl);?>
"><span class="cl1"></span></a></div>
                        
                            <div class="cl-td-l cl-td-layout cl-td-layout5"><a href="javascript:void(0)" id="color5" title="<?php echo smartyTranslate(array('s'=>'color5'),$_smarty_tpl);?>
"><span class="cl1"></span></a></div>
                            <div class="cl-td-l cl-td-layout cl-td-layout6"><a href="javascript:void(0)" id="color6" title="<?php echo smartyTranslate(array('s'=>'color6'),$_smarty_tpl);?>
"><span class="cl1"></span></a></div>
                        
                            <!-- <div class="cl-td-l cl-td-layout cl-td-layout7"><a href="javascript:void(0)" id="color7" title="<?php echo smartyTranslate(array('s'=>'color7'),$_smarty_tpl);?>
"><span class="cl1"></span></a></div>
                            <div class="cl-td-l cl-td-layout cl-td-layout8"><a href="javascript:void(0)" id="color8" title="<?php echo smartyTranslate(array('s'=>'color8'),$_smarty_tpl);?>
"><span class="cl1"></span></a></div> -->
                        </div>
                    </div>
					<div class="cl-table">	
                        <div class="cl-tr">
                            <div class="cl-tr cl-tr-style-label"><?php echo smartyTranslate(array('s'=>'Background Image body:'),$_smarty_tpl);?>
</div>
                            <div class="cl-td-bg">
                                <div class="cl-pattern">
                                    <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['id']->step = 1;$_smarty_tpl->tpl_vars['id']->total = (int) ceil(($_smarty_tpl->tpl_vars['id']->step > 0 ? 30+1 - (1) : 1-(30)+1)/abs($_smarty_tpl->tpl_vars['id']->step));
if ($_smarty_tpl->tpl_vars['id']->total > 0) {
for ($_smarty_tpl->tpl_vars['id']->value = 1, $_smarty_tpl->tpl_vars['id']->iteration = 1;$_smarty_tpl->tpl_vars['id']->iteration <= $_smarty_tpl->tpl_vars['id']->total;$_smarty_tpl->tpl_vars['id']->value += $_smarty_tpl->tpl_vars['id']->step, $_smarty_tpl->tpl_vars['id']->iteration++) {
$_smarty_tpl->tpl_vars['id']->first = $_smarty_tpl->tpl_vars['id']->iteration == 1;$_smarty_tpl->tpl_vars['id']->last = $_smarty_tpl->tpl_vars['id']->iteration == $_smarty_tpl->tpl_vars['id']->total;?>
                                        <div class="cl-image pattern<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" id="pattern<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"></div>
                                    <?php }} ?>
                                </div>
                            </div>
                        </div>
                        <div class="cl-tr cl-row-reset">
                            <span class="cl-reset"></span>
                        </div>
					</div>
                </div>
			</div>
		</div>
		<div class="control inactive"><a href="javascript:void(0)"><i class="icon-cog icon-spin"></i></a></div>
		<script type="text/javascript">
//			$(document).ready( function(){
				$('.control').click(function(){
					if($(this).hasClass('inactive')) {
						$(this).removeClass('inactive');
						$(this).addClass('active');
						$('.lab-wrap').animate({left:'0'}, 500);
					} else {
						$(this).addClass('inactive');
						$(this).removeClass('active');
						$('.lab-wrap').animate({left:'-228px'}, 500);
					}
				});
//			});
		</script>
	</div>
     <?php }?>
<script type="text/javascript">

var date = new Date();
date.setTime(date.getTime() + (1440 * 60 * 1000));
// set default background image
    $(document).ready(function(){
      <?php $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['id']->step = 1;$_smarty_tpl->tpl_vars['id']->total = (int) ceil(($_smarty_tpl->tpl_vars['id']->step > 0 ? 30+1 - (1) : 1-(30)+1)/abs($_smarty_tpl->tpl_vars['id']->step));
if ($_smarty_tpl->tpl_vars['id']->total > 0) {
for ($_smarty_tpl->tpl_vars['id']->value = 1, $_smarty_tpl->tpl_vars['id']->iteration = 1;$_smarty_tpl->tpl_vars['id']->iteration <= $_smarty_tpl->tpl_vars['id']->total;$_smarty_tpl->tpl_vars['id']->value += $_smarty_tpl->tpl_vars['id']->step, $_smarty_tpl->tpl_vars['id']->iteration++) {
$_smarty_tpl->tpl_vars['id']->first = $_smarty_tpl->tpl_vars['id']->iteration == 1;$_smarty_tpl->tpl_vars['id']->last = $_smarty_tpl->tpl_vars['id']->iteration == $_smarty_tpl->tpl_vars['id']->total;?>
        $('#pattern<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
').click(function(){
            $('.cl-image').removeClass('active');
            $(this).addClass('active');
            $("body").css('background-image','url("<?php echo $_smarty_tpl->tpl_vars['modules_dir']->value;?>
labthemeoptions/views/templates/front/colortool/images/pattern/pattern<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.png")');
            $.cookie('pattern', 'labthemeoptions/views/templates/front/colortool/images/pattern/pattern<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
.png' , { expires: date });
            $.cookie('id','<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
');
        });
   <?php }} ?>
        if ($.cookie('theme_skin_cookie')!= '' && $.cookie('theme_skin_cookie') != null ){
            $('<link rel="stylesheet" type="text/css" href="'+$.cookie('theme_skin_cookie')+'" />').appendTo('head');
        }     //set theme color cookie
        $('.cl-td-layout a').click(function(){
            $('<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PS_BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['PS_BASE_URI']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LAB_THEMENAME']->value;?>
/css/color/'+this.id+'.css" />').appendTo('head');
            $.cookie('theme_skin_cookie', '<?php echo $_smarty_tpl->tpl_vars['PS_BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['PS_BASE_URI']->value;?>
themes/<?php echo $_smarty_tpl->tpl_vars['LAB_THEMENAME']->value;?>
/css/color/'+this.id+'.css', { expires: date });
            });
     /*   $(' body > input:checkbox').click(function(){
            if($('#wide').is(":checked")) {
                $('body').addClass("checked");
            } else  if($('#box').is(":checked")) {
                $('body').removeClass("checked");
            }
        });*/
        $(document).ready(function () {
            $('.mode_theme').click(function () {
            $id = $(this).attr('id');
                $('#page').removeAttr('class');
                $('#page').addClass($id);
            });
            });

    $('.cl-reset').click(function(){
		$.cookie('font_cookie','');
		$.cookie('pattern','');
        $.cookie('backgroundimage_cookie','');
        $.cookie('theme_skin_cookie','');
       //reset main
       location.reload();
    });
    });
</script>

<?php }} ?>
