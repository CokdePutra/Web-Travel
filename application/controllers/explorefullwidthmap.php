<?php 

class explorefullwidthmap extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/explorefullwidthmap');
        $this->load->view('templates/footer');
    }
}