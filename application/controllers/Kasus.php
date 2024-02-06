<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kasus extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin(); 
        $this->load->model('Model_kasus');
         $this->load->helper(array('form', 'url','date_helper'));
          $this->load->library('m_pdf');
      
    }

   
  
  
    public function index()
    {               

       if (isset($_POST['btnlogin'])){            
        $cek_kd = $this->Model_kasus->cek();
                            if ($cek_kd->num_rows() == 0) {
                                $status = "simpan";
                            }else{
                                $status = "";
                            }
                        if ($status == "simpan") {
                                    $data = array(
                                    'kode' => $this->input->post('kode'),
                                    'gejala_kasus' => $this->input->post('gejala_kasus')
                                    
                                      
                                        );
                                
                                    $this->db->insert('kasus', $data);
                            $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );

                                  redirect('kasus');
                                     
                            }else{
                                   $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Gagal !</div>');
                                    redirect('kasus');
                            }
                    }
 
        
        $data['pageTitle'] = 'Kasus';
        $data['opr'] = $this->Model_kasus->get_kasus()->result();
         $data['edit'] = $this->Model_kasus->get_edit();
        $data['pageContent'] = $this->load->view('kasus', $data, TRUE);

        $this->load->view('template/layout', $data);                
    }

public function hapus($id)
  {
    $delete = $this->Model_kasus->hapus($id);
  $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
    redirect('kasus');
  }

    public function edit()
    {
    $this->form_validation->set_rules('id', 'id', 'required');
      $edit_aktifasi = $this->Model_kasus->edit();
   $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
      redirect('kasus');
    }
    
}