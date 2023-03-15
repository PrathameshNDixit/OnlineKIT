<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bank extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('common/header_view');
        $this->load->view('Bank/BankDetailsView');
        $this->load->view('common/footer_view');
    }
    public function create()
    {
        $this->load->view('common/header_view');
        $this->load->view('Bank/BankView');
        $this->load->view('common/footer_view');
    }
    function insertBank()
    {
        $branch_id = $this->input->post('BankId');
        $bank_name = $this->input->post('BankName');
        $fields = array(
            'BankName' => $bank_name,
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        $this->Commonmodel->insertRecord("bankmaster", $fields);
    }
}