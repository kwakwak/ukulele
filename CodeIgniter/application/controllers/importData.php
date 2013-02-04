<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class ImportData extends CI_Controller {

    public function index() {
        $this->load->helper('url'); // for base url in js link.
        $this->lang->load('main');
        $data["result"] = $this->levontin();
        $this->load->view('importRes', $data);
    }
}