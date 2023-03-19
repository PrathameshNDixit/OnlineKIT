<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        // $this->load->model('Dashboard_model');
    }
    public function index()
    {
        // $data['data']=$this->Dashboard_model->getallDashboard();
        // echo "<pre>";
        // print_r($data);
        // $this->load->view('common/header_view');
        $this->load->view('Login/LoginPage');
        // $this->load->view('common/footer_view');
    }
}