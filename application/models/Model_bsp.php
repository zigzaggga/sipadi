<?php
class Model_bsp extends CI_Model {    
 
   function __construct(){
      parent::__construct();
      $this->load->database();
    }
    public function get_bsp()
    {

      $this->db->select('*');
      $this->db->from('basis_pengetahuan');
    $this->db->join('hama_penyakit', 'hama_penyakit.id = basis_pengetahuan.penyakit_id');
     $this->db->join('gejala', 'gejala.id = basis_pengetahuan.gejala_id');
      $this->db->order_by('kd_bsp', 'DESC');      
      $query = $this->db->get();
 
      // Return hasil query
      return $query;

  } 

   public function cek()
  {
     $kd_bsp = $this->input->post('kd_bsp');
   
        $this->db->select('*');
        $this->db->from('basis_pengetahuan');
        $this->db->where('kd_bsp',$kd_bsp); 
        $this->db->order_by('kd_bsp', 'DESC');
        $query = $this->db->get();

        return $query;
  }
 
   public function hapus($id)
  {
    $this->db->delete('basis_pengetahuan', array('kd_bsp' => $id));
      
  }

  public function edit()
  {

    $kd_bsp = $this->input->post('kd_bsp');
    $data = array(
     'kd_bsp' => $this->input->post('kd_bsp'),
      'gejala_id' => $this->input->post('gejala_id'),
       'bobot' => $this->input->post('bobot'),
    'penyaki_id' =>$this->input->post('penyakit_id')
                  
      
    );

    $this->db->where('kd_bsp', $kd_bsp);
    $this->db->update('basis_pengetahuan', $data);
  }
 
public function get_edit()
    {
      $this->db->select('*');
       $this->db->from('basis_pengetahuan');
      $this->db->order_by('kd_bsp', 'DESC');      
      $query = $this->db->get();

      return $query;
  }
 public function update_data1($tbl, $data)
    {
       $kd_bsp = $this->input->post('kd_bsp');
        $this->db->where('kd_bsp', $kd_bsp);
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
