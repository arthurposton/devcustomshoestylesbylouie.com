<?php
if (!defined('_PS_VERSION_'))
	exit;
class posbestsellers extends Module
{
	private $token = '';
	private $_html = '';
	protected static $cache_best_sellers;
	public function __construct()
	{
		$this->name = 'posbestsellers';
		$this->tab = 'front_office_features';
		$this->version = '1.5.4';
		$this->author = 'posthemes';
		$this->need_instance = 0;
		$this->bootstrap = true;
		parent::__construct();
		$this->displayName = $this->l('Pos Top-sellers slider');
		$this->description = $this->l('Adds a block displaying your store\'s top-selling products.');
		$this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
	}
	public function install() {
        Configuration::updateValue($this->name . '_limit', 20);
        Configuration::updateValue($this->name . '_row', 4);
        Configuration::updateValue($this->name . '_items', 1);
		Configuration::updateValue($this->name . '_speed', 1000);
        Configuration::updateValue($this->name . '_auto', 0);
		Configuration::updateValue($this->name . '_pause', 3000);
        Configuration::updateValue($this->name . '_arrow', 1);
        Configuration::updateValue($this->name . '_pagi', 0);
		Configuration::updateValue($this->name . '_move', 1);
        Configuration::updateValue($this->name . '_per_md', 1);
        Configuration::updateValue($this->name . '_per_sm', 2);
        Configuration::updateValue($this->name . '_per_xs', 2);
        Configuration::updateValue($this->name . '_per_xxs', 1);
		return parent :: install()
			&& $this->registerHook('header')		
			&& $this->registerHook('displayLeftColumn')
			&& $this->registerHook('blockPosition1')
			&& $this->registerHook('addproduct')
			&& $this->registerHook('updateproduct')
			&& $this->registerHook('deleteproduct')
			&& $this->installFixtures();
	}
	protected function installFixtures()
	{
		$languages = Language::getLanguages(false);
		foreach ($languages as $lang){
			$this->installFixture((int)$lang['id_lang'], 'cms.png');
		}
		return true;
	}
	protected function installFixture($id_lang)
	{	
		$values['posbestsellers_title'][(int)$id_lang] = 'Top sellers';
		Configuration::updateValue($this->name . '_title', $values['posbestsellers_title']);
	}
    public function uninstall() {
        $this->_clearCache('*');
		Configuration::deleteByName($this->name . '_limit');
        Configuration::deleteByName($this->name . '_row');
        Configuration::deleteByName($this->name . '_items');
		Configuration::deleteByName($this->name . '_speed');
        Configuration::deleteByName($this->name . '_auto');
		Configuration::deleteByName($this->name . '_pause');
        Configuration::deleteByName($this->name . '_arrow');
        Configuration::deleteByName($this->name . '_pagi');
		Configuration::deleteByName($this->name . '_move');
        Configuration::deleteByName($this->name . '_per_lg');
        Configuration::deleteByName($this->name . '_per_md');
        Configuration::deleteByName($this->name . '_per_sm');
        Configuration::deleteByName($this->name . '_per_xs');
        return parent::uninstall();
    }
	public function psversion() {
		$version=_PS_VERSION_;
		$exp=$explode=explode(".",$version);
		return $exp[1];
	}
    private function postProcess() {
		if (Tools::isSubmit('submitposbestsellers'))
		{
			if($this->_postValidation()){
				$languages = Language::getLanguages(false);
				$values = array();
				foreach ($languages as $lang){
					$values[$this->name . '_title'][$lang['id_lang']] = Tools::getValue('poss_title_'.$lang['id_lang']);
				}
				Configuration::updateValue($this->name . '_title', $values[$this->name . '_title']);
				Configuration::updateValue($this->name . '_row', Tools::getValue('poss_row'));
				Configuration::updateValue($this->name . '_items', Tools::getValue('poss_items'));
				Configuration::updateValue($this->name . '_speed', Tools::getValue('poss_speed'));
				Configuration::updateValue($this->name . '_auto', Tools::getValue('poss_auto'));
				Configuration::updateValue($this->name . '_pause', Tools::getValue('poss_pause'));
				Configuration::updateValue($this->name . '_arrow', Tools::getValue('poss_arrow'));
				Configuration::updateValue($this->name . '_pagi', Tools::getValue('poss_pagi'));
				Configuration::updateValue($this->name . '_move', Tools::getValue('poss_move'));
				Configuration::updateValue($this->name . '_pausehover', Tools::getValue('poss_pausehover'));
				Configuration::updateValue($this->name . '_limit', Tools::getValue('poss_limit'));
				Configuration::updateValue($this->name . '_per_md', Tools::getValue($this->name . '_per_md'));
				Configuration::updateValue($this->name . '_per_sm', Tools::getValue($this->name . '_per_sm'));
				Configuration::updateValue($this->name . '_per_xs', Tools::getValue($this->name . '_per_xs'));
				Configuration::updateValue($this->name . '_per_xxs', Tools::getValue($this->name . '_per_xxs'));
				return $this->displayConfirmation($this->l('The settings have been updated.'));
			}else{
				return $this->_html;
			}
		}
		return '';
    }
	public function getContent()
	{		
		return $this->postProcess().$this->renderForm();
	}
	protected function _postValidation()
	{
		$errors = array();
		if (Tools::isSubmit('submitposbestsellers'))
		{
			if (!Validate::isInt(Tools::getValue('poss_row')) || !Validate::isInt(Tools::getValue('poss_items')) ||
				!Validate::isInt(Tools::getValue('poss_speed')) || !Validate::isInt(Tools::getValue('poss_pause')) || !Validate::isInt(Tools::getValue('poss_limit'))
			)
				$errors[] = $this->l('Invalid values');
		} 
		/* Returns if validation is ok */
		if (count($errors))
		{
			$this->_html .= $this->displayError(implode('<br />', $errors));
			return false;
		}
		return true;
	}
	public function renderForm()
	{	
        $id_lang = (int) Context::getContext()->language->id;
			$fields_form[0]['form'] = array(
				'legend' => array(
					'title' => $this->l('Module Settings'),
					'icon' => 'icon-cogs'
				),
				'input' => array(
						array(
							'type' => 'text',
							'lang' => true,
							'label' => $this->l('Module description'),
							'name' => 'poss_title',
							'desc' => $this->l('This description will be displayed on front-office.')
						),
						array(
							'type' => 'text',
							'label' => $this->l('Products limit :'),
							'name' => 'poss_limit',
							'class' => 'fixed-width-sm',
							'desc' => $this->l('Set the number of products which you would like to see displayed in this module')
						),
				),
				'submit' => array(
					'title' => $this->l('Save'),
				)
			);
			$fields_form[1]['form'] = array(
				'legend' => array(
					'title' => $this->l('Slider configurations'),
					'icon' => 'icon-cogs'
				),
				'input' => array(
					array(
							'type' => 'text',
							'label' => $this->l('Rows'),
							'name' => 'poss_row',
							'class' => 'fixed-width-sm',
							'desc' => $this->l('Number rows of module')
					),
					array(
							'type' => 'text',
							'label' => $this->l('Number of Items:'),
							'name' => 'poss_items',
							'class' => 'fixed-width-sm',
							'desc' => $this->l('Show number of product visible.')
					),
					array(
							'type' => 'text',
							'label' => $this->l('Slide speed:'),
							'name' => 'poss_speed',
							'class' => 'fixed-width-sm',
							'suffix' => 'milliseconds',
							'desc' => $this->l('')
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Auto play'),
						'name' => 'poss_auto',
						'class' => 'fixed-width-xs',
						'desc' => $this->l('Default is 1000ms'),
						'values' => array(
							array(
								'id' => 'poss_auto_on',
								'value' => 1,
								'label' => $this->l('Enabled')
								),
							array(
								'id' => 'poss_auto_off',
								'value' => 0,
								'label' => $this->l('Disabled')
							)
						)
					),
					array(
							'type' => 'text',
							'label' => $this->l('Time auto'),
							'name' => 'poss_pause',
							'class' => 'fixed-width-sm',
							'suffix' => 'milliseconds',
							'desc' => $this->l('This field only is value when auto play function is enable. Default is 3000ms.')
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Show Next/Back control:'),
						'name' => 'poss_arrow',
						'class' => 'fixed-width-xs',
						'desc' => $this->l(''),
						'values' => array(
							array(
								'id' => 'poss_arrow_on',
								'value' => 1,
								'label' => $this->l('Enabled')
								),
							array(
								'id' => 'poss_arrow_off',
								'value' => 0,
								'label' => $this->l('Disabled')
							)
						)
					),
					array(
						'type' => 'switch',
						'label' => $this->l('Show pagination control:'),
						'name' => 'poss_pagi',
						'class' => 'fixed-width-xs',
						'desc' => $this->l(''),
						'values' => array(
							array(
								'id' => 'poss_pagi_on',
								'value' => 1,
								'label' => $this->l('Enabled')
								),
							array(
								'id' => 'poss_pagi_off',
								'value' => 0,
								'label' => $this->l('Disabled')
							)
						)
					),
					array(
						'type' => 'radio',
						'label' => $this->l('Scroll number:'),
						'name' => 'poss_move',
	                    'default_value' => 0,
						'values' => array(
							array(
								'id' => 'poss_move_on',
								'value' => 1,
								'label' => $this->l('1 item')),
							array(
								'id' => 'poss_move_off',
								'value' => 0,
								'label' => $this->l('All visible items')),
						),
	                    'validation' => 'isBool',
					),
					 array(
						'type' => 'switch',
						'label' => $this->l('Pause On Hover:'),
						'name' => 'poss_pausehover',
	                    'default_value' => 1,
						'is_bool' => true,
						'values' => array(
							array(
								'id' => 'poss_pausehover_on',
								'value' => 1,
								'label' => $this->l('Yes')),
							array(
								'id' => 'poss_pausehover_off',
								'value' => 0,
								'label' => $this->l('No')),
						),
	                    'validation' => 'isBool',
					),
					 'pos_fp_pro' => array(
	                    'type' => 'html',
	                    'id' => 'pos_fp_pro',
	                    'label'=> $this->l('Responsive:'),
	                    'name' => '',
	                ),
				),
				'submit' => array(
					'title' => $this->l('Save'),
				)		
			);
		$fields_form[1]['form']['input']['pos_fp_pro']['name'] = $this->BuildDropListGroup($this->findCateProPer());
		$helper = new HelperForm();
		$helper->show_toolbar = true;
		$helper->table = $this->table;
		$lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
		$helper->module = $this;
		$helper->default_form_language = $lang->id;
		$helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
		$helper->identifier = $this->identifier;
		$helper->submit_action = 'submitposbestsellers';
		$helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
		$helper->token = Tools::getAdminTokenLite('AdminModules');
		$module = _PS_MODULE_DIR_ ;
		$helper->tpl_vars = array(
			'module' =>$module,
			'uri' => $this->getPathUri(),
			'fields_value' => $this->getConfigFieldsValues(),
			'languages' => $this->context->controller->getLanguages(),
			'id_language' => $this->context->language->id,
		);
		return $helper->generateForm($fields_form);
	}
	public function getConfigFieldsValues()
	{
		$languages = Language::getLanguages(false);
		$fields = array(
			'poss_row'        => Configuration::get($this->name . '_row'),
			'poss_items'      => Configuration::get($this->name . '_items'),
			'poss_speed'      => Configuration::get($this->name . '_speed'),
			'poss_auto'       => Configuration::get($this->name . '_auto'),
			'poss_pause'      => Configuration::get($this->name . '_pause'),
			'poss_arrow'      => Configuration::get($this->name . '_arrow'),
			'poss_pagi'       => Configuration::get($this->name . '_pagi'),
			'poss_move'       => Configuration::get($this->name . '_move'),
			'poss_pausehover' => Configuration::get($this->name . '_pausehover'),
			'poss_limit'      => Configuration::get($this->name . '_limit'),
		);
		foreach ($languages as $lang)
		{	
			$fields['poss_title'][$lang['id_lang']] = Tools::getValue('posbestsellers_title_'.$lang['id_lang'], Configuration::get($this->name . '_title', $lang['id_lang']));
		}
		return $fields;
	}
	public function hookHeader($params)
	{
		$this->context->controller->addCSS(($this->_path).'posbestsellers.css', 'all');
	}
    // Hook Home
	protected function getBestSellers($params)
	{	
		$nb = Configuration::get($this->name . '_limit');
		if (Configuration::get('PS_CATALOG_MODE'))
			return false;

		if (!($result = ProductSale::getBestSales((int)$params['cookie']->id_lang, 0, $nb)))
			return false;
		$currency = new Currency($params['cookie']->id_currency);
		$usetax = (Product::getTaxCalculationMethod((int)$this->context->customer->id) != PS_TAX_EXC);
		foreach ($result as &$row)
			$row['price'] = Tools::displayPrice(Product::getPriceStatic((int)$row['id_product'], $usetax), $currency);

		return $result;
	}
	public function hookblockPosition1($params) {
		if (!$this->isCached('posbestsellers.tpl', $this->getCacheId())) {
			posbestsellers::$cache_best_sellers = $this->getBestSellers($params);
			$slider_options = array(
					'rows' => (int)Configuration::get($this->name . '_row'),
					'number_item' => (int)Configuration::get($this->name . '_items'),
					'speed_slide' => (int)Configuration::get($this->name . '_speed'),
					'auto_play' => (int)Configuration::get($this->name . '_auto'),
					'auto_time' => (int)Configuration::get($this->name . '_pause'),
					'show_arrow' => (int)Configuration::get($this->name . '_arrow'),
					'show_pagination' => (int)Configuration::get($this->name . '_pagi'),
					'move' => (int)Configuration::get($this->name . '_move'),
					'pausehover' => (int)Configuration::get($this->name . '_pausehover'),
					'items_md' => (int)Configuration::get($this->name . '_per_md'),	
					'items_sm' => (int)Configuration::get($this->name . '_per_sm'),	
					'items_xs' => (int)Configuration::get($this->name . '_per_xs'),	
					'items_xxs' => (int)Configuration::get($this->name . '_per_xxs'),		
				);
			$this->context->smarty->assign('slider_options', $slider_options);
			$this->smarty->assign(array(
				'products' => posbestsellers::$cache_best_sellers,
				'add_prod_display' => Configuration::get('PS_ATTRIBUTE_CATEGORY_DISPLAY'),
				'title' => Configuration::get($this->name . '_title', $this->context->language->id),			
			));
		}
        if (posbestsellers::$cache_best_sellers === false)
			return false;
		return $this->display(__FILE__, 'posbestsellers.tpl', $this->getCacheId());
	}
	public function hookdisplayLeftColumn($params) {
		if (!$this->isCached('posbestsellers_product.tpl', $this->getCacheId('posbestsellers_column'))) {
			posbestsellers::$cache_best_sellers = $this->getBestSellers($params);
			$slider_options = array(
					'rows' => (int)Configuration::get($this->name . '_row'),
					'number_item' => (int)Configuration::get($this->name . '_items'),
					'speed_slide' => (int)Configuration::get($this->name . '_speed'),
					'auto_play' => (int)Configuration::get($this->name . '_auto'),
					'auto_time' => (int)Configuration::get($this->name . '_pause'),
					'show_arrow' => (int)Configuration::get($this->name . '_arrow'),
					'show_pagination' => (int)Configuration::get($this->name . '_pagi'),
					'move' => (int)Configuration::get($this->name . '_move'),
					'pausehover' => (int)Configuration::get($this->name . '_pausehover'),
					'items_md' => (int)Configuration::get($this->name . '_per_md'),	
					'items_sm' => (int)Configuration::get($this->name . '_per_sm'),	
					'items_xs' => (int)Configuration::get($this->name . '_per_xs'),	
					'items_xxs' => (int)Configuration::get($this->name . '_per_xxs'),		
				);
			$this->context->smarty->assign('slider_options', $slider_options);
			$this->smarty->assign(array(
				'products' => posbestsellers::$cache_best_sellers,
				'add_prod_display' => Configuration::get('PS_ATTRIBUTE_CATEGORY_DISPLAY'),
				'title' => Configuration::get($this->name . '_title', $this->context->language->id),			
			));
		}
        if (posbestsellers::$cache_best_sellers === false)
			return false;
		return $this->display(__FILE__, 'posbestsellers_product.tpl', $this->getCacheId('posbestsellers_column'));
	}

