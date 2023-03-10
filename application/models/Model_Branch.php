<?php
if( ! defined('BASEPATH')) exit('No direct script access allowed');
	//require_once(APPPATH.'/interfaces/IBase.php');	
	class Model_Branch extends CI_Model 
	{
		public function __construct()
		{
			parent::__construct();	
		} 		
		public function select_all()
		{					
			$sql=$this->db->get_where('branch_master',['is_active'=>1]);
			return $sql->result();
	
		}  

		public function insert($model)
		{
			return $this->db->insert('branch_master',$model);
			// return $sql->result();
		}

		public function update($model)
		{
			// return $sql=$this->db->where(['branch_id',$model['branch_id'],'branch_master.is_active',1])

			 return $sql=$this->db->where('branch_id',$model['branch_id'])
						  ->update('branch_master',$model);

		}

		public function search($branch_id)
		{
			$sql=$this->db->get_where('branch_master',['branch_id'=>$branch_id]);
			//print_r($sql);
			return $sql->result();

		} 	

			
	} 
	
?>