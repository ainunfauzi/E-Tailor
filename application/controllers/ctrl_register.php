<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('register_model','tbl_user');
	}

	public function index()
	{
		$this->load->view('register');
	}
	public function insert()
	{
		$data = array(
			'nama_user'			=>$this->input->post('nama_user'),
			'tgl_lahir'			=>$this->input->post('tgl_lahir'),
			'alamat'			=>$this->input->post('alamat'),
			'email_user'		=>$this->input->post('email_user'),
			'nohp_user'			=>$this->input->post('nohp_user'),
			'username_user'		=>$this->input->post('username_user'),
			'password_user'		=>$this->input->post('password_user')
		);
		$this->tbl_user->add($data);
		redirect('login');
	}
}

?>
