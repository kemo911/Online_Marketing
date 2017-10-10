<?php
    class C_login extends CI_Controller{
        public function __construct() {
            parent::__construct();
            $this->load->model('M_login');
        }

        public function signup(){
            $data['title'] = "SignUp"; 
            if($this->input->post()){
                $password = $this->input->post('password');
                $c_password = $this->input->post('confirm_password');
                $email = $this->input->post('email');
                $result = $this->M_login->checkEmail($email);
                if(empty($result))
                    {
                           if($password == $c_password){
                           $_POST['password'] = md5($password);
                           unset($_POST['confirm_password']);
                           $success = $this->M_login->sign_up();
                           if($success){
                               redirect(base_url()."C_login/signin");
                           }  else {
                               die("there was an error");
                           }
                        }  else {
                            $this->session->set_flashdata('error', "password doesn't match" );  
                            redirect(base_url() . 'C_login/signup');
                        }
                    }else {
                        $this->session->set_flashdata('error', 'Email Exists , Try Another one');  
                        redirect(base_url() . 'C_login/signup'); 
                    }
                
                //not about us
            }  else {
                $this->load->view('V_login',$data); 
            }
        }
                
        function signin(){
                $this->load->library('form_validation');  
                $data['title'] = "Signin";
                $this->form_validation->set_rules('email', 'email', 'required');  
                $this->form_validation->set_rules('password', 'Password', 'required'); 
                if($this->form_validation->run())  
                     {  
                        //true  
                        $email = $this->input->post('email');
                        $password = md5($this->input->post('password'));
                        $result = $this->M_login->checkEmail($email);
                        //model function   
                        if($this->M_login->can_login($email, $password))  
                        {  
                             $session_data = array(  
                                  'email'     =>     $email  ,
                                  'loggedin' => 1
                             );  
                             $this->session->set_userdata($session_data);  
                             redirect(base_url() . 'C_profile/profile');  
                        }  
                        else  
                        {  
                             $this->session->set_flashdata('error', 'Invalid Username Or Password');  
                             redirect(base_url() . 'C_login/signin');  
                        }  
                            }else  {  
                             //false  
                             $this->load->view('V_signin',$data);  
                        }   
        }
        
        function logout(){
            $this->session->sess_destroy();
            redirect(base_url()."C_login/signin");
        }
        
        
       
        
    }
    
?>

