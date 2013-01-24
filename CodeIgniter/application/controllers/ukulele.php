<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ukulele extends CI_Controller {

    public function index() {
        $currentDay = date("j", time());
        $this->showEvents($currentDay);
    }

    public function showEvents($currentDay) {
        $this->load->model('Ukulele_model', '', TRUE);
        $this->load->helper('url'); // for base url in js link.
        $data['result'] = $this->Ukulele_model->showAll();
        $data['currentDay'] = $currentDay;
        $this->load->view('index', $data);
    }

}