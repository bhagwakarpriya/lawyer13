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
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'toastr/toastr.min.js',
//            'validate/jquery.validate.min.js',
            'admin/client.js',
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['init'] = array(
            "Client.client()",
        );
        $this->load->view('admin/clientlist', $data);
    }

    public function activeClient() {
        $_SESSION['current_page'] = 'Clients';
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $response = execute_data('clients/' . $id, '', 'PUT');
            if ($response) {
                $json_response['status'] = 'success';
                $json_response['message'] = 'Client actived.';
                $json_response['redirect'] = base_url() . 'admin/Client';
            } else {
                $json_response['status'] = 'error';
                $json_response['message'] = 'Something goes to wrong.';
            }
            echo json_encode($json_response);
            exit();
        }
    }

    public function deactiveClient() {
        $_SESSION['current_page'] = 'Clients';
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $response = execute_data('clients/' . $id, '', 'PUT');
            if ($response) {
                $json_response['status'] = 'success';
                $json_response['message'] = 'Client Deactived.';
                $json_response['redirect'] = base_url() . 'admin/Client';
            } else {
                $json_response['status'] = 'error';
                $json_response['message'] = 'Something goes to wrong.';
            }
            echo json_encode($json_response);
            exit();
        }
    }

    public function deleteClient() {
        $_SESSION['current_page'] = 'Clients';
        if ($this->input->post()) {
            $id = $this->input->post('id');
            $response = execute_data('clients/' . $id, '', 'DELETE');
            if ($response) {
                $json_response['status'] = 'success';
                $json_response['message'] = 'Client Deleted.';
                $json_response['redirect'] = base_url() . 'admin/Client';
            } else {
                $json_response['status'] = 'error';
                $json_response['message'] = 'Something goes to wrong.';
            }
            echo json_encode($json_response);
            exit();
        }
    }

    public function caseDetail($id) {
        $_SESSION['current_page'] = 'Clients';
        $response = execute_data('case_detail/'. $id,'', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['client'] = $response['payload'];
        echo "<pre>";
        print_r($data);
        die();
//        $this->load->view('admin/clientlist', $data);
    }

}

?>