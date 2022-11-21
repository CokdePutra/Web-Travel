<?php 

class signpage extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/signpage');
    }
}