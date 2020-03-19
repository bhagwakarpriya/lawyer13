<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

    public function index() {
        $_SESSION['current_page'] = 'Categories';
        $response = execute_data('specilization/', '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['specilization'] = $response['payload'];
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'activedeactive.js',
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['init'] = array(
            "Activedeactive.lawyer()",
        );
        $this->load->view('admin/categories/list', $data);
    }

    public function add() {
        if ($this->input->post()) {
            $data = $this->input->post();
            $categorieImage = "";
            if (isset($_FILES['image']['name'])) {
                if (!is_dir('./backend/images/categories')) {
                    mkdir('./backend/images/categories', 0777, true);
                }
                $image_file = pathinfo($_FILES['image']['name']);
                $categorieImage = time() . '.' . $image_file['extension'];
                $config['upload_path'] = './backend/images/categories';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] = $categorieImage;
                $this->upload->initialize($config);
                $this->upload->do_upload('image');
            }
            $api_data = array(
                'tag' => $data['categories_name'],
                'image' => $categorieImage,
            );
            $respo = execute_data('specilization/create', json_encode($api_data), 'POST');
            if ($respo) {
                $json_response['status'] = 'success';
                $json_response['message'] = 'Category Successfully added.';
                $json_response['redirect'] = base_url() . 'admin/Categories';
            } else {
                $json_response['status'] = 'error';
                $json_response['message'] = 'Something goes to wrong.';
            }
            echo json_encode($json_response);
            exit();
        }
        $data['js'] = array(
            'comman_function.js',
            'ajaxfileupload.js',
            'jquery.form.min.js',
            'toastr/toastr.min.js',
            'validate/jquery.validate.min.js',
            'categories.js',
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['init'] = array(
            'Categories.add()',
        );

        $this->load->view('admin/categories/add', $data);
    }

    public function registration() {
//        $_SESSION['current_page'] = 'registration';
        if ($this->input->post()) {
            $data = $this->input->post();
//            print_r($data);
//            die;
            $lawyerImage = "";
            if (isset($_FILES['filename']['name'])) {
                if (!is_dir('./backend/images/lawyers')) {
                    mkdir('./backend/images/lawyers', 0777, true);
                }
                $image_file = pathinfo($_FILES['filename']['name']);
                $lawyerImage = time() . '.' . $image_file['extension'];
                $config['upload_path'] = './backend/images/lawyers';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] = $lawyerImage;
                $this->upload->initialize($config);
                $this->upload->do_upload('filename');
            }
            $api_data = array(
                'name' => array('first_name' => $data['Firstname'],
                    'last_name' => $data['Lastname']
                ),
                'phone_no' => $data['phone_no'],
                'email' => $data['Email'],
                'gender' => $data['gender'],
                'city' => $data['city_select'],
                'password' => $data['Password'],
                'file' => $lawyerImage,
                'usertype' => "lawyer",
            );
            $respon = execute_data('lawyer/register', json_encode($api_data), 'POST');
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
            'registration.js',
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['init'] = array(
            "Registration.init()",
        );
        $this->load->view('l_registration', $data);
    }

}
