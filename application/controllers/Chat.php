<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

    public function index() {
        $response = execute_data('cliets/', '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['lawyer'] = $response['payload'];
        $this->load->view('lawyer', $data);
        $_SESSION['current_page'] = 'lawyer';
    }

    public function tags($parent){
        $response = execute_data('tag?parent='.$parent, '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        header('Content-Type: application/json');
        echo json_encode($response['payload']);
    }

    public function question($level,$qtype){
        $response = execute_data('questionnaire?level='.$level.'&qtype='.$qtype, '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        header('Content-Type: application/json');
        echo json_encode($response['payload']);
    }
}
?>
