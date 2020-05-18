<?php
class login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
		$this->load->library('session');
		$this->load->helper('url');
	}

	function index(){
		$this->load->view('SignIn');
	}

	function verify(){
		$username=htmlspecialchars($this->input->post("username",TRUE),ENT_QUOTES);
		$password=htmlspecialchars($this->input->post("password",TRUE),ENT_QUOTES);
	
	$cek_admin=$this->login_model->admin($username,$password);
	$cek_user=$this->login_model->user($username,$password);
	if($cek_admin->num_rows() > 0){
		$data=$cek_admin->row_array();
		$this->session->set_userdata('masuk',TRUE);
		$this->session->set_userdata('akses','1');
		$this->session->set_userdata('ses_id',$data['id_admin']);
		$this->session->set_userdata('ses_nama',$data['nama_admin']);
		redirect('controller_page');
	}
	elseif($cek_user->num_rows() > 0){
		$data=$cek_user->row_array();
		$this->session->set_userdata('masuk',TRUE);
		$this->session->set_userdata('akses','2');
		$this->session->set_userdata('ses_id',$data['id_user']);
		$this->session->set_userdata('ses_nama',$data['nama_user']);
		redirect('controller_page');
	}
}

	function logout(){
		$this->session->sess_destroy();
		$url=base_url('');
		redirect($url);
	}
}
?>