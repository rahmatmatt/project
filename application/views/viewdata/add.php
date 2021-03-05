<section class="content">
  <div class="row">
    <div class="col-xs-128">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">VIEW DATA	</h3>
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

              <?php
                    echo cmb_dinamis('treatment', 'trials', 'tot_treatment'  , 'tot_treatment');				  
              ?>
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
           
        <!-- /.box-header -->
        <div class="table-responsive">
              <table id="table-viewdata" class="table table-striped table-bordered table-hover table-full-width dataTable w-100 dt-responsive nowrap" cellspacing="0" width="100%">
 
            <thead>
              <tr>
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

            


          </table>

          


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

    $('.viewdata').on('change', function () {
      console.log($('.viewdata').val());
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
        url: url + "viewdata/saveScore",
        data: data,
        dataType: "JSON",
        success: function (response) {
          console.log(response);
        }
      });
    }
  }

  function showData() {
    table = $('#table-viewdata').DataTable({

      "processing": true,
      "serverSide": true,
      "destroy": true,
      "order": [],

      "ajax": {
        "url": "<?=base_url();?>viewdata/getViewdata",
        "type": "POST"
      },	"aoColumnDefs": [{
 					"aTargets": [8],
 					 
 				}],
    });
  }
</script>