	protected function getCacheId($name = null)
	{
		if ($name === null)
		$name = 'posbestsellers';
		return parent::getCacheId($name.'|'.date('Ymd'));
	}
	public function hookAddProduct($params)
	{
		$this->_clearCache('*');
	}
	public function hookUpdateProduct($params)
	{
		$this->_clearCache('*');
	}
	public function hookDeleteProduct($params)
	{
		$this->_clearCache('*');
	}
	public function BuildDropListGroup($group)
    {
        if(!is_array($group) || !count($group))
            return false;
        $html = '<div class="row">';
        foreach($group AS $key => $k)
        {
             if($key==4)
                 $html .= '</div><div class="row">';
             $html .= '<div class="col-xs-4 col-sm-3">'.$k['label'].'</label>'.
             '<select name="'.$k['id'].'" 
             id="'.$k['id'].'" 
             class="'.(isset($k['class']) ? $k['class'] : 'fixed-width-md').'"'.
             (isset($k['onchange']) ? ' onchange="'.$k['onchange'].'"':'').' >';
            for ($i=1; $i < 7; $i++){
                $html .= '<option value="'.$i.'" '.(Configuration::get($k['id']) == $i ? ' selected="selected"':'').'>'.$i.'</option>';
            }
            $html .= '</select></div>';
        }
        return $html.'</div>';
    }
    public function findCateProPer()
    {
        return array(
            array(
                'id' => 'posbestsellers_per_md',
                'label' => $this->l('Small Desktop (>1199 pixels)'),
            ),
            array(
                'id' => 'posbestsellers_per_sm',
                'label' => $this->l('Tablets (>991 pixels)'),
            ),
            array(
                'id' => 'posbestsellers_per_xs',
                'label' => $this->l('Smartphone (>767 pixels)'),
            ),
            array(
                'id' => 'posbestsellers_per_xxs',
                'label' => $this->l('Others (>480 pixels)'),
            ),
        );
    }
	public function _clearCache($template, $cache_id = null, $compile_id = null)
	{
		parent::_clearCache('posbestsellers.tpl');
	}
}