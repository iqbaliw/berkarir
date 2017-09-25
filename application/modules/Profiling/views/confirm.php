<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Konfirmasi</h3>
        </div>
        <div class="box-body">
          <div class="input-group date">
            <label>Tanggal</label>
            <input type="text" class="form-control pull-right" id="datepicker" name="date" readonly="readonly" value="09/30/2017">
          </div>
          <br />
          <div class="input-group time">
            <label>Jam</label>
            <input type="text" class="form-control" readonly="readonly" value="18:00">
          </div>
          <br />
          <div class="input-group psi_name">
            <label>Nama Psikolog</label>
            <input type="text" class="form-control" value="<?php echo $psi_name; ?>" readonly="readonly">
          </div>
          <br />
          <a href="#"><input type="button" class="btn btn-primary" value="Submit"/></a>
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