<?php 

class listingdetaillarge extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/listingdetaillarge');
        $this->load->view('templates/footer');
    }
}