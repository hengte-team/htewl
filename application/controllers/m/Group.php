<?php
class Group extends HT_Controller
{
    public function _init()
    {
        $this->load->model('user_model', 'user');
    }

    public function index()
    {
        $data = array();
        $this->load->view('m/group/index', $data);
    }
}