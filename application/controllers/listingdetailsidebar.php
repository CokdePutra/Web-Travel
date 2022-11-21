<?php 

class listingdetailsidebar extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/listingdetailsidebar');
        $this->load->view('templates/footer');
    }
}