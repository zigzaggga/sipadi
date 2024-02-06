<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_konsultasi extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin(); 
        $this->load->model('Model_konsultasi');
         $this->load->helper(array('form', 'url','date_helper'));
          $this->load->library('m_pdf');
      
    }

   
  
  
    public function index()
    {               

       
    	
        $data['pageTitle'] = 'Hasil Diagnosa';
        $data['opr'] = $this->Model_konsultasi->get_konsultasi()->result();
   
        $data['pageContent'] = $this->load->view('hasil_konsultasi', $data, TRUE);

        $this->load->view('template/layout', $data);                
    }

public function hapus($id)
  {
    $delete = $this->Model_konsultasi->hapus($id);
  $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
    redirect('hasil_konsultasi');
  }

   
}