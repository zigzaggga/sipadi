<?php

class Model_konsultasi extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAllBobot($gejala)
	{
		$query = $this->db->get('hama_penyakit');

		$arrayKodehmp = array();
		$arrayNilaiCBR = array();
		$arrayKeterangan = array();
		$arrayNamahmp = array();

		/*
		 * Looping seluruh penyakit untuk mendapatkan nilai cbr per pernyakit
		 */


		foreach ($query->result() as $row) {

			/*
			 * vardump $seluruhKasus =  array(9) {
			 * ["id"]=> string(1) "9" ["id_user"]=> string(1) "9" ["kode"]=> string(3) "P01" ["nama"]=> string(6) "Tungro" ["cf"]=> string(0) "" ["keterangan"]=> string(0) "" ["created_at"]=> string(19) "0000-00-00 00:00:00" ["cbr"]=> string(0) "" ["gejala_kasus"]=> string(5) "1,3,8"
			 *  } .........
			 */
			// $seluruhKasus = $this->db->query("SELECT * FROM `kasus` ")->result_array();
			$seluruhKasus = $this->db->query("SELECT * FROM `kasus` WHERE `kode` = '" . $row->kd_hmp . "'")->result_array();

		
			$arrayNilaiCbrSeluruhKasus = array();

			// Cari nilai cbr per kasus untuk seluruh kasus penyakit di looping diatas foreach ($query->result() as $row)
			$arrayENT = array();
			foreach ($seluruhKasus as $kasus) {
				/*
				 * contoh nilai vardump $seluruhGejalaInputKasus
				 * 1,2,3
				 */
				$seluruhGejalaInputKasus = $kasus["gejala_kasus"];

				
				$gejalaUser = explode(",", $gejala);
				$gejalaTemp = explode(",", $seluruhGejalaInputKasus);
				$arrayGejalaYgAdaDiKasus = array();

				foreach ($gejalaUser as $item) {
					if (in_array(strval($item), $gejalaTemp)) {
						array_push($arrayGejalaYgAdaDiKasus, $item);
					} else {

					}
				}

				// print_r($arrayGejalaYgAdaDiKasus);
//				array_push($arrayENT, $arrayGejalaYgAdaDiKasus);
				$stringGejalaYgAdaDiKasus = "";

				foreach ($arrayGejalaYgAdaDiKasus as $x) {
					$stringGejalaYgAdaDiKasus = $stringGejalaYgAdaDiKasus . $x . ",";
				}

				$stringGejalaYgAdaDiKasus = rtrim($stringGejalaYgAdaDiKasus, ", ");
				array_push($arrayENT, array($stringGejalaYgAdaDiKasus, $seluruhGejalaInputKasus));

				if($stringGejalaYgAdaDiKasus !== ""){
					$totalBobotPenyakitGejalaPilihanUser = $this->db->query("SELECT SUM(bobot) as total_bobot FROM `basis_pengetahuan` WHERE penyakit_id = " . $row->id . " AND gejala_id IN (" . $stringGejalaYgAdaDiKasus . ")")->result_array();
					$totalBobotPenyakitGejalaPilihanUser = floatval($totalBobotPenyakitGejalaPilihanUser[0]["total_bobot"]);
				} else {
					$totalBobotPenyakitGejalaPilihanUser = 0.0;
				}

				if($stringGejalaYgAdaDiKasus !== ""){
					$totalBobotGejalaPenyakitKasus = $this->db->query("SELECT SUM(bobot) as total_bobot FROM `basis_pengetahuan` WHERE penyakit_id = " . $row->id . " AND gejala_id IN (" . $seluruhGejalaInputKasus . ")")->result_array();
					$totalBobotGejalaPenyakitKasus =  floatval($totalBobotGejalaPenyakitKasus[0]["total_bobot"]);
				} else {
					$totalBobotGejalaPenyakitKasus = 0.0;
				}

				/*
				 * $nilaiCbrKasus
				 * Contoh penyakit P01, total bobot gejala penyakit kasus 37, total bobot gejala pilihan user dengan id gejala 1,2,3 = 15
				 * Rumus cbr = 15/37 = 0,405
				 */

				if ($totalBobotPenyakitGejalaPilihanUser === 0.0 || $totalBobotGejalaPenyakitKasus === 0.0) {
					$nilaiCBRKasus = 0;
				} else {
					$nilaiCBRKasus = $totalBobotPenyakitGejalaPilihanUser / $totalBobotGejalaPenyakitKasus  ;
				}

				array_push($arrayNilaiCbrSeluruhKasus, $nilaiCBRKasus);
			}

//			return var_dump($arrayENT);
			array_push($arrayKodehmp, "$row->kd_hmp");
			array_push($arrayKeterangan, $row->deskripsi);
			array_push($arrayNamahmp, "$row->kd_hmp"." - "."$row->nama_hmp");

			/*
			Jika array nilai cbr untuk seluruh kasus ($arrayNilaiCbrSeluruhKasus) tidak kosong masukan nilai cbr tertinggi diseluruh kasus, jika kosong masukan nilai 0 karena tidak ada kasus sama sekali tidak ada yg dibandingkan
			*/
			if (count($arrayNilaiCbrSeluruhKasus) > 0) {
				array_push($arrayNilaiCBR, max($arrayNilaiCbrSeluruhKasus));

			} else {
				array_push($arrayNilaiCBR, 0);
			}

		}

		return array($arrayKodehmp, $arrayNilaiCBR, array_keys($arrayNilaiCBR, max($arrayNilaiCBR)), $arrayKeterangan,$arrayNamahmp);


	}

	public function get_konsultasi()
	{

		$this->db->select('*');
		$this->db->from('hasil_diagnosa');

		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();

		// Return hasil query
		return $query;

	}

	public function hapus($id)
	{
		$this->db->delete('hasil_diagnosa', array('id' => $id));

	}


	public function get_edit()
	{
		$this->db->select('*');
		$this->db->from('hasil_diagnosa');
		$this->db->order_by('id', 'DESC');
		$query = $this->db->get();

		return $query;
	}

	public function get_solusi()
	{
		$this->db->select('*');
		$this->db->from('solusi');
		$this->db->order_by('kd_solusi', 'DESC');
		$query = $this->db->get();

		return $query;
	}

	public function get_gejala()
	{

		$this->db->select('*');
		$this->db->from('gejala');

		$this->db->order_by('kd_gejala', 'ASC');
		$query = $this->db->get();

		// Return hasil query
		return $query;

	}

	function get_list_by_id($id)
	{
		$sql = "select id,kd_gejala,nama_gejala from gejala where id in (" . $id . ")";
		return $this->db->query($sql);
	}

	function get_by_gejala($gejala)
	{
		$sql = "select distinct penyakit_id,p.kd_hmp,p.nama_hmp,p.deskripsi from basis_pengetahuan gp inner join hama_penyakit p on gp.penyakit_id=p.id where gejala_id in (" . $gejala . ") order by penyakit_id,gejala_id";
		return $this->db->query($sql);
	}

	function get_gejala_by_penyakit($id, $gejala = null)
	{
		$sql = "select basis_pengetahuan.gejala_id,mb,md from basis_pengetahuan where penyakit_id=" . $id;
		if ($gejala != null)
			$sql = $sql . " and gejala_id in (" . $gejala . ")";
		$sql = $sql . " order by gejala_id";
		return $this->db->query($sql);
	}
}
