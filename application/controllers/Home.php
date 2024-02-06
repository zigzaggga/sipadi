<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();  
        $this->load->model(array('Model_login','Model_home'));
        $this->load->helper('date_helper');
      
    }
 public function index()
    {
         $data['opr'] = $this->Model_home->get_home()->result();
         $data['edit'] = $this->Model_home->get_edit();
        $data['pageContent'] = $this->load->view('home', $data, TRUE);

        $this->load->view('home', $data);                
    }
     
 
}