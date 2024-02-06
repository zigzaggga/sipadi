<?php
class Model_hmp extends CI_Model {    
 
   function __construct(){
      parent::__construct();
      $this->load->database();
    }
    public function get_hmp()
    {

      $this->db->select('*');
      $this->db->from('hama_penyakit');
  
      $this->db->order_by('kd_hmp', 'DESC');      
      $query = $this->db->get();
 
      // Return hasil query
      return $query;

  } 

   public function cek()
  {
     $kd_hmp = $this->input->post('kd_hmp');
   
        $this->db->select('*');
        $this->db->from('hama_penyakit');
        $this->db->where('kd_hmp',$kd_hmp); 
        $this->db->order_by('kd_hmp', 'DESC');
        $query = $this->db->get();

        return $query;
  }
 
   public function hapus($id)
  {
    $this->db->delete('hama_penyakit', array('kd_hmp' => $id));
      
  }

  public function edit()
  {

    $kd_hmp = $this->input->post('kd_hmp');
    $data = array(
     'kd_hmp' => $this->input->post('kd_hmp'),
      'deskripsi' => $this->input->post('deskripsi'),
      'jenis' => $this->input->post('jenis'),
       'gambar' => $this->input->post('gambar'),
    'nama_hmp' =>$this->input->post('nama_hmp')
                  
      
    );

    $this->db->where('kd_hmp', $kd_hmp);
    $this->db->update('hama_penyakit', $data);
  }
 public function get_edit()
    {
      $this->db->select('*');
      $this->db->from('hama_penyakit');
      $this->db->order_by('kd_hmp', 'DESC');      
      $query = $this->db->get();

      return $query;
  }

 public function update_data1($tbl, $data)
    {
       $kd_hmp = $this->input->post('kd_hmp');
        $this->db->where('kd_hmp', $kd_hmp);
        $this->db->update($tbl, $data);
    }
 
  public function get_data_by_pk($tbl, $where, $id)
    {
                $this->db->from($tbl);
                $this->db->where($where,$id);
                $query = $this->db->get();

                return $query;
    }
    
}
