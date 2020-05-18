<?php
class controller_page extends CI_Controller{
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		//$this->load->model('mdl_crud_admin','mdl_crud_siswa');
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
	}
  	function index(){
    	$this->load->view('v_dashboard');
  	}

  	function chat(){
    	// function ini hanya boleh diakses oleh admin dan mahasiswa
    	if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      	$this->load->view('v_chat');
    	}else{
      	echo "Anda tidak berhak mengakses halaman ini";
    	}
  	}
}

?>