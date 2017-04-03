<?php
	class Pendaftaran_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->helper('form');
		}
		
		public function index(){
			$this->load->view("Header_view");
			$this->load->view("Pendaftaran_view");
			$this->load->view("Footer_view");
		}
		public function add_new_pendaftaran(){
			$this->load->model("pendaftaran_model");
			$arr_paket_bimbel = array();
			foreach($_POST['paket_bimbel'] as $row){
				array_push($arr_paket_bimbel, $row);
			}
			$arr_paket_bimbel = implode(", ",$arr_paket_bimbel);
			$data = array(
					'nama_murid' => $_POST['nama_murid'],
					'nama_sekolah' => $_POST['nama_sekolah'],
					'kelas' => $_POST['kelas'],
					'pendidikan' => $_POST['pendidikan'],
					'no_hp' => $_POST['no_hp'],
					'akun_line' => $_POST['akun_line'],
					'akun_fb' => $_POST['akun_fb'],
					'paket_bimbel' => $arr_paket_bimbel
			);
			$this->pendaftaran_model->insert($data);
			
			$this->load->view("Header_view");
			$this->load->view("Success_mendaftar_view",$data);
			$this->load->view("Footer_view");
		}
	}
?>