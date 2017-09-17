<?php
class Home extends HT_Controller {
	
	 /**
	 * 移动端首页幻灯片
	 */
	public function index() {
		
		if (!$this->cache->memcached->get('wapHomePageCache')) {
			$advert = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/advert','','post'));
			$category = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/homeCategory','','post'));
			$hot = json_decode($this->fn_get_contents($this->config->main_base_url.'m/home/homeHot','','post'));
			$data = array(
				'advert' => $advert->messages,
				'category' => $category->messages,
				'hot' => $hot->messages
			);
			$this->cache->memcached->save('wapHomePageCache',$data,365*24*3600);
		} else {
			$data = $this->cache->memcached->get('wapHomePageCache');
		}
		$this->load->view('m/home/index',$data);
	}
}