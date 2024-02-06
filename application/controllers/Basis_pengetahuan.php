<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Basis_pengetahuan extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->cekLogin(); 
        $this->load->model('Model_bsp');
         $this->load->helper(array('form', 'url','date_helper'));
          $this->load->library('m_pdf');
      
    }

   
  
  
    public function index()
    {               

       if (isset($_POST['btnlogin'])){            
        $cek_kd = $this->Model_bsp->cek();
                            if ($cek_kd->num_rows() == 0) {
                                $status = "simpan";
                            }else{
                                $status = "";
                            }
                        if ($status == "simpan") {
                                    $data = array(
                                    'kd_bsp' => $this->input->post('kd_bsp'),
                                     'penyakit_id' => $this->input->post('penyakit_id'),
                                      'kd_gejala' => $this->input->post('kd_gejala'),
                                       'mb' => $this->input->post('mb'),
                                        'bobot' => $this->input->post('bobot'),
                                    'md' => $this->input->post('md')
                                        );
                                   
                                    $this->db->insert('basis_pengetahuan', $data);
                            $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );

                                  redirect('basis_pengetahuan');
                                     
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
                                    redirect('basis_pengetahuan');
                            }
                    }
 
    	
        $data['pageTitle'] = 'Basis Pengetahuan';
        $data['opr'] = $this->Model_bsp->get_bsp()->result();
         $data['edit'] = $this->Model_bsp->get_edit();
        $data['pageContent'] = $this->load->view('basis_pengetahuan/bsp', $data, TRUE);

        $this->load->view('template/layout', $data);                
    }

public function hapus($id)
  {
    $delete_mahasiswa = $this->Model_bsp->hapus($id);
  $this->session->set_flashdata('sukses',
                                         '
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );
    redirect('basis_pengetahuan');
  }


 public function edit()
    {               

       if (isset($_POST['btnlogin'])){  
         $penyakit_id = $this->input->post('kd_bsp');               
      $cek_kd = $this->Model_bsp->get_data_by_pk('basis_pengetahuan', 'kd_bsp', $kd_bsp);
                            if ($cek_kd->num_rows() == 0 ) {
                                $status = "simpan";
                            }else{
                                $status = "";
                            }
                        if ($status == "simpan") {
                                    $data = array(
                                   'kd_bsp' => $this->input->post('kd_bsp'),
                                     'penyakit_id' => $this->input->post('penyakit_id'),
                                      'gejala_id' => $this->input->post('gejala_id'),
                                       'mb' => $this->input->post('mb'),
                                        'bobot' => $this->input->post('bobot'),
                                    'md' => $this->input->post('md')
                                        );
                                      $this->Model_bsp->update_data1('basis_pengetahuan', $data);
                            $this->session->set_flashdata('sukses',
                                         '
                                         <div class="alert alert-success alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Sukses!</strong> Data berhasil disimpan.
                                         </div>'
                                     );

                                  redirect('basis_pengetahuan');
                                     
                           
                    }
 
        
             
    }

     
    
}
}