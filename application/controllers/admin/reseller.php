<?php

class Reseller extends CI_Controller {

    public function index() {

        // trying out readbean ORM inside of this admin reseller controller
        $this->load->library('rb');

        // test RedBean code from their 5 minute tutorial -- is this thing working?
        $album = R::dispense('album');
        $album->title = '13 Songs';
        $album->artist = 'Fugazi';
        $album->year = 1990;
        $album->rating = 5;
        $id = R::store($album);

        $this->load->model('reseller_model');
//        $data['resellers'] = $this->reseller_model->getResellers();

        $data['resellers'] = array($id);

        $this->load->view('admin/common/header_admin');
        $this->load->view('admin/common/nav_admin');
        $this->load->view('admin/reseller/reseller_list', $data);
        $this->load->view('admin/common/footer_admin');



    }

    public function addReseller() {

    }
}