<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ShowDay extends CI_Controller {
    
    public function index($currentDay="0") {
        $this->load->model('Ukulele_model', '', TRUE);
        $this->load->helper('url'); // for base url in js link.
        $this->lang->load('main');

        $data['result'] = $this->Ukulele_model->showMonth();
        $data['currentDay'] = $currentDay;
        
        $this->lang->load('showDay'); // lang for showday
        $this->load->view('showDay', $data);
    }
    
}