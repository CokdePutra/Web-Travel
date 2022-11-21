<?php 

class singlepost extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/singlepost');
        $this->load->view('templates/footer');
    }
}