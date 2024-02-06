<?php
class Model_solusi extends CI_Model {    
 
   function __construct(){
      parent::__construct();
      $this->load->database();
    }
    public function get_solusi()
    {

      $this->db->select('*');
      $this->db->from('solusi');
  
      $this->db->order_by('kd_solusi', 'DESC');      
      $query = $this->db->get();
 
      // Return hasil query
      return $query;

  } 

   public function cek()
  {
     $kd_solusi = $this->input->post('kd_solusi');
   
        $this->db->select('*');
        $this->db->from('solusi');
        $this->db->where('kd_solusi',$kd_solusi); 
        $this->db->order_by('kd_solusi', 'DESC');
        $query = $this->db->get();

        return $query;
  }
 
   public function hapus($id)
  {
    $this->db->delete('solusi', array('kd_solusi' => $id));
      
  }

  public function edit()
  {

    $kd_solusi = $this->input->post('kd_solusi');
    $data = array(
     'kd_solusi' => $this->input->post('kd_solusi'),
    'solusi' =>$this->input->post('solusi')
                  
      
    );

    $this->db->where('kd_solusi', $kd_solusi);
    $this->db->update('solusi', $data);
  }
 public function get_edit()
    {
      $this->db->select('*');
      $this->db->from('solusi');
      $this->db->order_by('kd_solusi', 'DESC');      
      $query = $this->db->get();

      return $query;
  }

}
