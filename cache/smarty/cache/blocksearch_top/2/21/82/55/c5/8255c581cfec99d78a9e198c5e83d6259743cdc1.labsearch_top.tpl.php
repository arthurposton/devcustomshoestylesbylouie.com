<?php /*%%SmartyHeaderCode:2925661555a83e8361cbc42-98791551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8255c581cfec99d78a9e198c5e83d6259743cdc1' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/themes/lab_ethan_fashion11/modules/labsearch/labsearch_top.tpl',
      1 => 1514779582,
      2 => 'file',
    ),
    'b74ab0896a3c18fb0ab4acc5e79ee60296e9589c' => 
    array (
      0 => '/home/sa7rru46ljhy/public_html/dev/prestashop/modules/labsearch/labsearch_instant.tpl',
      1 => 1514780785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2925661555a83e8361cbc42-98791551',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa18b64b6e663_04181055',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa18b64b6e663_04181055')) {function content_5aa18b64b6e663_04181055($_smarty_tpl) {?><div id="search_block_top" class="clearfix">
	<div class="current">
		Search 
		 <i class="icon icon-search"></i> 		
	</div>
	<div class="toogle_content" style="display: none;">
		<form id="searchbox" method="get" action="http://dev.customshoestylesbylouie.com/prestashop/index.php?controller=search" >
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search here..." value="" />
			<button type="submit" name="submit_search" class="btn btn-default button">
				<i class="icon icon-search"></i> 
			</button>			
		</form>
	</div> 
</div> 

  <div id="search_autocomplete" class="search-autocomplete"></div>
		<script type="text/javascript">
		$('document').ready( function() {
			$("#search_query_top")
				.autocomplete(
					       '/prestashop/modules/labsearch/labsearchAjax.php',{
						minChars: 3,
						max: 10,
						width: 270,
						selectFirst: false,
						scroll: false,
						dataType: "json",
						formatItem: function(data, i, max, value, term) {
							return value;
						},
						parse: function(data) {
							var mytab = new Array();
							for (var i = 0; i < data.length; i++)
								mytab[mytab.length] = { data: data[i], value:' <img src="'+ data[i].ajaxsearchimage + '" />' + data[i].pname };
							return mytab;
						},
						extraParams: {
							ajaxSearch: 1,
							id_lang: 1
						}
					}
				)
				.result(function(event, data, formatted) {
					$('#search_query_top').val(data.pname);
					document.location.href = data.product_link;
				})
		});
	</script>

<?php }} ?>
