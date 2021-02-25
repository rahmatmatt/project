<html>
<head>
  <title>Form Import</title>
  
  <!-- Load File jquery.min.js yang ada difolder js -->
  <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
</head>
<body>
  <h3>Form Import</h3>
  <hr>
  
  
  <br>
  <br>
  
  <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
  <form method="post" action="<?php echo base_url("Trials/form"); ?>" enctype="multipart/form-data">
    <!-- 
    -- Buat sebuah input type file
    -- class pull-left berfungsi agar file input berada di sebelah kiri
    -->
    <input type="file" name="file">
    
    <!--
    -- Buat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
    -->
    <input type="submit" name="preview" value="Preview">
  </form>
  
  <?php
  if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
    if(isset($upload_error)){ // Jika proses upload gagal
      echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
      die; // stop skrip
    }
    
    // Buat sebuah tag form untuk proses import data ke database
    echo "<form method='post' action='".base_url('Trials/import')."'>";
    
    // Buat sebuah div untuk alert validasi kosong
    echo "<div style='color: red;' id='kosong'>
    Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum terisi semua.
    </div>";
    
    echo "<table border='1' cellpadding='8'>
    <tr>
      <th colspan='8'>Preview Data</th>
    </tr>
    <tr>
	  <th>Trial Code</th>
      <th>Treatment</th>
      <th>Time Squence</th>
	  <th>Days After</th>
      <th>Replicate</th>
      <th>Habitat Type</th>
	  <th>Baits</th>
	  <th>Hole</th>
    </tr>";
    
    $numrow = 2;
    $kosong = 0;
    
    // Lakukan perulangan dari data yang ada di csv
    // $sheet adalah variabel yang dikirim dari controller
    foreach($sheet as $row){ 
      // START -->
      // Skrip untuk mengambil value nya
      $cellIterator = $row->getCellIterator();
      $cellIterator->setIterateOnlyExistingCells(false); // Loop all cells, even if it is not set
      
      $get = array(); // Valuenya akan di simpan kedalam array,dimulai dari index ke 0
      foreach ($cellIterator as $cell) {
        array_push($get, $cell->getValue()); // Menambahkan value ke variabel array $get
      }
      // <-- END
      
      // Ambil data value yang telah di ambil dan dimasukkan ke variabel $get
      			$trial_code = $get[0]; // Ambil data NIS dari kolom A di csv
		        $treatment = $get[1]; // Ambil data threatment dari kolom B di csv
		        $time_squence = $get[2]; // Ambil data jenis kelamin dari kolom C di csv
		        $replicate = $get[3]; // Ambil data alamat dari kolom D di csv
				$days_after = $get[4]; // Ambil data alamat dari kolom D di csv				
				$habitat_type = $get[5]; // Ambil data alamat dari kolom D di csv
				$baits = $get[6]; // Ambil data alamat dari kolom D di csv
				$hole = $get[7]; // Ambil data alamat dari kolom D di csv
      
      // Cek jika semua data tidak diisi
      if(empty($trial_code) && empty($treatment) && empty($time_squence) && empty($replicate) && empty($habitat_type) && empty($baits) && empty($hole))
        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
      
      // Cek $numrow apakah lebih dari 1
      // Artinya karena baris pertama adalah threatment-threatment kolom
      // Jadi dilewat saja, tidak usah diimport
      if($numrow > 1){
        // Validasi apakah semua data telah diisi
        $trial_code_td = ( ! empty($trial_code))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
        $treatment_td = ( ! empty($treatment))? "" : " style='background: #E07171;'"; // Jika threatment kosong, beri warna merah
        $time_squence_td = ( ! empty($time_squence))? "" : " style='background: #E07171;'"; // Jika Tanggal Lahir kosong, beri warna merah
		$days_after_td = ( ! empty($days_after))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
        $replicate_td = ( ! empty($replicate))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
		
		$habitat_type_td = ( ! empty($habitat_type))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
		$baits_td = ( ! empty($baits))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
		$hole_td = ( ! empty($hole))? "" : " style='background: #E07171;'"; // Jika Tempat Lahir kosong, beri warna merah
        
        // Jika salah satu data ada yang kosong
        if(empty($trial_code) or empty($treatment) or empty($time_squence) or empty($days_after)){
          $kosong++; // Tambah 1 variabel $kosong
        }
        
        echo "<tr>";
        echo "<td".$trial_code_td.">".$trial_code."</td>";
        echo "<td".$treatment_td.">".$treatment."</td>";
		 echo "<td".$time_squence_td.">".$time_squence."</td>";
		 echo "<td".$days_after_td.">".$days_after."</td>";
        echo "<td".$replicate_td.">".$replicate."</td>";
		echo "<td".$habitat_type_td.">".$habitat_type."</td>";
		echo "<td".$baits_td.">".$baits."</td>"; 
		echo "<td".$hole_td.">".$hole."</td>";
        echo "</tr>";
      }
      
      $numrow++; // Tambah 1 setiap kali looping
    }
    
    echo "</table>";
    
    // Cek apakah variabel kosong lebih dari 1
    // Jika lebih dari 1, berarti ada data yang masih kosong
    if($kosong > 1){
    ?>  
      <script>
      $(document).ready(function(){
        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
        $("#jumlah_kosong").html('<?php echo $kosong; ?>');
        
        $("#kosong").show(); // Munculkan alert validasi kosong
      });
      </script>
    <?php
    }else{ // Jika semua data sudah diisi
      echo "<hr>";
      
      // Buat sebuah tombol untuk mengimport data ke database
      echo "<button type='submit' name='import'>Import</button> ";
      echo "<a href='".base_url("Trials")."'>Cancel</a>";
    }
    
    echo "</form>";
  }
  ?>
</body>
</html>