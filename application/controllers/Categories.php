<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function index() {
        $response = execute_data('specilization/', '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['specilization'] = $response['payload'];
        $this->load->view('categories', $data);
        $_SESSION['current_page'] = 'categories';
    }

}
