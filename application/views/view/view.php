<section class="content">
    <div class="row">
            <div class="col">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title"> </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
             
				<div class="table-responsive">
              <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable w-100 dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr class="bg-success">
                        <th width="3%">No</th>
                        <th width="8%">Trial Code</th>
                        <th width="29%">Title</th>
                        <th width="11%">Location</th>
                        <th width="5%">Block</th>
                        <th width="6%">Palm Age</th>
						<th width="6%">Treatment</th>
						<th width="5%">Time Squence</th>
						<th width="6%">Replicate</th>
						<th width="5%">Habitat Type</th>
						<th width="5%">Baits</th>
						<th width="5%">Hole</th>
						<th width="6%">Score</th>
						<th width="6%">Soil Humidity</th>
						<th width="6%">Temperature</th>
						<th width="6%">Rainfall During Installation</th>
						<th width="6%">Rainfall 3 Days Before Installation</th>
						<th width="6%">Rainfall 6 Days Before Installation</th>
						<th width="5%">pH_0-5</th>
						<th width="5%">C-Org_0-5</th>
						<th width="5%">N-Total_0-5</th>
						<th width="5%">C/N_0-5</th>
						<th width="5%">P total_0-5</th>
						<th width="5%">K total_0-5</th>
						<th width="5%">KTK_0-5</th>
						<th width="5%">Mg_0-5</th>
						<th width="5%">pH_5-10</th>
						<th width="5%">C-Org_5-10</th>
						<th width="5%">N-Total_5-10</th>
						<th width="5%">C/N_5-10</th>
						<th width="5%">P total_5-10</th>
						<th width="5%">K total_5-10</th>
						<th width="5%">KTK_5-10</th>
						<th width="5%">Mg_5-10</th>

                        
                    </tr>
                </thead>
				
				<tbody>
                  <?php
                  $no = 0;
                  foreach ($trials->result_array() as $t) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $t['trial_code']; ?></td>
					  <td><?php echo $t['title']; ?></td>
					  <td><?php echo $t['location']; ?></td>
					  <td><?php echo $t['block']; ?>
					  <td><?php echo $t['palm_age']; ?></td>
					  <td><?php echo $t['tot_treatment']; ?></td>	
					  <td><?php echo $t['tot_time_squence']; ?></td>
					  <td><?php echo $t['tot_replicate']; ?></td>	
					  <td><?php echo $t['tot_habitat_type']; ?></td>
					  <td><?php echo $t['tot_baits']; ?></td>
					  <td><?php echo $t['tot_hole']; ?></td>
					  <td><?php echo $t['score']; ?></td>		
					  <td><?php echo $t['soil_humidity']; ?></td>	
					  <td><?php echo $t['temperature']; ?></td>	
					  <td><?php echo $t['rainfall_during']; ?></td>	
					  <td><?php echo $t['rainfall_three']; ?></td>	
					  <td><?php echo $t['rainfall_six']; ?></td>	
					  <td><?php echo $t['tot_baits']; ?></td>
					  <td><?php echo $t['tot_hole']; ?></td>
					  <td><?php echo $t['score']; ?></td>		
					  <td><?php echo $t['soil_humidity']; ?></td>	
					  <td><?php echo $t['temperature']; ?></td>	
					  <td><?php echo $t['rainfall_during']; ?></td>	
					  <td><?php echo $t['rainfall_three']; ?></td>	
					  <td><?php echo $t['rainfall_six']; ?></td>
					  <td><?php echo $t['tot_baits']; ?></td>
					  <td><?php echo $t['tot_hole']; ?></td>
					  <td><?php echo $t['score']; ?></td>		
					  <td><?php echo $t['soil_humidity']; ?></td>	
					  <td><?php echo $t['temperature']; ?></td>	
					  <td><?php echo $t['rainfall_during']; ?></td>	
					  <td><?php echo $t['rainfall_three']; ?></td>	
					  <td><?php echo $t['rainfall_six']; ?></td>
					  		
					   
					 
				  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<!-- punya lama -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.0/jquery.dataTables.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script> -->

<!-- baru tapi cdn -->
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"> -->

 <script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <script>
      $(function() {
        $('#exampl').DataTable()
        $('#example2').DataTable({
          'paging': true,
          'lengthChange': true,
          'searching': true,
          'ordering': true,
          'info': true,
          'autoWidth': false
        })
      })
    </script>