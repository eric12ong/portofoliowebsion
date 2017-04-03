<?php
	class Home_controller extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
		}
		
		public function index(){
			$this->load->model("Web_info_model");
			$data['web_info'] = $this->Web_info_model->get_browser_tab();
			$data['header'] = $this->Web_info_model->get_header();
			$data ['menu'] = $this->Web_info_model->get_menu();
			
			$this->load->view("Header_view",$data);
			$this->load->view("Home_view");
			$this->load->view("Footer_view");
		}
	}
?>