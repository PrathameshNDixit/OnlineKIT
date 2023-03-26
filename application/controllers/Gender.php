<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gender extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loggedin();
        // $this->load->model('Model_Gender');
    }
    private function loggedin(){
        if(!$this->session->userdata('authenticated')){
            redirect('users/login');
        }
    }
    public function index()
    {
        $data['data'] = $this->Commonmodel->getAll("gendermaster");
        $this->load->view('common/header_view');
        $this->load->view('Gender/GenderDetailsView', $data);
        $this->load->view('common/footer_view');
    }
    public function create()
    {
        $obj = '';
        $GenderId = $this->uri->segment(2);

        if (empty($GenderId)) {
            $GenderId = 0;
        }

        // if ($GenderId > 0) {
        //     $obj = $this->Model_Gender->search($GenderId);
        // }
        $data['data'] = $obj;
        $this->load->view('common/header_view');
        $this->load->view('Gender/GenderView');
        $this->load->view('common/footer_view');
    }


    function insertGender()
    {
        $branch_id = $this->input->post('GenderId');
        $gender_name = $this->input->post('GenderName');
        $some_name = $this->input->post('Something');
        $fields = array(
            'GenderName' => $gender_name,
            'Something' => $some_name,
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        $this->Commonmodel->insertRecord("gendermaster", $fields);
    }
}