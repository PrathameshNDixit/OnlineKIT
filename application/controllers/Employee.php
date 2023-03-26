<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loggedin();
    }
    private function loggedin(){
        if(!$this->session->userdata('authenticated')){
            redirect('users/login');
        }
    }
    public function index()
    {
        $data['data'] = $this->Commonmodel->getAll("employeemaster");
        $this->load->view('common/header_view');
        $this->load->view('Employee/EmployeeDetailsView', $data);
        $this->load->view('common/footer_view');
    }
    public function create()
    {
        $obj = '';
        $GenderId = $this->uri->segment(2);

        if (empty($GenderId)) {
            $GenderId = 0;
        }

        $data['data'] = $obj;
        $this->load->view('common/header_view');
        $this->load->view('Employee/EmployeeView');
        $this->load->view('common/footer_view');
    }


    function insertEmployee()
    {
        $email = $this->input->post('Email');
        $address = $this->input->post('Address');
        $PrimaryMobileNumber = $this->input->post('PrimaryMobileNumber');
        $SecondaryMobileNumber = $this->input->post('SecondaryMobileNumber');
        // $DateOfBirth = $this->input->post('DateOfBirth');
        $DateOfJoining = $this->input->post("DateOfJoining");
        $DateOfBirth = $this->input->post("DateOfBirth");
        $Photo = $this->input->post("Photo");
        $AadharNumber = $this->input->post("AadharNumber");
        $PanNumber = $this->input->post("PanNumber");
        $FkGenderId = $this->input->post("FkGenderId");
        $FkDepartMentId = $this->input->post("FkDepartMentId");
        $FkBloodGroupId = $this->input->post("FkBloodGroupId");
        $fields = array(
            'Address' => $address,
            'PrimaryMobileNumber' => $PrimaryMobileNumber,
            'SecondaryMobileNumber' => $SecondaryMobileNumber,
            'Email' => $email,
            'DateOfBirth' => $DateOfBirth,
            'DateOfJoining' => $DateOfJoining,
            'Photo' => $Photo,
            'AadharNumber' => $AadharNumber,
            'PanNumber' => $PanNumber,
            'FkGenderId' => $FkGenderId,
            'FkDepartMentId' => $FkDepartMentId,
            'FkBloodGroupId' => $FkBloodGroupId,
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        $this->Commonmodel->insertRecord("employeemaster", $fields);
    }
}