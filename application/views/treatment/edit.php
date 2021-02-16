<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Trials</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('trials/edit', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Trial Code</label>

                      <div class="col-sm-2">
                        <input type="text" value="<?php echo $trials['trial_code']; ?>" readonly="true" name="trial_code" class="form-control"  >
                      </div>
                  </div>

                  <div class="form-group">
                       <label class="col-sm-2 control-label">Title</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['title']; ?>" name="title" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Location</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['location']; ?>" name="location" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Block</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['block']; ?>" name="block" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Title</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['palm_age']; ?>" name="palm_age" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Start</label>

                      <div class="col-sm-2">
                        <input type="date" value="<?php echo $trials['start']; ?>" name="start" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Finish</label>

                      <div class="col-sm-2">
                        <input type="date" value="<?php echo $trials['finish']; ?>" name="finish" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Treatment</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['treatment']; ?>" name="treatment" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Time Squence</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['time_squence']; ?>" name="time_squence" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Replicate</label>	

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['replicate']; ?>" name="replicate" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Habitat Type</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['habitat_type']; ?>" name="habitat_type" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Baits</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['baits']; ?>" name="baits" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                       <label class="col-sm-2 control-label">Hole</label>

                      <div class="col-sm-6">
                        <input type="text" value="<?php echo $trials['hole']; ?>" name="hole" class="form-control"  >
                      </div>
                  </div>

                

                  <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-1">
                        <button type="submit" name="submit" class="btn btn-primary btn-flat">Simpan</button>
                      </div>

                      <div class="col-sm-1">
                        <?php
                          echo anchor('trials', 'Kembali', array('class'=>'btn btn-danger btn-flat'));
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