<?php
class Personal extends HT_Controller
{
    public function _init()
    {
        $this->load->model('user_model', 'user');
    }

    public function index()
    {
        $result = $this->user->findByUId($this->uid);
        if ($result->num_rows() > 0) {
            show_404();
        }
        $data['userAccount'] = $result->row(0);
        $this->load->view('m/personal/index', $data);
    }

    public function setting()
    {
        $data = array();
        $this->load->view('m/personal/setting', $data);
    }
}