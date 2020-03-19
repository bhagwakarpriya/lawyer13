<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

    public function index() {
        $response = execute_data('cliets/', '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['lawyer'] = $response['payload'];
        $this->load->view('lawyer', $data);
        $_SESSION['current_page'] = 'lawyer';
    }

    public function registration() {
        $_SESSION['current_page'] = 'registration';
        if ($this->input->post()){ 
            $data = $this->input->post();
            $api_data = array(
               'name' => array('first_name' => $data['Firstname'],
                   'last_name' => $data['Lastname']
                    ),
                    'phone_no' => $data['Contact'],
                    'email' => $data['Email'],
                    'gender' => $data['gender'],
                    'city' => $data['city_select'],
                    'password' => $data['Password'],
                );
                $respon = execute_data('clients/register', json_encode($api_data), 'POST');
                if ($respon) {
                    $return['status'] = 'success';
                    $return['message'] = 'Register Successfully! Please wait';
                    $data['result'] = true;
                    $return['redirect'] = base_url();
                } else {
                    $data['result'] = false;
                    $return['status'] = 'error';
                    $return['message'] = 'Something worng.';
                }
                echo json_encode($return);
                exit();
            }
            $data['js'] = array(
                'comman_function.js',
                'ajaxfileupload.js',
                'jquery.form.min.js',
                'toastr/toastr.min.js',
                'registration.js',
            );
            $data['css'] = array(
                'toastr/toastr.min.css'
            );
            $data['init'] = array(
                "Registration.clientinit()",
            );
            $this->load->view('c_registration',$data);
        }

    public function editProfile() {
        echo "<pre>";
        print_r($_SESSION);
        die;
        $response = execute_data('cliets/', '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['lawyer'] = $response['payload'];
        $this->load->view('lawyer', $data);
        $_SESSION['current_page'] = 'lawyer';
    }

}
