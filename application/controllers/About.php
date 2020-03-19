<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index() {
        $_SESSION['current_page'] = 'about';
        $this->load->view('about');
    }

}
