<?php 
/**
* 
*/
class admin_model extends CI_Model {
	
	public function select_user() {
		$query = $this->db
				->select('id, username, name, gender, date, email, ktp, contact, address, poss')
				->from('user')		
				->get();

		return $query;
	}

	public function select_performer() {
		$condition = 'status <> 2';
		$query = $this->db
				->select('id, name, description, pic1, pic2, pic3, pic4, title, owner, status')
				->from('performer')
				->where($condition)
				->get();

		echo "<pre>";
		print_r($query->result());
		echo "</pre>";
		die();

		return $query;
	}

}
 ?>