<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();  
        $this->load->model(array('Model_login'));
        $this->load->helper('date_helper');
      
    }
 public function index()
    {
        switch ($this->session->userdata('akses')) {
            case 'operator':
                redirect('dashboard');
                break;
            default:
               $data['pageTitle'] = 'login';
                
                $this->load->view('login/login', $data);

                break;
        }
    }
     public function login()
    {

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
                        redirect('Auth');
        } else {
           
             $login_operator = $this->Model_login->login_operator();
          
            if ($login_operator) {
                $get_operator = $this->Model_login->get_operator();
                $row_operator = $get_operator->row();

                $session_operator = array(
                    'akses' => 'operator',
                    'username' => $row_operator->username,
                    'password' => $row_operator->password,
                    'nama' => $row_operator->nama
                );

                $this->session->set_userdata($session_operator);
                redirect('dashboard');
            }

           
            if (!$login_operator) {
                $this->session->set_flashdata('msg',
                                         '
                                         <div class="alert alert-danger alert-dismissible" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times; &nbsp;</span>
                                                </button>
                                                <strong>Gagal!</strong> Usernama atau Password Salah.
                                         </div>'
                                     );
                redirect('Auth');
            }
        }
    }


    
   public function logout()
    {
        // Hapus semua data pada session
        $this->session->sess_destroy();

        // redirect ke halaman login  
        redirect('Auth/login');
    }

    
 
}