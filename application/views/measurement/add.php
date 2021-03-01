<section class="content">
  <div class="row">
    <div class="col-xs-12">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Add Measurement	</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php
                echo form_open_multipart('measurement/filter', 'role="form" class="form-horizontal"');
            ?>

        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Trial Code</label>
            <div class="col-sm-2">
              <?php
                    echo cmb_dinamis('trialcode', 'trials', 'trial_code'  , 'trial_code');				  
              ?>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Select Treatment</label>
            <div class="col-sm-2">

              <select class="form-control" name="streatment">
                <option value="">All</option>
                <option value="Control">Control</option>
                <option value="EFB">EFB</option>
              </select>
            </div>
          </div>
		  
		   <div class="form-group">
            <label class="col-sm-2 control-label">Select Time Squence</label>
            <div class="col-sm-2">

              <select class="form-control" name="streatment">
                <option value="">All</option>
                <option value="Control">1</option>
                <option value="EFB">2</option>
				<option value="EFB">3</option>
				<option value="EFB">4</option>
				<option value="EFB">5</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="LastName" class="col-sm-2 control-label"></label>
            <div class="col-sm-2">
              <button type="submit" id="btn-filter" class="btn btn-primary">Filter</button>
              <button type="button" id="btn-reset" class="btn btn-default">Reset</button>
            </div>
          </div>
		       
          <div class="form-group">
            <label class="col-sm-2 control-label">Soil Humidity</label>
            <div class="col-sm-2">
              <input type="text" name="soil_humidity" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Temperature</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Rainfall during instalation</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>	
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Rainfall 3 days before instalation</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Rainfall 6 days before instalation</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Bulk Density</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Porosity</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Agregate stability</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Field capacity</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-sm-2 control-label">Wilting Point</label>
            <div class="col-sm-2">
              <input type="text" name="temperature" class="form-control" placeholder=" ">
            </div>
          </div>
		  
		   <div class="form-group">
                      <label class="col-sm-2 control-label"></label>

                      <div class="col-sm-4">
                        <button type="submit" name="submit" class="btn btn-primary">Save</button>
				            <?php
                          echo anchor('trials', 'Back', array('class'=>'btn btn-default'));
                        	?></div>
                      </div>
                  </div>


        </div>
       
 

 
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

<!-- Modal -->
<div class="modal fade" id="modal-alert" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" align="center" style="background-color:#66FFCC"><b
            style="font:Arial, Helvetica, sans-serif">PERINGATAN!!!</b></h5>
      </div>
      <div class="modal-body" align="center">
        Maaf, Score Yang Diinput Bukan 0 dan 1!!!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
</script>
<link rel="stylesheet"
  href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
<script type="text/javascript">
  $(document).ready(function () {
   showData();

    $('.treatment').on('change', function () {
      console.log($('.treatment').val());
    });
  });
  let url = "<?=base_url()?>";

  function saveData(id) {
    const score = $("#" + id).val();
    const data = {
      id: id,
      score: score
    }
    if (score > 1) {
      $("#modal-alert").modal("show");
    } else {
      // console.log(data);
      $.ajax({
        type: "POST",
        url: url + "treatment/saveScore",
        data: data,
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
      });
    }
  }

  function showData() {
    table = $('#table-treatment').DataTable({

      "processing": true,
      "serverSide": true,
      "destroy": true,
      "order": [],

      "ajax": {
        "url": "<?=base_url();?>treatment/getTreatment",
        "type": "POST"
      },	"aoColumnDefs": [{
 					"aTargets": [8],
 					"mRender": function (data, type, row) {
 						return `<i style="color: white;">`+row[8]+`</i><input type="number" name="score" id="`+row[9]+`"
                    onchange="saveData(`+row[9]+`)" value="`+row[8]+`" min="0" max="1">`
 					}
 				}],
    });
  }
</script>