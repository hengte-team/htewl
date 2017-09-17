<?php
class Home extends HT_Controller
{
	public function index()
	{
		$data = array();
		$this->load->view('m/home/index', $data);
	}
}