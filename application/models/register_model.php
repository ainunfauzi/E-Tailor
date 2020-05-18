<?php
class register_model extends CI_Model{
	public function add($data)
	{
		$this->db->insert('tbl_user',$data);
	}
}
?>