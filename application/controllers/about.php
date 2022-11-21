<?php 

class about extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/about');
        $this->load->view('templates/footer');
    }
}