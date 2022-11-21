<?php 

class exploresidebarmap extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/exploresidebarmap');
    }
}