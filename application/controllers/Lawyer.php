<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Lawyer extends CI_Controller {

    public function index() {
        $response = execute_data('lawyer/', '', 'GET');
        if (!is_array($response)) {
            echo "server not response";
        }
        $data['lawyer'] = $response['payload'];
        $this->load->view('lawyer', $data);
        $_SESSION['current_page'] = 'lawyer';
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
            'toastr/toastr.min.js',
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

    public function updateProfile() {
        if ($this->input->post()) {
            $data = $this->input->post();
            $data = $this->input->post();
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
            if (isset($_FILES['idimage']['name'])) {
                if (!is_dir('./backend/images/lawyersbarcoucilno')) {
                    mkdir('./backend/images/lawyersbarcoucilno', 0777, true);
                }
                $image_file = pathinfo($_FILES['idimage']['name']);
                $lawyeridimage = time() . '.' . $image_file['extension'];
                $config['upload_path'] = './backend/images/lawyersbarcoucilno';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['file_name'] = $lawyeridimage;
                $this->upload->initialize($config);
                $this->upload->do_upload('idimage');
            }
            $api_data = array(
                "lawyer_id" => $_SESSION['data']['id'],
                "lawyeridimage" => $lawyeridimage,
                'edulist' => $data['edulist'],
                'aboutme' => $data['aboutme'],
                'barcoucilno' => $data['barcoucilno'],
                'statebarcouncil_select' => $data['statebarcouncil_select'],
                'experienceText' => $data['experienceText'],
                'designation' => $data['designation'],
                'explist' => $data['explist'],
                'secondaryexpertise' => $data['secondaryexpertise'],
                'phonefees' => $data['phonefees'],
                'phonefeesremarks' => $data['phonefeesremarks'],
                'meetingfees' => $data['meetingfees'],
                'meetingfeesremarks' => $data['meetingfeesremarks'],
                'reviewdocfees' => $data['reviewdocfees'],
                'reviewdocremarks' => $data['reviewdocremarks'],
                'fillcaseincourtfees' => $data['fillcaseincourtfees'],
                'fillcaseincourtremarks' => $data['fillcaseincourtremarks'],
                'hearingfees' => $data['hearingfees'],
                'hearingfeesremarks' => $data['hearingfeesremarks'],
                'servicesname' => $data['servicesname'],
                'otherfees' => $data['otherfees'],
                'otherremarks' => $data['otherremarks'],
            );
            echo "<pre>";
            print_r($api_data);
            die;
            $respon = execute_data('lawyer/' . $_SESSION["data"]["id"], json_encode($api_data), 'POST');
            if ($respon) {
                $return['status'] = 'success';
                $return['message'] = 'Profile Successfully! updated';
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
        );
        $data['css'] = array(
            'toastr/toastr.min.css'
        );
        $data['init'] = array(
        );
        $_SESSION['current_page'] = 'Lawyer Edit profile';
        $this->load->view('updateprofile', $data);
    }

}
