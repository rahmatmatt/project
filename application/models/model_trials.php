<?php

	class Model_trials extends CI_Model
	{

		public $table ="trials";
		
		
		function tampil_trials(){
        $hasil = $this->db->query("select * from trials order by trial_code asc");
        return $hasil;
		}


		function save()
		{
			$data = array(
				//tabel di database => name di form
				'trial_code'        	=> $this->input->post('trial_code', TRUE),
				'title'          		=> $this->input->post('title', TRUE),
				'location' 				=> $this->input->post('location', TRUE),
				'block'  				=> $this->input->post('block', TRUE),
				'palm_age'        		=> $this->input->post('palm_age', TRUE),
				'start'	    			=> $this->input->post('start', TRUE),
				'finish'	    		=> $this->input->post('finish', TRUE),
				'tot_treatment'	    	=> $this->input->post('tot_treatment', TRUE),
				'tot_time_squence'	    => $this->input->post('tot_time_squence', TRUE),
				'tot_habitat_type'	    => $this->input->post('tot_habitat_type', TRUE),
				'tot_baits'	    		=> $this->input->post('tot_baits', TRUE),
				'tot_hole'	    		=> $this->input->post('tot_hole', TRUE),				 
			);
			$this->db->insert($this->table, $data);
		}

		function update()
		{
			$data = array(
				'trial_code'        	=> $this->input->post('trial_code', TRUE),
				'title'          		=> $this->input->post('title', TRUE),
				'location' 				=> $this->input->post('location', TRUE),
				'block'  				=> $this->input->post('block', TRUE),
				'palm_age'        		=> $this->input->post('palm_age', TRUE),
				'start'	    			=> $this->input->post('start', TRUE),
				'finish'	    		=> $this->input->post('finish', TRUE),
				'tot_treatment'	    	=> $this->input->post('tot_treatment', TRUE),
				'tot_time_squence'	    => $this->input->post('tot_time_squence', TRUE),
				'tot_habitat_type'	    => $this->input->post('tot_habitat_type', TRUE),
				'tot_baits'	    		=> $this->input->post('tot_baits', TRUE),
				'tot_hole'	    		=> $this->input->post('tot_hole', TRUE),
				'last_update'    		=> $this->input->post('last_update', TRUE),			
			);
		

			$kode	= $this->input->post('trial_code');
			$this->db->where('trial_code', $kode);
			$this->db->update($this->table, $data);
		}

		// Fungsi untuk melakukan proses upload file
	  	public function upload_csv($filename){
		    $this->load->library('upload'); // Load librari upload
		    
		    $config['upload_path'] = './csv/';
		    $config['allowed_types'] = 'csv';
		    $config['max_size']  = '2048';
		    $config['overwrite'] = true;
		    $config['file_name'] = $filename;
		  
		    $this->upload->initialize($config); // Load konfigurasi uploadnya
		    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
		      // Jika berhasil :
		      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
		      return $return;
		    }else{
		      // Jika gagal :
		      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
		      return $return;
		    }
		  }
	  
		// Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
		public function insert_multiple($data){
		    $this->db->insert_batch('treatment', $data);
		}

	}
	
?>
