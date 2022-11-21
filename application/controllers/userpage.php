<?php 

class userpage extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/userpage');
        $this->load->view('templates/footer');
    }
}