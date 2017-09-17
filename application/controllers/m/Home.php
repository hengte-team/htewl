<?php
class Home extends HT_Controller
{
	public function index()
	{
		$data = array();
		$this->load->view('m/home/index', $data);
	}

	public function rule()
	{
		$data = array();
		$this->load->view('m/home/rule', $data);
	}
}