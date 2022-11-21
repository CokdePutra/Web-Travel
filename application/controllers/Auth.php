<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password1', 'Password', 'trim|required');

        if( $this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('travel/login');
            $this->load->view('templates/auth_footer');
    } else {
        //validasinya success
        $this->_login();
    }
}


    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password1');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if($user) {
            // usernya ada
            if($user['is_active'] == 1 ) {
                // cek password
                if(password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    
                    ];
                    $this->session->set_userdata($data);
                    redirect('');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password!</div>');
                    redirect('auth');
                }

            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">This email has not been activated!</div>');
                redirect('auth');

            }


        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not Registered!</div>');
            redirect('auth');
        }
    }


    public function registration()
    {

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]', [    
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'

        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if( $this->form_validation->run() == false) {
            $data['title'] = 'Form Registration';
            $this->load->view('templates/auth_header', $data); 
            $this->load->view('travel/registration');
            $this->load->view('templates/auth_footer');

        } else {
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
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Congratulation! Your Account Has Been Created. Please Login</div>');
            redirect('auth');

        }
    }

}