<section class="content">
  <div class="row">
    <div class="col-xs-128">

      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">View All Data</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
<form action="" class="filterForm form-horizontal" method="post">
        <div class="box-body">
          <div class="form-group">
            <label class="col-sm-2 control-label">Trial Code</label>
            <div class="col-sm-2">
              <select class="form-control" name="trial_code" id="trial_code">
                <option value="">All</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Select Time Squence</label>
            <div class="col-sm-2">

              <select class="form-control" name="squence" id="squence">
                <option value="">All</option>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label">Select Replicate</label>
            <div class="col-sm-2">
              <select class="form-control" name="replicate" id="replicate">
                <option value="">All</option>
              </select>

            </div>
          </div>

          <div class="form-group">
            <label for="LastName" class="col-sm-2 control-label"></label>
            <div class="col-sm-2">
              <button type="button" onclick="processFilter()" class="btn btn-primary">Filter</button>
              <button type="button" id="btn-reset" onclick="resetFilter()" class="btn btn-default">Reset</button>
            </div>
          </div>


          <!-- /.box-header -->
          <div class="table-responsive">
            <table id="table-viewdata"
              class="table table-striped table-bordered table-hover table-full-width dataTable w-100 dt-responsive nowrap"
              cellspacing="0" width="100%">

              <thead>
                <tr>
                  <th width="3%">No</th>
                  <th width="8%">Trial Code</th>
                  <th width="29%">Title</th>
                  <th width="11%">Location</th>
                  <th width="5%">Block</th>
                  <th width="6%">Palm Age</th>
                  <th width="6%">Start</th>
                  <th width="6%">Finish</th>
                  <th width="6%">Installation Date</th>
                  <th width="6%">Treatment Organic Material</th>
                  <th width="6%">Treatment Rate</th>
                  <th width="6%">Treatment Frequency</th>
                  <th width="6%">Treatment Slopes</th>
                  <th width="6%">Treatment Management Practices</th>
                  <th width="6%">Treatment Direction</th>
                  <th width="6%">Treatment Distance</th>
                  <th width="6%">Treatment Position</th>
                  <th width="6%">Treatment N</th>
                  <th width="6%">Treatment P</th>
                  <th width="6%">Treatment K</th>
                  <th width="6%">Treatment Mg</th>
                  <th width="6%">Treatment GPS</th>

                  <th width="5%">Time Squence</th>
                  <th width="5%">Days After Aplication</th>
                  <th width="6%">Replicate</th>
                  <th width="5%">Degree</th>
                  <th width="5%">Palm Number</th>
                  <th width="5%">Habitat Type</th>
                  <th width="5%">Bait ID</th>
                  <th width="5%">Hole</th>
                  <th width="6%">Bait Score</th>
                  <th width="6%">Soil Humidity</th>
                  <th width="6%">Temperature</th>
                  <th width="6%">Rainfall During Installation</th>
                  <th width="6%">Rainfall 3 Days Before Installation</th>
                  <th width="6%">Rainfall 6 Days Before Installation</th>
                  <th width="5%">Porosity</th>
                  <th width="5%">Agregate Stability</th>
                  <th width="5%">Field Capacity</th>
                  <th width="5%">Wilting Point</th>

                  <th width="5%">pH_0-5</th>
                  <th width="5%">C-Org_0-5</th>
                  <th width="5%">N-Total_0-5</th>
                  <th width="5%">C/N_0-5</th>
                  <th width="5%">P total_0-5</th>
                  <th width="5%">K total_0-5</th>
                  <th width="5%">KTK_0-5</th>
                  <th width="5%">Mg_0-5</th>
                  <th width="5%">Ca_0-5</th>
                  <th width="5%">P Bray_0-5</th>
                  <th width="5%">K_0-5</th>
                  <th width="5%">Na_0-5</th>
                  <th width="5%">H-Tkr_0-5</th>
                  <th width="5%">Al-Tkr_0-5</th>
                  <th width="5%">pH_5-10</th>
                  <th width="5%">C-Org_5-10</th>
                  <th width="5%">N-Total_5-10</th>
                  <th width="5%">C/N_5-10</th>
                  <th width="5%">P total_5-10</th>
                  <th width="5%">K total_5-10</th>
                  <th width="5%">KTK_5-10</th>
                  <th width="5%">Mg_5-10</th>
                  <th width="5%">Ca_0-10</th>
                  <th width="5%">P Bray_0-10</th>
                  <th width="5%">K_0-10</th>
                  <th width="5%">Na_0-10</th>
                  <th width="5%">H-Tkr_0-10</th>
                  <th width="5%">Al-Tkr_0-10</th>

                </tr>
              </thead>




            </table>




          </div>
          <!-- /.box-body -->
        </div>
        </form>
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
    makeFilter();
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

  function showData(data) {
    table = $('#table-viewdata').DataTable({

      "processing": true,
      "serverSide": true,
      "destroy": true,
      "order": [],

      "ajax": {
        "url": "<?=base_url();?>viewdata/getViewdata",
        "type": "POST",
        "data":data
      },
      "aoColumnDefs": [{
        "aTargets": [8],

      }],
    });
  }

  function makeFilter() {
    $.ajax({
      type: "POST",
      url: url + "viewdata/filterSelect",
      data: "data",
      dataType: "JSON",
      success: function (response) {
        let trial_code = ""
        response.trial_code.forEach(element => {
          trial_code += `<option value="` + element.trial_code + `">` + element.trial_code + `</option>`;
        });
        $("#trial_code").html(` <option value="">All</option>` + trial_code);
        // 
        let squence = "";
        response.squence.forEach(element => {
          squence += `<option value="` + element.time_squence + `">` + element.time_squence + `</option>`;
        });
        $("#squence").html(` <option value="">All</option>` + squence);
        // 
        let replicate = "";
        response.replicate.forEach(element => {
          replicate += `<option value="` + element.replicate + `">` + element.replicate + `</option>`;
        });
        $("#replicate").html(` <option value="">All</option>` + replicate);
      }
    });
  }
  function processFilter() { 
    let data={
      trial_code:$("#trial_code").children("option:selected").val(),
      squence:$("#squence").children("option:selected").val(),
      replicate:$("#replicate").children("option:selected").val(),
    }
    showData(data)
    // console.log('hi');
   }
   function resetFilter() { 
     makeFilter();
    }
</script>