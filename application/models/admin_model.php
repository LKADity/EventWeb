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

		return $query;
	}

	public function select_stand() {
		$condition = 'status <> 2';
		$query = $this->db
				->select('id, name, description, pic1, pic2, owner, status')
				->from('stand')
				->where($condition)
				->get();

		return $query;
	}

	public function select_ticket() {
		$condition = 'status <> 2';
		$query = $this->db
				->select('id, username, amount, status')
				->from('ticket')
				->where($condition)
				->get();

		return $query;
	}

	public function acc_performer($id) {
		$data['status'] = '1';
		$query = $this->db
			->where('id', $id);
			->update('performer', $data);

		return $query;
	}

	public function acc_stand($id) {
		$data['status'] = '1';
		$query = $this->db
			->where('id', $id);
			->update('stand', $data);

		return $query;
	}

	public function acc_ticket($id) {
		$data['status'] = '1';
		$query = $this->db
			->where('id', $id);
			->update('ticket', $data);

		return $query;
	}

	public function dec_performer($id) {
		$data['status'] = '2';
		$query = $this->db
			->where('id', $id);
			->update('performer', $data);

		return $query;
	}

	public function dec_stand($id) {
		$data['status'] = '1';
		$query = $this->db
			->where('id', $id);
			->update('stand', $data);

		return $query;
	}

	public function dec_ticket($id) {
		$data['status'] = '1';
		$query = $this->db
			->where('id', $id);
			->update('ticket', $data);

		return $query;
	}

	public function del_user($id) {
		$query = $this->db->delete('user', array('id' => $id));

		return $query;
	}

}
 ?>