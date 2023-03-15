<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
//require_once(APPPATH.'/interfaces/IBase.php');	
class Model_Gender extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function select_all()
	{
		$sql = $this->db->get_where('gendermaster', ['is_active' => 1]);
		return $sql->result();

	}

	public function insert($model)
	{
		return $this->db->insert('gendermaster', $model);
		// return $sql->result();
	}

	public function update($model)
	{
		// return $sql=$this->db->where(['branch_id',$model['branch_id'],'branch_master.is_active',1])

		return $sql = $this->db->where('GenderId', $model['GenderId'])
			->update('gendermaster', $model);
	}

	public function search($branch_id)
	{
		$sql = $this->db->get_where('gendermaster', ['GenderId' => $branch_id]);
		//print_r($sql);
		return $sql->result();

	}


}

?>