	<?php 

class ctrl_admin extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('m_pesanan');
        $this->load->helper('url');
        if($this->session->userdata('akses') !== '1'){
        	$url=base_url();
			redirect($url);
		}
	}
	function index(){
		$data['tbl_pesanan'] = $this->m_pesanan->tampil_data()->result();
		$this->load->view('admin/v_pesanan',$data);
	}
	function datapesanan(){
		$data['tbl_pesanan'] = $this->m_pesanan->tampil_data()->result();
		$this->load->view('admin/v_pesanan',$data);
	}
	function tambah_pesanan(){
		$this->load->view('admin/tambah_pesanan');
	}
	function hapus($id_pesanan){
		$where = array('id_pesanan' => $id_pesanan);
		$this->m_pesanan->hapus_data($where,'tbl_pesanan');
		redirect('/ctrl_admin/index');
	}
	function edit($id_pesanan){
		$where = array('id_pesanan' => $id_pesanan);
		$data['tbl_pesanan'] = $this->m_pesanan->edit_data($where,'tbl_pesanan')->result();
		$this->load->view('admin/edit_pesanan',$data);
	}
	function insert_pesanan()
  {
    $data = array(
      	'id_pesanan' => $this->input->post('id_pesanan'),
		'jenis_pakaian' => $this->input->post('jenis_pakaian'),
		'ukuran' => $this->input->post('ukuran'),
		'warna' => $this->input->post('warna'),
		'jenis_kain' => $this->input->post('jenis_kain'),
		'jumlah' => $this->input->post('jumlah'),
		'tanggal_pemesanan' => $this->input->post('tanggal_pemesanan'),

    );
    $this->m_pesanan->insert_data($data);
    redirect('ctrl_admin/datapesanan');
  }
	function update(){
		$id_pesanan = $this->input->post('id_pesanan');
		$jenis_pakaian = $this->input->post('jenis_pakaian');
		$ukuran = $this->input->post('ukuran');
		$warna = $this->input->post('warna');
		$jenis_kain = $this->input->post('jenis_kain');
		$jumlah = $this->input->post('jumlah');
		$tanggal_pemesanan = $this->input->post('tanggal_pemesanan');

		$data = array(
			'id_pesanan' => $id_pesanan,
			'jenis_pakaian' => $jenis_pakaian,
			'ukuran' => $ukuran,
			'warna' => $warna,
			'jenis_kain' => $jenis_kain,
			'jumlah' => $jumlah,
			'tanggal_pemesanan' => $tanggal_pemesanan,

		);
	 
		$where = array(
			'id_pesanan' => $id_pesanan
		);
	 
		$this->m_pesanan->update_data($where,$data,'tbl_pesanan');
		redirect('ctrl_admin/datapesanan ');
	}
}