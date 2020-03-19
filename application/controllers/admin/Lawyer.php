<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lawyer extends CI_Controller {

    public function index() {
        $_SESSION['current_page'] = 'Lawyers';
        $response = execute_data('lawyer/', '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['lawyers'] = $response['payload'];
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'toastr/toastr.min.js',
//            'validate/jquery.validate.min.js',
            'activedeactive.js',
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['init'] = array(
            "Activedeactive.lawyer()",
        );
        $this->load->view('admin/lawyer_list', $data);
    }

    public function activelawyer() {
        $_SESSION['current_page'] = 'Lawyers';
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
        $_SESSION['current_page'] = 'Lawyers';
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
        $_SESSION['current_page'] = 'Lawyers';
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
