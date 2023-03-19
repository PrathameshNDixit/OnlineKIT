<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Company extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['data'] = $this->Commonmodel->getAll('companymaster');
        $this->load->view('common/header_view');
        $this->load->view('Company/CompanyDetailsView', $data);
        $this->load->view('common/footer_view');
    }
    public function create()
    {
        $this->load->view('common/header_view');
        $this->load->view('Company/CompanyView');
        $this->load->view('common/footer_view');
    }
    function insertCompany()
    {
        $branch_id = $this->input->post('CompanyId');
        $CompanyName = $this->input->post('CompanyName');
        $Address = $this->input->post('Address');
        $fields = array(
            'CompanyName' => $CompanyName,
            'Address' => $Address,
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        // $this->Model_Branch->insert($fields);
        $this->Commonmodel->insertRecord("companymaster", $fields);
    }
}