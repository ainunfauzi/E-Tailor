<?php
class login_model extends CI_Model{
	function admin($username,$password){
		$query = $this->db->query("SELECT * FROM `tbl_admin` WHERE username_admin= '$username' AND password_admin= '$password'");
		return $query;
	}
	function user($username,$password){
		$query = $this->db->query("SELECT * FROM `tbl_user` WHERE username_user='$username' AND password_user='$password'");
		return $query;
	}
}
?>