<?php
    class C_profile extends CI_Controller{
        function __construct() {
            parent::__construct();
            $this->load->model('M_profile');
        }
        public function profile() {
            $user_details = $this->M_profile->get_details($this->session->userdata('email'));
            $data['full_name'] = $user_details->F_name.' '.$user_details->L_name;
            $data['email'] = $user_details->Email;
            $data['points'] = $user_details->Points;
            $this->load->view('layout/panel',$data);
            $this->load->view('layout/header',$data);
            $this->load->view('V_profile',$data);
            
        }
        
        public function add_points(){
            $email = $this->session->userdata('email');
            $success = $this->M_profile->add_points('$email');
            if($success){
                $this->session->set_flashdata('added', 'You have got the Points');
                redirect(base_url() . 'C_market/show_market');
            }else{
                die("points not added");
            }
        }
    }