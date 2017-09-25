<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Pilih Psikolog</h3>
            </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>ID</th>
                  <th>Tersedia</th>
                  <th>Pilih</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Indra Ramadian</td>
                  <td>9901567</td>
                  <td>Ya</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value="Indra Ramadian" name="name_psi" /><input type="submit" class="btn btn-primary" value="Pilih" /></form></td>
                </tr>
                <tr>
                  <td>Aprilia Ayu</td>
                  <td>9902551</td>
                  <td>Ya</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value="Aprilia Ayu" name="name_psi" /><input type="submit" class="btn btn-primary" value="Pilih" /></form></td>
                </tr>
                <tr>
                  <td>Bambang Prakoso</td>
                  <td>9909901</td>
                  <td>Ya</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value="Bambang Prakoso" name="name_psi" /><input type="submit" class="btn btn-primary" value="Pilih" /></form></td>
                </tr>
                <tr>
                  <td>Hadi Bayu</td>
                  <td>8020195</td>
                  <td>Ya</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value=">Hadi Bayu" name="name_psi" /><input type="submit" class="btn btn-primary" value="Pilih" /></form></td>
                </tr>
                <tr>
                  <td>Rosita Octaviani</td>
                  <td>9901567</td>
                  <td>Tidak</td>
                  <td><input type="submit" class="btn btn-primary" value="Pilih" disabled="disabled" /></td>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>ID</th>
                  <th>Tersedia</th>
                  <th>Pilih</th>
                </tr>
              </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>