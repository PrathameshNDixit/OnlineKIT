<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Login_Model');
    }
    public function signup()
    {
        $this->form_validation->set_rules('first-name', 'first name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[usermaster.Email]');
        $this->form_validation->set_rules('Password', 'password', 'required');
        $this->form_validation->set_rules('cPassword', 'Confirm Password', 'matches[Password]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if ($this->form_validation->run() == false) {
            $data['title']='Sign Up';
            $this->load->view('Users/Signup',$data);
        } else {
            $fields = array(
                'FirstName' => $this->input->post('first-name', TRUE),
                'LastName' => $this->input->post('last-name', TRUE),
                'Email' => $this->input->post('email', TRUE),
                'Password' => md5($this->input->post('Password', TRUE)),
                'Active' => true,
                'Created_at' => date('y-m-d')
            );
            $this->Login_Model->save($fields);
            redirect('users/login');
        }
    }
    public function login()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('Password', 'password', 'required');

        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if ($this->form_validation->run() == false) {
            $data['title']='Log In';
            $this->load->view('Users/Login',$data);
        } else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('Password'));

            $user = $this->Login_Model->login($email, $password);
            $this->session->set_flashdata('pass', md5($password));
            if ($user) {
                $userdata = array(
                    'id' => $user->id,
                    'FirstName' => $user->FirstName,
                    'LastName' => $user->LastName,
                    'authenticated' => TRUE
                );
                $this->session->set_userdata($userdata);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', 'invalid email or password');
                redirect('users/login');
            }
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('users/login');
    }
}