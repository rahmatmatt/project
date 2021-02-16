<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">All Trials</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <!-- button add -->
            <?php
                echo anchor('trials/add', '<button class="btn bg-gray btn-flat margin">Add Trial</button>');       
            ?>

              <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Trial Code</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Block</th>
                        <th>Palm Age</th>
						<th>Start</th>
						<th>Finish</th>
						<th>Status</th>
						<th>Last Update</th>
                        <th>Action</th>
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
					  <td><?php echo $t['start']; ?></td>	
					  <td><?php echo $t['finish']; ?></td>
					  <td><?php echo $t['finish']; ?></td>	
					  <td><?php echo $t['last_update']; ?></td>				
					   
					<td>
                    <a href="<?php echo base_url(); ?>trials/lihat/<?php echo $t['trial_code'] ?>" class="btn btn-success btn-xs" title="DETAILS" data-placement="top"><i class="fa fa-eye"></i> </a>                    
                    <a href="<?php echo base_url(); ?>trials/edit/<?php echo $t['trial_code'] ?>" class="btn btn-xs btn-primary" title="EDIT"data-placement="top"><i class="fa fa-edit"></i></a>                   
                   <a href="<?php echo base_url(); ?>trials/delete/<?php echo $t['trial_code'] ?>"class="btn btn-xs btn-danger" title="DELETE"><i class="fa fa-trash-o"></i></a>					</td>
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