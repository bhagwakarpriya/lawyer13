<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        if ($this->input->post()) {
            $postdata = $this->input->post();

            if (isset($_SESSION['data'])) {
                $api_data = array(
                    'client_id' => $_SESSION['data']['id'],
                    'case_title' => $postdata['case_title'],
                    'categorie' => $postdata['categorie'],
                    'city_select' => $postdata['city_select'],
                    'case_decription' => $postdata['case_decription'],
                );
                $respon = execute_data('case_detail/add', json_encode($api_data), 'POST');
                if ($respon) {
                    $return['status'] = 'success';
                    $return['message'] = 'case submited';
                    $data['result'] = true;
                    $return['redirect'] = base_url();
                } else {
                    $data['result'] = false;
                    $return['status'] = 'error';
                    $return['message'] = 'Something worng.';
                }
                echo json_encode($return);
                exit();
            } else {
                $data['result'] = false;
                $return['status'] = 'error';
                $return['message'] = 'Please first login';
                echo json_encode($return);
                exit();
            }
        }
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'toastr/toastr.min.js',
            'home.js',
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['init'] = array(
            "Home.casedetail()",
        );
        $response = execute_data('lawyer/', '', 'GET');
        $data['lawyer'] = $response['payload'];
        $response = execute_data('specilization/', '', 'GET');
        $data['specilization'] = $response['payload'];
        $this->load->view('home', $data);
    }

    public function login() {
        $_SESSION['current_page'] = 'login';
        $this->load->view('login');
    }

    public function dologin() {
        if ($this->input->post()) {
            $data = $this->input->post();
            $api_data = array(
                'email' => $data['username'],
                'password' => $data['password'],
            );
            if (strtolower(trim($data['usertype'])) == 'lawyer') {
                $respo = execute_data('lawyer/login', json_encode($api_data), 'POST');
                if (is_array($respo) && $respo['msg'] == 'lawyer loggedin successfully') {
                    $_SESSION['data'] = $respo['payload'];
                    $_SESSION['username'] = $respo['payload']['name']['first_name'] . ' ' . $respo['payload']['name']['last_name'];
                    $_SESSION['login'] = true;
                    $_SESSION['usertype'] = strtolower(trim($data['usertype']));
                    $data['result'] = true;
                } else {
                    $data['result'] = false;
                    $_SESSION['login'] = false;
                }
            } else {
                $respo = execute_data('clients/login', json_encode($api_data), 'POST');
                if (is_array($respo) && $respo['msg'] == 'client login successfully') {
                    $_SESSION['data'] = $respo['payload'];
                    $_SESSION['username'] = $respo['payload']['name']['first_name'];
//                    $_SESSION['id']=
                    $_SESSION['login'] = true;
                    $_SESSION['usertype'] = strtolower(trim($data['usertype']));
                    $data['result'] = true;
                } else {
                    $data['result'] = false;
                    $_SESSION['login'] = false;
                }
            }

            redirect(base_url());
        }
    }

    public function logout() {
        unset($_SESSION['login']);
        session_destroy();
        redirect(base_url());
    }

 
}
