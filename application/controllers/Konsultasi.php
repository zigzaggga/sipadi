<?php defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model(array('Model_konsultasi', 'Model_template'));
		$this->load->helper('date_helper');
		$this->load->library('session');


	}

	public function input_biodata()
	{
		$this->load->view("input_biodata");

	}

	public function simpan_biodata()
	{

		$data = array(
			'nama' => $this->input->get('nama'),
			'alamat' => $this->input->get('alamat'),
			'pekerjaan' => $this->input->get('pekerjaan')

		);

		$id = $this->Model_template->simpan("biodata_user", $data);
		$this->session->set_userdata('id_biodata', $id);
		redirect('Konsultasi/index');
	}

	public function index()
	{
		$idBiodata = $this->session->userdata('id_biodata');

		if (!$this->input->post('gejala')) {
			$data["idBiodata"] = $idBiodata;
			$data['contentuser'] = 'user/diagnosa'; //nama file yang akan jadi kontent di template
			$data['listKelompok'] = $this->Model_konsultasi->get_gejala();
			$data['opr'] = $this->Model_konsultasi->get_gejala()->result();
			$data['pageContent'] = $this->load->view('konsultasi', $data, TRUE);
			$this->load->view('template_user/layout', $data);
		} else {

			$data["contentuser"] = "user/hasil_diagnosa";


			$gejala = implode(",", $this->input->post("gejala"));
			$data["gejala"]=$gejala = implode(",", $this->input->post("gejala"));
			$data["cbr"] = $this->Model_konsultasi->getAllBobot($gejala);
			$hasilcbr = $data['cbr'][1][$data["cbr"][2][0]];
			$kode_cbr = $data['cbr'][0][$data["cbr"][2][0]];
			$data["id_user"] = $this->Model_template->getNamaBiodata($idBiodata)[0]["id_user"];
			$id_user = $data["id_user"] = $this->Model_template->getNamaBiodata($idBiodata)[0]["id_user"];
			$data["nama"] = $this->Model_template->getNamaBiodata($idBiodata)[0]["nama"];
			$data["alamat"] = $this->Model_template->getNamaBiodata($idBiodata)[0]["alamat"];
			$data["pekerjaan"] = $this->Model_template->getNamaBiodata($idBiodata)[0]["pekerjaan"];
			$data["listGejala"] = $this->Model_konsultasi->get_list_by_id($gejala);
			//hitung
			$listPenyakit = $this->Model_konsultasi->get_by_gejala($gejala);
			$penyakit = array();
			$i = 0;
			foreach ($listPenyakit->result() as $value) {
				$listGejala = $this->Model_konsultasi->get_gejala_by_penyakit($value->penyakit_id, $gejala);
				$combineCFmb=0;
				$combineCFmd=0;
				$CFBefore=0;
				$j=0;
				foreach($listGejala->result() as $value2){
					$j++;
					if($j==1){
						$combineCFmb=$value2->mb;
						$combineCFmd=$value2->md;}
					else{
					$combineCFmb =$combineCFmb + ($value2->mb * (1 - $combineCFmb));
					$combineCFmd =$combineCFmd + ($value2->md * (1 - $combineCFmd));
}
					$combinehasil = $combineCFmb-$combineCFmd; 
				}
				if ($combinehasil) {
					// sebelah kanan itu cuma inisiasi  kiri value tabel penyakit 
					$penyakit[$i] = array('kd_hmp' => $value->kd_hmp,
						'nama_hmp' => $value->nama_hmp,
						'cf' => $combinehasil,
						'deskripsi' => $value->deskripsi);
					// 'user_id' =>$user_login);
					// $this->db->insert('hasil_diagnosa', $penyakit[$i]);
					$i++;
				}

// var_dump($combineCFmb);
// var_dump($combineCFmd);
			}

			function cmp($a, $b)
			{
				return ($a["cf"] > $b["cf"]) ? -1 : 1;
			}

			usort($penyakit, "cmp");
			$data["listPenyakit"] = $penyakit;
			$data_hasil = array(
				// sebelah kanan itu tabel diagnosa dan kiri penyakit 
				'kode_cf' => $penyakit[0]['kd_hmp'],
				'kode_cbr' => $kode_cbr,
				'cf' => $penyakit[0]['cf'],
				'gejala_input' => $gejala,
				'id_user' =>$id_user,
				'cbr' =>$hasilcbr,
			);
			$this->db->insert('hasil_diagnosa', $data_hasil);


	$data['tes'] =  $sql = $this->db->query( "select distinct gejala_input, p.gejala_id from hasil_diagnosa gp inner join basis_pengetahuan p  where gejala_input in (".$gejala.") order by penyakit_id,gejala_id")->result_array();
			$data['pageTitle'] = 'Dashboard';
			$data['opr'] = $this->Model_konsultasi->get_gejala()->result();
		 $data['edit'] = $this->Model_konsultasi->get_solusi();
			$data['pageContent'] = $this->load->view('hasil_diagnosa', $data, TRUE);
			$this->load->view('template_user/layout', $data);
		}


	}
}
