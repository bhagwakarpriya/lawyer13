<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index(){
        $_SESSION['current_page'] = 'login';
        if ($this->input->post()) {
            $data = $this->input->post();
            $api_data = array(
                'email' => $data['email'],
                'password' => $data['password'],
            );
            if (strtolower(trim($data['usertype'])) == 'lawyer') {
                $respo = execute_data('lawyer/login', json_encode($api_data), 'POST');
                if (is_array($respo) && $respo['msg'] == 'lawyer loggedin successfully' && $respo['payload']['usertype'] == "lawyer") {
                    $_SESSION['data'] = $respo['payload'];
                    $_SESSION['username'] = $respo['payload']['name']['first_name'] . ' ' . $respo['payload']['name']['last_name'];
                    $_SESSION['login'] = true;
                    $_SESSION['usertype'] = strtolower(trim($data['usertype']));
                    $return['status'] = 'success';
                    $return['message'] = 'Login Successfully! Please wait';
                    $data['result'] = true;
                    $return['redirect'] = base_url();
                } else {
                    $data['result'] = false;
                    $_SESSION['login'] = false;
                    $return['status'] = 'error';
                    $return['message'] = 'Email address or password does not match';
                }
                echo json_encode($return);
                exit();
            } else {
                $respo = execute_data('clients/login', json_encode($api_data), 'POST');
                if (is_array($respo) && $respo['msg'] == 'client login successfully') {
                    $_SESSION['data'] = $respo['payload'];
                    $_SESSION['username'] = $respo['payload']['name']['first_name'] . ' ' . $respo['payload']['name']['last_name'];
//                    $_SESSION['id']=
                    $_SESSION['login'] = true;
                    $_SESSION['usertype'] = strtolower(trim($data['usertype']));
                    $return['status'] = 'success';
                    $return['message'] = 'Login Successfully! Please wait';
                    $data['result'] = true;
                    $return['redirect'] = base_url();
                } else {
                    $data['result'] = false;
                    $_SESSION['login'] = false;
                    $return['status'] = 'error';
                    $return['message'] = 'Email address or password does not match';
                }
                echo json_encode($return);
                exit();
            }  
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
        $this->load->view('login', $data);
    }

    public function logout() {
        unset($_SESSION['login']);
        session_destroy();
        redirect(base_url());
    }

}
