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
                echo form_open_multipart('treatment/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">
				
				<div class="form-group">
                      <label class="col-sm-2 control-label">Trial Code</label>

                      <div class="col-sm-2">
                        <input type="text" value=" " readonly="true" name="trial_code" class="form-control"  >
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Title</label>

                      <div class="col-sm-2">
                        <input type="text" value=" " readonly="true" name="title" class="form-control"  >
                      </div>
                  </div>
				  
				  <div class="form-group">
                      <label class="col-sm-2 control-label">Time Squence</label>

                      <div class="col-sm-2">
                        <input type="text" value=" " readonly="true" name="time_squence" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Observation Date</label>

                      <div class="col-sm-2">
                        <input type="date" value=" "   name="time_squence" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Days After Aplication</label>

                      <div class="col-sm-2">
                        <input type="text" value=" " readonly="true" name="time_squence" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Habitat Type</label>

                      <div class="col-sm-2">
                        <input type="text" value=" " readonly="true" name="habitat_type" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Baits</label>

                      <div class="col-sm-2">
                        <input type="text" value=" " readonly="true" name="baits" class="form-control"  >
                      </div>
                  </div>
				  
				   <div class="form-group">
                      <label class="col-sm-2 control-label">Hole</label>

                      <div class="col-sm-2">
                        <input type="text" value=" " readonly="true" name="hole" class="form-control"  >
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