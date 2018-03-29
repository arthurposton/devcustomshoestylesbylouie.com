<?php

if (!defined('_CAN_LOAD_FILES_'))
	exit;

class blocksocialOverride extends blocksocial
{
	public function hookDisplayTop()
	{
		if (!$this->isCached('blocksocial.tpl', $this->getCacheId()))
			$this->smarty->assign(array(
				'facebook_url' => Configuration::get('BLOCKSOCIAL_FACEBOOK'),
				'twitter_url' => Configuration::get('BLOCKSOCIAL_TWITTER'),
				'rss_url' => Configuration::get('BLOCKSOCIAL_RSS'),
				'youtube_url' => Configuration::get('BLOCKSOCIAL_YOUTUBE'),
				'google_plus_url' => Configuration::get('BLOCKSOCIAL_GOOGLE_PLUS'),
				'pinterest_url' => Configuration::get('BLOCKSOCIAL_PINTEREST'),
				'vimeo_url' => Configuration::get('BLOCKSOCIAL_VIMEO'),
				'instagram_url' => Configuration::get('BLOCKSOCIAL_INSTAGRAM'),
			));

		return $this->display(__FILE__, 'blocksocial_top.tpl', $this->getCacheId());
	}
}
