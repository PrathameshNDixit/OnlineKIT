<?php
defined('BASEPATH') or exit('No direct script access allowed');

class City extends CI_Controller
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
        $data['data'] = $this->Commonmodel->getAll("citymaster");
        $this->load->view('common/header_view');
        $this->load->view('City/CityDetailsView',$data);
        $this->load->view('common/footer_view');
    }
    public function create()
    {
        $this->load->view('common/header_view');
        $this->load->view('City/CityView');
        $this->load->view('common/footer_view');
    }
    function insertCity()
    {
        $CityId = $this->input->post('CityId');
        $CityName = $this->input->post('CityName');
        $fields = array(
            'CityName' => $CityName,
            'created_date' => date('Y-m-d H:i:s'),
            'created_by' => 1
        );
        echo json_encode($fields);
        $this->Commonmodel->insertRecord("citymaster", $fields);
    }
}