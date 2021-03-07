<?php

	class Tampilan_utama extends CI_Controller
	{
		
		public function __construct()
		{
		parent::__construct();
		$this->load->model('model_tampilanutama');
		}
	
		function index()
		{
			$quser = 'SELECT COUNT(*) AS hasil FROM trials';
			$data['trials'] = $this->db->query($quser)->row_array();

			$tgl_sekarang=date("Y-m-d");
			$qsiswa = 'SELECT COUNT(*) AS hasil FROM trials where finish >= date(now())  ';
			$data['aktif'] = $this->db->query($qsiswa)->row_array();

			$qguru = 'SELECT COUNT(*) AS hasil FROM trials';
			$data['trials'] = $this->db->query($qguru)->row_array();

			$qruangan = 'SELECT COUNT(*) AS hasil FROM trials';
			$data['trials'] = $this->db->query($qruangan)->row_array();
			
			
			$data['graph'] = $this->model_tampilanutama->graph();

			$this->template->load('template', 'dashboard', $data);
		}

	}

?>