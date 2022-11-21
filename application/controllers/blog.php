<?php 

class blog extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/blog');
        $this->load->view('templates/footer');
    }
}