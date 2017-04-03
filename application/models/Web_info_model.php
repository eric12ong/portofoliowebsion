<?php
	class Web_info_model extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		public function get_browser_tab(){
			$query = $this->db->get("browser_tab");
			return $query->row();
		}
		public function get_header(){
			$query = $this->db->get("header");
			return $query->row();
		}
		public function get_menu(){
			$this->db->select('*');
			$this->db->from('menu');
			$this->db->order_by('menu_parent', 'asc');
			$this->db->order_by('menu_rank', 'asc');
			return $this->db->get()->result();
		}
	}
?>