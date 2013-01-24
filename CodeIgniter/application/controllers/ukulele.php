<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ukulele extends CI_Controller {

    public function index() {
        $this->load->model('Ukulele_model', '', TRUE);
        $this->load->helper('url'); // for base url in js link.
        $this->lang->load('main');

        $currentDay = date("j", time());
        $this->showDay($currentDay);
    }

    public function showDay($currentDay) {
        $data['result'] = $this->Ukulele_model->showAll();
        $data['currentDay'] = $currentDay;
        
        $this->lang->load('showDay');
        $this->load->view('index', $data);
    }

}