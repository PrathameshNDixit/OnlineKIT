<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model{
    public function getEmp(){
        $query=$this->db->get('usermaster');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    public function login($email,$password){
        $this->db->where('Email',$email);
        $this->db->where('Password',md5($password));
        $this->db->where('Active',1);

        $query=$this->db->get('usermaster');
        if($query->num_rows()==1){
            return $query->row();
        }
        else {
            return false;
        }
    }
    public function save($data){
        $this->db->insert('usermaster',$data);
        return $this->db->insert_id();
    }
}