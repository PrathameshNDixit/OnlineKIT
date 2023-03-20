<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Taluka extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['data'] = $this->Commonmodel->getAll("talukamaster");
        $this->load->view('common/header_view');
        $this->load->view('Taluka/TalukaDetailsView', $data);
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
        $this->load->view('Taluka/TalukaView');
        $this->load->view('common/footer_view');
    }


    function insertTaluka()
    {
        $branch_id = $this->input->post('TalukaId');
        $gender_name = $this->input->post('TalukaName');
        $fields = array(
            'TalukaName' => $gender_name,
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        $this->Commonmodel->insertRecord("talukamaster", $fields);
    }
}