<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Branch extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_Branch');
    }


    public function index()
    {
        // $data['data']=$this->Branch_model->getallBranch();
        // echo "<pre>";
        // print_r($data);
        $data['data'] = $this->Model_Branch->select_all();
        $this->load->view('common/header_view');
        $this->load->view('Branch/BranchDetailsview', $data);
        $this->load->view('common/footer_view');


    }
    public function create()
    {
        $obj = '';
        $branch_id = $this->uri->segment(2);

        if (empty($branch_id)) {
            $branch_id = 0;
        }

        if ($branch_id > 0) {
            $obj = $this->Model_Branch->search($branch_id);
        }
        $data['data'] = $obj;
        $this->load->view('common/header_view');
        $this->load->view('Branch/Branch_view', $data);
        $this->load->view('common/footer_view');
    }
    function insertBranch()
    {
        $branch_id = $this->input->post('branch_id');
        $branch_name = $this->input->post('branch_name');
        $fields = array(
            'branch_name' => $branch_name,
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        $this->Commonmodel->insertRecord("branch_master", $fields);
    }


}