<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Keranjang extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // Cek apakah terdapat session dengan nama authenticated
        if(!$this->session->userdata('pid')) // Jika tidak ada
            redirect('login'); // Redirect ke halaman login
        $this->load->model('m_home');

    }

    public function index() {
      
    
        $this->load->view('keranjang'); // Pass $data to the view
    }
    


}
