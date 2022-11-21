<?php 

class explorecategory extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/explorecategory');
        $this->load->view('templates/footer');
    }
}