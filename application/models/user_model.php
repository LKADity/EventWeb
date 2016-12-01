<?php 
/**
* 
*/
class user_model extends CI_Model {
	
	public function registration($data) {
		$condition = "username = '".$data['username']."'";
		$query = $this->db
				->select('*')
				->from('user')
				->where($condition)
				->limit(1)
				->get();

		if ($query->num_rows() == 0) {
			$this->db->insert('user', $data);
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function ticket_ordering($data,$amount)
	{
		for ($i=0; $i < $amount; $i++) { 
			$this->db->insert('ticket',$data)
		}
	}

	public function registration_performer($data){
		$condition = "name = '".$data['name']."'";
		$query = $this->db
				->select('*')
				->from('performer')
				->where($condition)
				->limit(1)
				->get();

		if ($query->num_rows() == 0) {
			$this->db->insert('performer', $data);
			return TRUE;
		}else {
			return FALSE;
		}
	}

	public function registration_stand($data){
		$condition = "name = '".$data['name']."'";
		$query = $this->db
				->select('*')
				->from('stand')
				->where($condition)
				->limit(1)
				->get();

		if ($query->num_rows() == 0) {
			$this->db->insert('stand', $data);
			return TRUE;
		}else {
			return FALSE;
		}
	}

	/*public function login($data)
	{
		$condition = "username= '".$data['username']."'";
		$query = $this->db
				->select('*')
				->from('user')
				->where($condition)
				->limit(1)
				->get();

		if () {
			# code...
		}
	}*/
}
 ?>