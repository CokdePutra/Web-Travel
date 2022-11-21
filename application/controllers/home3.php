<?php 

class home3 extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('travel/home3');
        $this->load->view('templates/footer');
    }
}