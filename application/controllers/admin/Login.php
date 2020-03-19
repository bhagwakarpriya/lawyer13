<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function index() {
           $this->loggedIn(); 
        if ($this->input->post()) {
            $data = $this->input->post();
            $api_data = array(
                'email' => $data['email'],
                'password' => $data['password'],
            );
            $respo = execute_data('lawyer/login', json_encode($api_data), 'POST');
            if (is_array($respo) && $respo['msg'] == 'lawyer loggedin successfully' && $respo['payload']['usertype'] == "admin") {
                $_SESSION['data'] = $respo['payload'];
                $_SESSION['username'] = $respo['payload']['name']['first_name'] . ' ' . $respo['payload']['name']['last_name'];
                $_SESSION['login'] = true;
                $_SESSION['usertype'] =$respo['payload']['usertype'];
                $data['result'] = true;
                $return['status'] = 'success';
                $return['message'] = 'Login Successfully! Please wait';
                $data['result'] = true;
                $return['redirect'] = base_url() . 'admin/Dashboard';
            } else {
                $data['result'] = false;
                $_SESSION['login'] = false;
                $return['status'] = 'error';
                $return['message'] = 'Email address or password does not match';
            }
            echo json_encode($return);
            exit();
        }
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'toastr/toastr.min.js',
            'validate/jquery.validate.min.js',
            'login.js',
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['init'] = array(
            "Login.init()",
        );
        $this->load->view('admin/login', $data);
    }
    public function checkIsLogin() {
        if (!isset($_SESSION['username']) && trim($_SESSION['username']) == '') {
            redirect(base_url() . 'admin');
        }
    }
    public function loggedIn() {
        if (isset($_SESSION['username']) && trim($_SESSION['username']) != '') {
            redirect(base_url() . 'admin/Dashboard/' . $_SESSION['userId']);
        }
    }
    public function logout() {
        session_destroy();
        redirect(base_url() . 'admin/Login');
    }

}
