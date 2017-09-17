<?php
class CS_Controller extends HT_Controller
{
    public function __construct()
    {
    	parent::__construct();
        if (empty($this->uid)) {
        	$this->redirect($this->config->passport_url.'m/login/index.html');
        }
    }
    
     /**
     * 获取用户信息
     */
    public function get_user_info() {
         
    	$res = json_decode($this->fn_get_contents($this->config->main_base_url.'m/ucenter/userInfor',array('uid'=>$this->uid), 'post'));
    	if ($res->status) {
    		return $res->messages;
    	} else {
    		$this->redirect($this->config->passport_url.'m/login/index.html');
    	}
    }
}