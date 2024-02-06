<?php
class Model_template extends CI_Model {
 
   function __construct(){
      parent::__construct();
      $this->load->database();
    }

	public function simpan($namaTabel, $data){
		$this->db->insert($namaTabel,$data);
		return $this->db->insert_id();
	}

	public function getNamaBiodata($id){
		return $this->db->query("SELECT * FROM biodata_user WHERE id_user = ". strval($id))->result_array();

	}


}
