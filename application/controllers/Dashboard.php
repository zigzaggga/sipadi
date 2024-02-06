<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();  
         $this->cekLogin(); 
        $this->load->model(array('Model_dashboard'));
        $this->load->helper('date_helper');
      
    }


  
    public function index()
    {                
         $data['pageTitle'] = 'Dashboard';
    
        $data['gejala'] = $this->Model_dashboard->count_gejala();
        $data['penyakit'] = $this->Model_dashboard->count_penyakit(); 
         $data['solusi'] = $this->Model_dashboard->count_solusi(); 
          $data['kasus'] = $this->Model_dashboard->count_kasus(); 
        $data['pageContent'] = $this->load->view('dashboard', $data, TRUE);
        $this->load->view('template/layout', $data);
    }
    
   
}