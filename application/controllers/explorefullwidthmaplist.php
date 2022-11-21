<?php 

class explorefullwidthmaplist extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/headerpages');
        $this->load->view('travel/explorefullwidthmaplist');
        $this->load->view('templates/footer');
    }
}