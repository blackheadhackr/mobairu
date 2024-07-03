<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_sub extends CI_Controller { 
    function __construct() {
        parent::__construct();
        $this->load->model('form_inset');
    }
    public function  insert_data(){
    //    $getloc = json_decode(file_get_contents("http://ipinfo.io/"));
    //     echo "<pre>";
    //     print_r($getloc);
    

    //     exit;
       
       $this->form_validation->set_rules('page', 'Page', 'required');
       $this->form_validation->set_rules('Name', 'Name', 'required');
       $this->form_validation->set_rules('Email', 'Email', 'required|valid_email');
       $this->form_validation->set_rules('phone', 'Phone', 'trim|required|min_length[10]|max_length[12]|numeric');
       $this->form_validation->set_rules('location', 'location', 'required');
       $this->form_validation->set_rules('Message', 'Message', 'required');
    //    message change 
    $this->form_validation->set_message('required', 'Please fill this feild.');
    $this->form_validation->set_message('min_length', 'Invalid Mobile Number');
    $this->form_validation->set_message('max_length', 'Invalid Mobile Number');
    $this->form_validation->set_message('valid_email', 'Invalid Email Id');
    // check
       if($this->form_validation->run() == false){
        $all_data = array(
            'result' => "error",
            'name' => form_error("Name"),
            'email' => form_error("Email"),
            'phone' => form_error("phone"),
            'location' => form_error("location"),
            'message' => form_error("Message"),
        );
       }else{
        $data = array(
            'name' => $this->input->post('Name'),
            'email' => $this->input->post('Email'),
            'phone' => $this->input->post('phone'),
            'location' => $this->input->post('location'),
            'message' => $this->input->post('Message'),
        );
        $a = $this->form_inset->form_data_insert($data);
        if($a){
            $all_data = array(
                'result' => "success",
                'message' => "we get your request we will connect you soon"
            );
        }else{
            $all_data = array(
                'result' => "error",
                'message' => '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Sorry! </strong> we are facing some issue. Please give us some time.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
            );
        }
       }
       echo json_encode($all_data);
      
    }

}