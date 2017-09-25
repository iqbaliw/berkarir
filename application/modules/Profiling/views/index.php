<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Tidak Ada Jadwal Konsultasi</h3>
        </div>
        <div class="box-body">
          <div class="input-group date">
          <label>Tanggal</label>
          <input type="text" class="form-control pull-right" id="datepicker">
          </div>
          <br />
          <div class="input-group time">
          <label>Jam</label>
          <input type="text" class="form-control time">
          </div>
          <br />
          <a href="<?php echo base_url('profiling/lists');?>"><input type="button" class="btn btn-primary" value="Buat Sesi"/></a>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
$(function(){
  $('#datepicker').datepicker({
      autoclose: true
    })
  //Timepicker
    $('.time').timepicker({
      showInputs: false
    })
});
</script>