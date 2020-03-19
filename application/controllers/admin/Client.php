<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function index() {
        $_SESSION['current_page'] = 'Clients';
        $response = execute_data('clients/', '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['client'] = $response['payload'];
        $this->load->view('admin/clientlist', $data);
    }

    public function activelawyer() {
        $_SESSION['current_page'] = 'Clients';
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $response = execute_data('lawyer/' . $id, '', 'PUT');
            if ($response) {
                $json_response['status'] = 'success';
                $json_response['message'] = 'Lawyer actived.';
                $json_response['redirect'] = base_url() . 'admin/Lawyer';
            } else {
                $json_response['status'] = 'error';
                $json_response['message'] = 'Something goes to wrong.';
            }
            echo json_encode($json_response);
            exit();
        }
    }

    public function deactivelawyer() {
        $_SESSION['current_page'] = 'Clients';
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $response = execute_data('lawyer/' . $id, '', 'PUT');

            if ($response) {
                $json_response['status'] = 'success';
                $json_response['message'] = 'Lawyer Deactived.';
                $json_response['redirect'] = base_url() . 'admin/Lawyer';
            } else {
                $json_response['status'] = 'error';
                $json_response['message'] = 'Something goes to wrong.';
            }
            echo json_encode($json_response);
            exit();
        }
    }

    public function deleteLawyer() {
        $_SESSION['current_page'] = 'Clients';
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $response = execute_data('lawyer/' . $id, '', 'DELETE');
            if ($response) {
                $json_response['status'] = 'success';
                $json_response['message'] = 'Lawyer Deleted.';
                $json_response['redirect'] = base_url() . 'admin/Lawyer';
            } else {
                $json_response['status'] = 'error';
                $json_response['message'] = 'Something goes to wrong.';
            }
            echo json_encode($json_response);
            exit();
        }
    }

}

?>