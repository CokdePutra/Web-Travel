<?php 

class addlisting extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/addlisting');
        $this->load->view('templates/footer');
    }
}