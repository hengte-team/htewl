<?php
class CS_Controller extends HT_Controller
{
    public function __construct()
    {
    	parent::__construct();
        if (empty($this->uid)) {
        	$this->redirect(site_url('m/login/index'));
        }
    }
}