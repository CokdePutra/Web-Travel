<?php 

class listingdetailfullwidth extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/listingdetailfullwidth');
        $this->load->view('templates/footer');
    }
}