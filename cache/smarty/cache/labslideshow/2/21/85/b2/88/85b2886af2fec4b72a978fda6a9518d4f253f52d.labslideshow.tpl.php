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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa18b64cd4684_20446762',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa18b64cd4684_20446762')) {function content_5aa18b64cd4684_20446762($_smarty_tpl) {?> 
    <!-- Module labslideshow -->
    	<div class="lab-nivoSlideshow">
		<div class="lab-loading"></div>
        <div id="lab-slideshow" class="slides">
                                                                    <img 
									data-thumb="http://dev.customshoestylesbylouie.com/prestashop/modules/labslideshow/images/6d12c9c2bd07f2f287ee12663536dbe9292f2f6e_201 Black-White 1.jpg"  
									src="http://dev.customshoestylesbylouie.com/prestashop/modules/labslideshow/images/6d12c9c2bd07f2f287ee12663536dbe9292f2f6e_201 Black-White 1.jpg"
                                     alt="Caporicci Italian Mens Shoes Black &amp; White Baby Alligator Oxfords"
									 title="#htmlcaption4" />
                                                                                        <img 
									data-thumb="http://dev.customshoestylesbylouie.com/prestashop/modules/labslideshow/images/c992a06bbb1d17b13d000404bf2457f9e478f6a3_570 Black 1.jpg"  
									src="http://dev.customshoestylesbylouie.com/prestashop/modules/labslideshow/images/c992a06bbb1d17b13d000404bf2457f9e478f6a3_570 Black 1.jpg"
                                     alt="Caporicci Italian Mens Shoes Black Alligator Boots "
									 title="#htmlcaption5" />
                                            </div>
		
		        							<div id="htmlcaption4" class=" nivo-html-caption nivo-caption">
					<div class="lab_description active left style1">
					
					
					<div class="title">
						<h4>Black &amp; White Baby Alligator Oxfords</h4>
					</div>
										<div class="lab_caption">
						Caporicci Italian Mens Shoes Black &amp; White Baby Alligator Oxfords
					</div>
																				<div class="readmore">
						<a href="#">Show Now</a>
					</div>
										</div>
				</div>
					                							<div id="htmlcaption5" class=" nivo-html-caption nivo-caption">
					<div class="lab_description active left style1">
					
					
					<div class="title">
						<h4>Black Alligator Boots</h4>
					</div>
										<div class="lab_caption">
						Caporicci Italian Mens Shoes Black Alligator Boots 
					</div>
																				<div class="readmore">
						<a href="#">Show Now</a>
					</div>
										</div>
				</div>
					        	</div>
	<!-- array(6) {
  ["languages"]=>
  array(1) {
    [0]=>
    array(10) {
      ["id_lang"]=>
      string(1) "1"
      ["name"]=>
      string(17) "English (English)"
      ["active"]=>
      string(1) "1"
      ["iso_code"]=>
      string(2) "en"
      ["language_code"]=>
      string(5) "en-us"
      ["date_format_lite"]=>
      string(5) "m/d/Y"
      ["date_format_full"]=>
      string(11) "m/d/Y H:i:s"
      ["is_rtl"]=>
      string(1) "0"
      ["id_shop"]=>
      string(1) "1"
      ["shops"]=>
      array(1) {
        [1]=>
        bool(true)
      }
    }
  }
  ["LAB_PAUSE"]=>
  int(6000)
  ["LAB_SPEED"]=>
  int(500)
  ["LAB_E_N_P"]=>
  bool(true)
  ["LAB_E_CONTROL"]=>
  bool(true)
  ["LAB_TITLE"]=>
  bool(true)
}
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
			animSpeed: '500',
			pauseTime: '6000',
			startSlide: 0,
			directionNav: true,
			controlNav:  true ,
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
	
        <!-- /Module labslideshow -->
<?php }} ?>
