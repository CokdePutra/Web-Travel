<?php 

class home2 extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('travel/home2');
        $this->load->view('templates/footer');
    }
}