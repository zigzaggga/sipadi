<?php
class Model_home extends CI_Model {    
 
   function __construct(){
      parent::__construct();
      $this->load->database();
    }
    public function get_home()
    {

      $this->db->distinct();
       $this->db->select('*');
      $this->db->from('hama_penyakit');  
      $this->db->order_by('id', 'ASC');     
      $query = $this->db->get();
 
      // Return hasil query
      return $query;

  } 


  
public function get_edit()
    {
      $this->db->select('*');
        $this->db->from('hama_penyakit');
         $this->db->order_by('id', 'ASC');      
      $query = $this->db->get();

      return $query;
  }

}
