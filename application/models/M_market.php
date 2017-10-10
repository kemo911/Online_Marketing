<?php
	class M_market extends CI_Model{	
		public function get_item(){
			$query = $this->db->get('market');
			return $query->result_array() ;
			
		}
                
                function get_item_details($id){
                    $this->db->select('*');
                    $this->db->from('market');
                    $this->db->where('id', $id);

                    $query = $this->db->get();
                    return $query->row();
                }
	}
	

?>