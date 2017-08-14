<?php 
class Landing extends CI_Model{


 public function head_list(){
 			$this->db->where(['type'=>'type1']);
   	    	$query = $this->db->get('products');
   	    	return $query->result();
}
   	    public function second_head_list(){
 			$this->db->where(['type'=>'type2']);
   	    	$query = $this->db->get('products');
   	    	return $query->result();

   	    }
   	    public function third_head_list(){
 			$this->db->where(['type'=>'type3']);
   	    	$query = $this->db->get('products');
   	    	return $query->result();

   	    }
   	    public function stuff(){
 			//$this->db->where(['type'=>'type3']);
   	    	$query = $this->db->get('products');
   	    	return $query->result();

   	    }

}



