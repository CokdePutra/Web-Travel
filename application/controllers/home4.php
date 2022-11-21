<?php 

class home4 extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('travel/home4');
        $this->load->view('templates/footer');
    }
}