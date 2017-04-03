<?php
	class Paket_bimbel_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
		}
		
		public function index(){
			$this->load->view("Header_view");
			$this->load->view("Paket_bimbel_view");
			$this->load->view("Footer_view");
		}
		public function detail_bimbel($value){
			$this->load->view("Header_view");
			if($value == 1){$this->load->view("Kursus_oop_view");}
			if($value == 2){$this->load->view("Kursus_c_view");}
			if($value == 3){$this->load->view("Kursus_web_view");}
			if($value == 4){$this->load->view("Kursus_android_view");}
			$this->load->view("Footer_view");
		}
	}
?>