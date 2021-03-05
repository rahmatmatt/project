<?php

class Viewdata extends CI_Controller
{
    private $filename = "import_data"; // nama file .csv

    public function __construct()
    {
        parent::__construct();
        //checkAksesModule();
        $this->load->library('ssp');
        $this->load->model('model_viewdata');
    }
    public function saveScore(Type $var = null)
    {
        $id = $this->input->post('id');
        $insert = [
            'score' => $this->input->post('score'),
        ];
        $this->model_viewdata->updateScore($id, $insert);
        $response = ['response' => 200, 'status' => 'success'];
        echo json_encode($response);
    }
    public function index()
    {
        $viewdata['treatment'] = $this->model_viewdata->tampil_viewdata();
        // echo json_encode($treatment);
        $this->template->load('template', 'viewdata/add', $viewdata);
    }

     
 

    public function filter(Type $var = null)
    {
        $trialCode = $this->input->post('trialcode');
        $streatment = $this->input->post('streatment');
        $stime = $this->input->post('stime');
        $sreplicate = $this->input->post('sreplicate');
        $shabitat = $this->input->post('shabitat');
        $data = [
            'trialcode' => $trialCode,
            'streatment' => $streatment,
            'stime' => $stime,
            'sreplicate' => $sreplicate,
            'shabitat' => $shabitat,
        ];
        $viewdata['treatment'] = $this->model_viewdata->filterData($data);
        $this->template->load('template', 'viewdataviewdata/add', $viewdata);

    }

   
 
    // siswa_aktif() -> untuk menampilkan view peserta didik ->terletak di controller Siswa
    // combobox_kelas() -> untuk menampilkan data kelas sesuai jurusan yang dipilih -> terletak di controller Kelas
    // loadDataSiswa() -> untuk menampilkan data siswa trial_code dan nama sesuai kode_kelas yang dipilih di filter, lalu ditampilkan ke div id = kelas yang bedada di view/siswa_aktif -> terletak di controller Siswa

    public function export_excel()
    {
        $this->load->library('CPHP_excel');
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getActiveSheet()->setCellValue('A1', 'NIM');
        $objPHPExcel->getActiveSheet()->setCellValue('B1', 'SISWA');

        $kelas = $_POST['kelas'];
        $this->db->where('kd_kelas', $kelas);
        $siswa = $this->db->get('tbl_siswa');
        $no = 2;
        foreach ($siswa->result() as $row) {
            $objPHPExcel->getActiveSheet()->setCellValue('A' . $no, $row->nim);
            $objPHPExcel->getActiveSheet()->setCellValue('B' . $no, $row->nama);
            $no++;
        }

        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $objWriter->save("data-siswa.xlsx");
        $this->load->helper('download');
        force_download('data-siswa.xlsx', null);
    }

    public function form()
    {
        $data = array(); // Buat variabel $data sebagai array

        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
            // lakukan upload file dengan memanggil function upload yang ada di SiswaModel.php
            $uploadcsv = $this->model_siswa->upload_csv($this->filename);

            if ($uploadcsv['result'] == "success") { // Jika proses upload sukses
                // Load plugin PHPExcel nya
                include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

                $csvreader = PHPExcel_IOFactory::createReader('CSV');
                $loadcsv = $csvreader->load('csv/' . $this->filename . '.csv'); // Load file yang tadi diupload ke folder csv
                $sheet = $loadcsv->getActiveSheet()->getRowIterator();

                // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam csv yang sudha di upload sebelumnya
                $data['sheet'] = $sheet;
            } else { // Jika proses upload gagal
                $data['upload_error'] = $uploadcsv['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        $this->load->view('siswa/form', $data);
    }

   
    public function getViewdata(Type $var = null)
    {
        $post = [
            'length' => $this->input->post('length'),
            'start' => $this->input->post('start'),
            'order' => $this->input->post('order'),
            'search' => $this->input->post('search'),
            'draw' => $this->input->post('draw'),
            "school_id" => $this->input->post("school_id"),
            'jenis' => $this->input->post('jenis'),
        ];
        $list = $this->model_viewdata->get_datatables($post);
        $data = [];
        $no = $post['start'];
        foreach ($list as $field) {
            $no++;
            $row = [];
           $row[] = $no;
            $row[] = $field->trial_code;
            $row[] = $field->title;
            $row[] = $field->location;
            $row[] = $field->block;
            $row[] = $field->palm_age;
			
			 $row[] = $field->start;
            $row[] = $field->finish;
            $row[] = $field->installation_date;
            $row[] = $field->treatment_om;
            $row[] = $field->treatment_rate;
            
            $row[] = $field->treatment_freq;
            $row[] = $field->treatment_slopes;
            $row[] = $field->treatment_mp;
            $row[] = $field->treatment_direction	;
            $row[] = $field->treatment_distance;
            $row[] = $field->treatment_position	;
            $row[] = $field->treatment_n;
            $row[] = $field->treatment_p;
            $row[] = $field->treatment_k;
            $row[] = $field->treatment_mg;
            $row[] = $field->gps;
           
            $row[] = $field->time_squence;
			$row[] = $field->days_after;
            $row[] = $field->replicate;
			$row[] = $field->degree;
			$row[] = $field->palm_number;
            $row[] = $field->habitat_type;
            $row[] = $field->baits;
            $row[] = $field->hole;
            $row[] = $field->score;
            $row[] = $field->soil_humidity;
            $row[] = $field->temperature;
			
            $row[] = $field->rainfall_during;
            $row[] = $field->rainfall_beforethree;
            $row[] = $field->rainfall_beforesix;
            $row[] = $field->bulk_density;
            $row[] = $field->porosity;
            $row[] = $field->agregate;
            $row[] = $field->field_capacity;
            $row[] = $field->wilting_point;
			
            $row[] = $field->ph5;
            $row[] = $field->c5;
            $row[] = $field->n_tot5;
            $row[] = $field->cn5;
            $row[] = $field->p_tot5;
            $row[] = $field->k_tot5;
            $row[] = $field->ktk5;
            $row[] = $field->mg5;
            $row[] = $field->ca5;
            $row[] = $field->pbray5;
            $row[] = $field->k5;
            $row[] = $field->na5;
			 $row[] = $field->htkr5;
            $row[] = $field->altkr5;
            $row[] = $field->ph10;
           $row[] = $field->c10;
            $row[] = $field->n_tot10;
            $row[] = $field->cn10;
            $row[] = $field->p_tot10;
            $row[] = $field->k_tot10;
            $row[] = $field->ktk10;
            $row[] = $field->mg10;
            $row[] = $field->ca10;
            $row[] = $field->pbray10;
            $row[] = $field->k10;
            $row[] = $field->na10;
			 $row[] = $field->htkr10;
            $row[] = $field->altkr10;
			 
            $data[] = $row;
        }
        $response = ['status' => 20, 'msg' => 'Data di datapatkan', 'draw' => $post['draw'], 'recordsTotal' => $this->model_viewdata->count_all($post), 'recordsFiltered' => $this->model_viewdata->count_filtered($post), 'data' => $data, "post" => $post];
        echo json_encode($response);
    }

}