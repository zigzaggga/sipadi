<?php
class Model_gejala extends CI_Model {    
 
   function __construct(){
      parent::__construct();
      $this->load->database();
    }
    public function get_gejala()
    {

      $this->db->select('*');
      $this->db->from('gejala');
  
      $this->db->order_by('id', 'DESC');      
      $query = $this->db->get();
 
      // Return hasil query
      return $query;

  } 

   public function cek()
  {
     $id = $this->input->post('id');
   
        $this->db->select('*');
        $this->db->from('gejala');
        $this->db->where('id',$id); 
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get();

        return $query;
  }
 
   public function hapus($id)
  {
    $this->db->delete('gejala', array('id' => $id));
      
  }

  public function edit()
  {

    $id = $this->input->post('id');
    $data = array(
     'id' => $this->input->post('id'),
    'nama_gejala' =>$this->input->post('nama_gejala')
                  
      
    );

    $this->db->where('id', $id);
    $this->db->update('gejala', $data);
  }
 public function get_edit()
    {
      $this->db->select('*');
      $this->db->from('gejala');
      $this->db->order_by('id', 'DESC');      
      $query = $this->db->get();

      return $query;
  }
  function get_list_by_id($id){
         $sql = "select id,kode,nama_gejala from gejala where id in (".$id.")";
         return $this->db->query($sql);
     }

function get_by_gejala($gejala){
         $sql = "select distinct penyakit_id,p.kode,p.nama,p.keterangan from gejala_penyakit gp inner join penyakit p on gp.penyakit_id=p.id where gejala_id in (".$gejala.") order by penyakit_id,gejala_id";
         return $this->db->query($sql);
     }
      function get_gejala_by_penyakit($id,$gejala=null){
         $sql = "select gejala_penyakit.gejala_id,mb,md,bobot from gejala_penyakit where penyakit_id=".$id;
         if($gejala!=null)
            $sql=$sql." and gejala_id in (".$gejala.")";
        $sql=$sql." order by gejala_id";
         return $this->db->query($sql);
     }

}
