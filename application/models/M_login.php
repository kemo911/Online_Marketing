<?php
    class M_login extends CI_Model{
        function __construct() {
            parent::__construct();
        }

        public function sign_up(){
           return $this->db->insert("users",  $this->input->post()) ;
        }
        
        public function checkEmail($email)
        {
           $this -> db -> select('*');
           $this -> db -> from('users');
           $this -> db -> where('Email', $email);
           $query = $this -> db -> get();
           return $query->result_array();
        }
        
        function can_login($email, $password)  
            {  
                 $this->db->where('Email', $email);  
                 $this->db->where('Password', $password);  
                 $query = $this->db->get('users');  
                 //SELECT * FROM users WHERE username = '$username' AND password = '$password'  
                 if($query->num_rows() > 0)  
                 {  
                      return true;  
                 }  
                 else  
                 {  
                      return false;       
                 }  
            }  
    }