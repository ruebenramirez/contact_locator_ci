<?php
class Reseller_model extends CI_Model {
    var $company = '';
    var $elite = '';
    var $distributor = '';
    var $specialistDealer = '';
    var $catalog = '';
    var $website = '';
    var $contact = '';
    var $email = '';
    var $phone = '';
    var $contact2 = '';
    var $email2 = '';
    var $phone2 = '';
    var $fax = '';
    var $address = '';
    var $city = '';
    var $state = '';
    var $zip = '';
    var $lat = '';
    var $lon = '';
    var $country = '';
    var $products = '';
    var $territories = '';
    var $nValid_message = '';
    var $saved = '';
    var $createdby = ''; //using custom NewTek admin user authentication to grab the user name that is adding/editing this reseller record...

    function __construct($id=null) {
        parent::__construct();
        $this->id = $id;
    }

    function getResellers() {

        // RedBean works from within the model
        $this->load->library('rb');

        // test RedBean code from their 5 minute tutorial -- is this thing working?
        $album = R::dispense('album');
        $album->title = '13 Songs';
        $album->artist = 'Fugazi';
        $album->year = 1990;
        $album->rating = 5;
        $id = R::store($album);

        return array(1, 2, 3, 4, 5);
    }

    function saveNewReseller() {

    }

    function updateReseller() {

    }

    function deleteReseller() {

    }
}