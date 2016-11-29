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
}
 ?>