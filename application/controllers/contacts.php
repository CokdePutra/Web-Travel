<?php 

class contacts extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/contacts');
        $this->load->view('templates/footer');
    }
}