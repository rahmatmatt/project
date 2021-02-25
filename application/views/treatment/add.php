<section class="content">
    <div class="row">
        <div class="col-xs-128">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Treatment</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('treatment/filter', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">
				
				 <div class="form-group">
                      <label class="col-sm-2 control-label">Trial Code</label>

                      <div class="col-sm-3">
                        <?php
                          echo cmb_dinamis('trialcode', 'trials', 'trial_code'  , 'trial_code');				  
                        ?>
                      </div>
                  </div>
				  
				<div class="form-group">
                      <label class="col-sm-2 control-label">Select Treatment</label>
					  <div class="col-sm-2">

						<select class="form-control treatment" name="streatment">
							<option value="">All</option>
							<option value="Control">Control</option>
							<option value="EFB">EFB</option>
						</select>
					</div>
				</div>
				 
				<div class="form-group">
                      <label class="col-sm-2 control-label">Select Time Squence</label>
					  <div class="col-sm-2">

						<select class="form-control treatment" name="">
							<option>All</option>
							<option value="Control">Control</option>
							<option value="EFB">EFB</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
                      <label class="col-sm-2 control-label">Select Replicate</label>
					  <div class="col-sm-2">

						<select class="form-control treatment" name="">
							<option>All</option>
							<option value="Control">Control</option>
							<option value="EFB">EFB</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
                      <label class="col-sm-2 control-label">Select Habitat Type</label>
					  <div class="col-sm-2">

						<select class="form-control treatment" name="">
							<option>All</option>
							<option value="Control">Control</option>
							<option value="EFB">EFB</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
                        <label for="LastName" class="col-sm-2 control-label"></label>
                        <div class="col-sm-4">
                            <button type="submit" id="btn-filter" class="btn btn-primary">Filter</button>
                            <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
         
            
            </div>
            <!-- /.box-header -->
            <div class="box-body">
					   <table id="exampl" class="table table-striped table-bordered table-hover table-full-width dataTable" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="3%">No</th>
						 <th width="24%">Trial Code</th>
                        <th width="12%">Treatment</th>
                        <th width="12%">Time Squence</th>
                        <th width="11%">Replicate</th>
                        <th width="11%">Habitat Type</th>
						<th width="12%">Baits</th>
						<th width="3%">Hole</th>
						<th width="12%">Score</th>
                       
                    </tr>
                </thead>
				
				<tbody>
                  <?php
                  $no = 0;
                  foreach ($treatment->result_array() as $t) :
                    $no++;
                    
                    ?>
                    <tr>
                      <td><?php echo $no; ?></td>
					  <td><?php echo $t['trial_code']; ?></td>
                      <td><?php echo $t['treatment']; ?></td>
					  <td><?php echo $t['time_squence']; ?></td>
					  <td><?php echo $t['replicate']; ?></td>
					  <td><?php echo $t['habitat_type']; ?>
					  <td><?php echo $t['baits']; ?>
					  <td><?php echo $t['hole']; ?>
					  <td><i style="color: white;"><?=$t['score']?></i><input type="number"  name="score" id="<?=$t['id']?>" onchange="saveData(<?=$t['id']?>)" value="<?=$t['score']?>"   min="0" max="1" required></td>				   					 
				  </tr>
				  
                  <?php endforeach; ?>
				  
                </tbody>
				
			                  
              </table>

                       <div class="col-sm-12" align="right">
                        <button type="submit" name="submit" class="btn btn-success">  Save  </button>
                      </div>      


            </div>
            <!-- /.box-body -->
          </div>
                  </div>

                </div>
                <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>


<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
 <script type="text/javascript">
	$(document).ready(function() {
	    $('#exampl').DataTable();
	    
		$('.treatment').on('change', function () {
	        console.log($('.treatment').val());
	    });
	});
  let url="<?=base_url()?>";
  function saveData(id) {
    const score=$("#"+id).val();
    const data={
      id:id,
      score:score
    }
    $.ajax({
      type: "POST",
      url: url+"treatment/saveScore",
      data: data,
      dataType: "JSON",
      success: function (response) {
        console.log(response);
      }
    });
    }
</script>