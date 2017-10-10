<?php

    class M_profile extends CI_Model{
        function __construct() {
            parent::__construct();
        }
        
        function get_details($email){
            $this->db->where('Email',$email);
            $query = $this->db->get('users');
            return $query->row();
        }
        function add_points($email){
            $this->db->set('points', 'points+'.(int)10,false);
            $this->db->where('Email', $this->session->userdata('email'));
            $this->db->update('users'); 
            return TRUE;
        }
       
        
    }

