<?php

class Reseller extends CI_Controller {

    public function index() {
        $this->load->model('reseller_model');
        $data['resellers'] = $this->reseller_model->getResellers();
        $this->load->view('admin/common/header_admin');
        $this->load->view('admin/common/nav_admin');
        $this->load->view('admin/reseller/reseller_list', $data);
        $this->load->view('admin/common/footer_admin');
    }

    public function addReseller() {

    }
}