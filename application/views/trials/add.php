<section class="content">
    <div class="row">
        <div class="col-xs-128">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add Trial</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('trials/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Trial Code</label>

                      <div class="col-sm-2">
                        <input type="text" name="trial_code" class="form-control" placeholder="Trial Code" required>
                      </div>
                  </div>

                 
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Title</label>

                      <div class="col-sm-6">
                        <input type="text" name="title" class="form-control" placeholder="Title" required>
                      </div>
                  </div>
				  
				  
				  
				  
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Location</label>

                      <div class="col-sm-2">
                        <input type="text" name="location" class="form-control" placeholder="location" required>
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Block</label>

                      <div class="col-sm-2">
                        <input type="text" name="block" class="form-control" placeholder="Block" required>
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Installation Date</label>

                      <div class="col-sm-2">
                        <input type="date" name="installation_date" class="form-control" placeholder="Installation Date" required>
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Palm Age</label>

                      <div class="col-sm-2">
                        <input type="text" name="palm_age" class="form-control" placeholder="Palm Age" required>
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Start</label>

                      <div class="col-sm-2">
                        <input type="date" name="start" class="form-control" placeholder="Start" required>
                      </div>
                  </div>
				  
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Finish</label>

                      <div class="col-sm-2">
                        <input type="date" name="finish" class="form-control" placeholder="Finish" required>
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Treatment</label>

                      <div class="col-sm-2">
                        <input type="text" name="tot_treatment" class="form-control" placeholder="Treatment" required>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Time Squence</label>

                      <div class="col-sm-2">
                        <input type="text" name="tot_time_squence" class="form-control" placeholder="Time Squence" required>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Replicate</label>

                      <div class="col-sm-2">
                        <input type="text" name="tot_replicate" class="form-control" placeholder="Replicate" required>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Habitat Type</label>

                      <div class="col-sm-2">
                        <input type="text" name="tot_habitat_type" class="form-control" placeholder="Habitat Type" required>
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Baits</label>

                      <div class="col-sm-2">
                        <input type="text" name="tot_baits" class="form-control" placeholder="Baits" required>
                      </div>
                  </div>
				  
				  
				  
				   <input type="hidden" name="last_update" value="<?php echo date("Y-m-d"); ?>" />

                  

                 

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-success">Save</button>
                      </div>

                      
                        <?php
                          echo anchor('trials', 'Back', array('class'=>'btn btn-success'));
                        ?>
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