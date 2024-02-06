<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hama_penyakit extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin(); 
        $this->load->model('Model_hmp');
         $this->load->helper(array('form', 'url','date_helper'));
          $this->load->library('m_pdf');
      
    }

   
  
  
    public function index()
    {               

       if (isset($_POST['btnlogin'])){            
        $cek_kd = $this->Model_hmp->cek();
                            if ($cek_kd->num_rows() == 0) {
                                $status = "simpan";
                            }else{
                                $status = "";
                            }
                        if ($status == "simpan") {
                                    $data = array(
                                    'kd_hmp' => $this->input->post('kd_hmp'),
                                    'deskripsi' => $this->input->post('deskripsi'),
                                      'jenis' => $this->input->post('jenis'),
                                    'nama_hmp' => $this->input->post('nama_hmp')
                                        );
                                      if (!empty($_FILES['gambar']['name'])) {
                                    $upload = $this->gambar();
                                     $data['gambar'] = $upload;
                                }
                                    $this->db->insert('hama_penyakit', $data);
                            $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );

                                  redirect('hama_penyakit');
                                     
                            }else{
                                  $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Gagal!</strong> Data Tidak berhasil disimpan.
                                         </div>'
                                     );
                                    redirect('hama_penyakit');
                            }
                    }
 
    	
        $data['pageTitle'] = 'Hama dan Penyakit';
        $data['opr'] = $this->Model_hmp->get_hmp()->result();
         $data['edit'] = $this->Model_hmp->get_edit();
        $data['pageContent'] = $this->load->view('hmp', $data, TRUE);

        $this->load->view('template/layout', $data);                
    }

public function hapus($id)
  {
    $delete_mahasiswa = $this->Model_hmp->hapus($id);
  $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
    redirect('hama_penyakit');
  }


 public function edit()
    {               

       if (isset($_POST['btnlogin'])){  
         $kd_hmp = $this->input->post('kd_hmp');               
      $cek_kd = $this->Model_hmp->get_data_by_pk('hama_penyakit', 'kd_hmp', $kd_hmp);
                            if ($cek_kd->num_rows() == 1 ) {
                                $status = "simpan";
                            }else{
                                $status = "";
                            }
                        if ($status == "simpan") {
                                    $data = array(
                                    'kd_hmp' => $this->input->post('kd_hmp'),
                                    'deskripsi' => $this->input->post('deskripsi'),
                                      'jenis' => $this->input->post('jenis'),
                                    'nama_hmp' => $this->input->post('nama_hmp')
                                        );
                                      if (!empty($_FILES['gambar']['name'])) {
                                    $upload = $this->gambar();
                                     $data['gambar'] = $upload;
                                }
                                      $this->Model_hmp->update_data1('hama_penyakit', $data);
                            $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );

                                  redirect('hama_penyakit');
                                     
                            }else{
                                     $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Gagal!</strong> Data tidak berhasil disimpan.
                                         </div>'
                                     );
                                    redirect('hama_penyakit');
                            }
                    }
 
        
             
    }

      private function gambar()
    {
        $config['upload_path']      = 'gambar/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['max_size']             = 500000;
        $config['max_widht']            = 100000;
        $config['max_height']       = 10000;
        $config['file_name']            = round(microtime(true)*10000);
 
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
          $this->session->set_flashdata('gagal',
                                         '
                                         <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Gagal!</strong> Kapasitas Dokumen Tidak sesuai.
                                         </div>'
                                     );
            redirect('hama_penyakit');
        }
         
        return $this->upload->data('file_name');
    }
    
}