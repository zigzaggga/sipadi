<?php
class Model_kasus extends CI_Model {    
 
   function __construct(){
      parent::__construct();
      $this->load->database();
    }
    public function get_kasus()
    {

      $this->db->select('*');
      $this->db->from('kasus');
  
      $this->db->order_by('id', 'DESC');      
      $query = $this->db->get();
 
      // Return hasil query
      return $query;

  } 

   public function cek()
  {
     $id = $this->input->post('id');
   
        $this->db->select('*');
        $this->db->from('kasus');
        $this->db->where('id',$id); 
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();

        return $query;
  }
 
   public function hapus($id)
  {
    $this->db->delete('kasus', array('id' => $id));
      
  }

  public function edit()
  {

    $id = $this->input->post('id');
    $data = array(
     'id' => $this->input->post('id'),
      'kode' => $this->input->post('kode'),
    'gejala_kasus' =>$this->input->post('gejala_kasus')
                  
      
    );

    $this->db->where('id', $id);
    $this->db->update('kasus', $data);
  }
 public function get_edit()
    {
      $this->db->select('*');
      $this->db->from('kasus');
      $this->db->order_by('id', 'DESC');      
      $query = $this->db->get();

      return $query;
  }
 



}
