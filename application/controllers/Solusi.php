<?php defined('BASEPATH') OR exit('No direct script access allowed');

class solusi extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin(); 
        $this->load->model('Model_solusi');
         $this->load->helper(array('form', 'url','date_helper'));
          $this->load->library('m_pdf');
      
    }

   
  
  
    public function index()
    {               

       if (isset($_POST['btnlogin'])){            
        $cek_kd = $this->Model_solusi->cek();
                            if ($cek_kd->num_rows() == 0) {
                                $status = "simpan";
                            }else{
                                $status = "";
                            }
                        if ($status == "simpan") {
                                    $data = array(
                                    'kd_solusi' => $this->input->post('kd_solusi'),
                                    'solusi' => $this->input->post('solusi')
                                    
                                      
                                        );
                                
                                    $this->db->insert('solusi', $data);
                            $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );

                                  redirect('solusi');
                                     
                            }else{
                                  $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );

                            }
                    }
 
    	
        $data['pageTitle'] = 'solusi';
        $data['opr'] = $this->Model_solusi->get_solusi()->result();
         $data['edit'] = $this->Model_solusi->get_edit();
        $data['pageContent'] = $this->load->view('solusi', $data, TRUE);

        $this->load->view('template/layout', $data);                
    }

public function hapus($id)
  {
    $delete = $this->Model_solusi->hapus($id);
  $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
    redirect('solusi');
  }

    public function edit()
    {
    $this->form_validation->set_rules('kd_solusi', 'kd_solusi', 'required');
      $edit_aktifasi = $this->Model_solusi->edit();
   $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
      redirect('solusi');
    }
    
}