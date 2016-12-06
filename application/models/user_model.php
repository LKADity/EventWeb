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

	public function ticket_ordering($data)
	{
		$condition = "username = '".$data['username']."'";
		$query = $this->db
				->select('*')
				->from('ticketing')
				->where($condition)
				->limit(1)
				->get();

		if ($query->num_rows() == 0) {
			$this->db->insert('ticketing', $data);
			return TRUE;
		}else {
			return FALSE;
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

	public function login($data) {
		$condition = "username= '".$data['username']."'";
		$query = $this->db
				->select('*')
				->from('user')
				->where($condition)
				->limit(1)
				->get();

		if ($query->num_rows() == 1) {
			$password = $data['password'];
			if (password_verify($password, $query->row('password'))) {
				$session_data['role'] = $query->row('role');
				$this->session->set_userdata('logged_in', $session_data);

				return TRUE;
			}else {
				return FALSE;
			}
		}else {
			return FALSE;
		}
	}

}
 ?>