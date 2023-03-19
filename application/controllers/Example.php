<?php
    class Example extends CI_Controller{
        public function index(){
            // $this->load->view('common/header_view');
            $this->load->view("Login/LoginPage");
            // $this->load->view('common/footer_view');
        }
    }
?>