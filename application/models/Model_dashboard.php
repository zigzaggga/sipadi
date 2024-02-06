<?php
class Model_dashboard extends CI_Model {
    public function get_mahasiswa()
    {
        $this->db->select('*');
        $this->db->from('mahasiswa');
        
        $this->db->order_by('npm', 'mahasiswa');
        $query = $this->db->get();
        
        return $query;
    }

    public function count_gejala()
    {
        $query = $this->db->count_all_results('gejala');
        return $query;
    }
    public function count_penyakit()
    {
        $query = $this->db->count_all_results('hama_penyakit');
        return $query;
    }
     public function count_solusi()
    {
        $query = $this->db->count_all_results('solusi');
        return $query;
    }
 public function count_kasus()
    {
        $query = $this->db->count_all_results('kasus');
        return $query;
    }
 
}