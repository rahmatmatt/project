<section class="content">
    <div class="row">
        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Add User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php
                echo form_open_multipart('user/add', 'role="form" class="form-horizontal"');
            ?>

                <div class="box-body">

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Full Name</label>

                      <div class="col-sm-4">
                        <input type="text" name="nama_lengkap" class="form-control" placeholder=" Full Name" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Username</label>

                      <div class="col-sm-4">
                        <input type="text" name="username" class="form-control" placeholder=" Username" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Password</label>

                      <div class="col-sm-4">
                        <input type="password" name="password" class="form-control" placeholder=" Password" required>
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-sm-2 control-label">Level User</label>

                      <div class="col-sm-4">
                        <?php
                          echo cmb_dinamis('level_user', 'tbl_level_user', 'nama_level', 'id_level_user');
                        ?>
                      </div>
                  </div>

                   

            
                      <label class="col-sm-2 control-label"></label>

                       
                        <button type="submit" name="submit" class="btn btn-success margin  " >Save</button>
                     

                     
                        <?php
                          echo anchor('user', 'Back', array('class'=>'btn btn-success '));
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