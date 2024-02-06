<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin(); 
        $this->load->model('Model_gejala');
         $this->load->helper(array('form', 'url','date_helper'));
          $this->load->library('m_pdf');
      
    }

   
  
  
    public function index()
    {               

       if (isset($_POST['btnlogin'])){            
        $cek_kd = $this->Model_gejala->cek();
                            if ($cek_kd->num_rows() == 0) {
                                $status = "simpan";
                            }else{
                                $status = "";
                            }
                        if ($status == "simpan") {
                                    $data = array(
                                    'kd_gejala' => $this->input->post('kd_gejala'),
                                    'nama_gejala' => $this->input->post('nama_gejala')
                                    
                                      
                                        );
                                
                                    $this->db->insert('gejala', $data);
                            $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );

                                  redirect('gejala');
                                     
                            }else{
                                   $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal !</div>');
                                    redirect('gejala');
                            }
                    }
 
    	
        $data['pageTitle'] = 'Gejala';
        $data['opr'] = $this->Model_gejala->get_gejala()->result();
         $data['edit'] = $this->Model_gejala->get_edit();
        $data['pageContent'] = $this->load->view('gejala', $data, TRUE);

        $this->load->view('template/layout', $data);                
    }

public function hapus($id)
  {
    $delete = $this->Model_gejala->hapus($id);
  $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
    redirect('gejala');
  }

    public function edit()
    {
    $this->form_validation->set_rules('kode', 'kode', 'required');
      $edit_aktifasi = $this->Model_gejala->edit();
   $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
      redirect('gejala');
    }
    
}