<?php
class Change extends HT_Controller
{
    public function index()
    {
        $data = array();
        $this->load->view('m/change/index', $data);
    }

    public function rule()
    {
        $data = array();
        $this->load->view('m/change/rule', $data);
    }
}