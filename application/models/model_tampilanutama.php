<?php

class Model_tampilanutama extends CI_Model
{

    public $table = "trials";
	
	
	 
	public function __construct()
	{
		$this->load->database();
	}
 
	public function graph()
	{
		$data = $this->db->query("SELECT * from trials");
		return $data->result();
	}

}