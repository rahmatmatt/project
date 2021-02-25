<section class="content">
    <div class="row">

        <!-- filter -->
        <div class="col-xs-5">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Filter Data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
                <?php
                    echo form_open('trials/export_excel');
                ?>

                <table class="table table-bordered">
                    <tr>
                        <td>Trial Code</td>
                        <td>
                            <?php echo cmb_dinamis('trial_code', 'trials', 'trial_code', 'trial_code', null, "id='filter_trialcode' onChange='loadTreatment()'") 
                            ?>        
                        </td>
                    </tr>
                    <tr>
                        <td>Time Squence</td>
                        <td>    
                            <div id="ts"></div>
                        </td>
                    </tr>
                     
                </table>

                </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-xs-12">

          <div class="box box-primary">
            <div class="box-header  with-border">
              <h3 class="box-title">Input Treatment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

                <div id="dataSiswa"></div>

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

<!-- siswa_aktif() -> untuk menampilkan view peserta didik ->terletak di controller Siswa -->
<!-- combobox_treatment() -> untuk menampilkan data kelas sesuai jurusan yang dipilih -> terletak di controller Treatment -->
<!-- loadDataSiswa() -> untuk menampilkan data siswa nim dan nama sesuai kode_kelas yang dipilih di filter, lalu ditampilkan ke div id = kelas yang bedada di view/siswa_aktif -> terletak di controller Siswa -->

<script type="text/javascript">
    $(document).ready(function(){
        loadKelas();
    });
</script>

<script type="text/javascript">
    function loadTreatment()
    {
        //var tingkatan_kelas = $("#filter_tingkatan").val();
        var jurusan         = $("#filter_trialcode").val();
        
        $.ajax({
            type    : 'GET',
            url     : '<?php echo base_url() ?>treatment/combobox_treatment',
            data    : 'trial_code='+trials,
            success : function(html) {
                $("#ts").html(html);
                var kelas   = $("#cbtrials").val();
                loadTreatment(trials);
            }
        })
    }

    function loadTreatment(trials)
    {   
        var kelas   = $("#cbtrials").val();
        $.ajax({
            type    : 'GET',
            url     : '<?php echo base_url() ?>siswa/loadDataSiswa',
            data    : 'kd_kelas='+kelas,
            success : function(html) {
                $("#dataSiswa").html(html);
            }
        })
    }
</script>