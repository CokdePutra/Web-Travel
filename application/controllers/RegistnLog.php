<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistnLog extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    
    public function index()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('travel/login');
        $this->load->view('templates/auth_footer');
    }

    
    public function registration()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [    
            'matches' => 'Password dont match!',
]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if( $this->form_validation->run() == false) {
        $this->load->view('templates/auth_header');
        $this->load->view('travel/registration');
        $this->load->view('templates/auth_footer');

    }else {
        $data = [
            'name' => htmlspecialchars( $this->input->post('name')), 
            'email' => htmlspecialchars( $this->input->post('email')),
            'image' => 'default.jpg',
            'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            'role_id' => 2,
            'is_active' => 1,
            'date_created' => time()
            ];
            $this->db->insert('user', $data);
        }
    }
}