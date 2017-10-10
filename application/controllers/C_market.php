<?php
    class C_market extends CI_Controller{
   		 public function __construct(){
			parent::__construct();
			$this->load->model('M_market');
		}
        public function show_market(){
        	$data['market'] = $this->M_market->get_item();   
            $this->load->view('layout/panel',$data);
            $this->load->view('layout/header',$data);                
            $this->load->view('V_market',$data);
        }
        
        function get_details($id){
            $data['item'] = $this->M_market->get_item_details($id);
            
            $data['main_content'] = 'details';
            $this->load->view('layout/panel',$data);
            $this->load->view('layout/header',$data);
            $this->load->view('V_item', $data);
        }
    }
    
    
?>

