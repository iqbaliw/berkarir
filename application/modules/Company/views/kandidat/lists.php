<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Jadwal Sesi Konsultasi</h3>
            </div>
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>ID</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Pekerjaan</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Iqbal Wahyudi</td>
                  <td>9901567</td>
                  <td>09/30/2017</td>
                  <td>08:00</td>
                  <td>Admin</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value="Iqbal Wahyudi" name="name_psi" /><a href="#"><input type="button"  class="btn btn-info" value="Lihat Profil"></a>&nbsp;</form></td>
                </tr>
                <tr>
                  <td>Dheny Frizky</td>
                  <td>9902551</td>
                  <td>09/30/2017</td>
                  <td>10:00</td>
                  <td>IT Support</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value="Dheny Frizky" name="name_psi" /><a href="#"><input type="button" class="btn btn-info" value="Lihat Profil"></a>&nbsp;</form></td>
                </tr>
                <tr>
                  <td>Ahmad Syaifulloh</td>
                  <td>9909901</td>
                  <td>10/01/2017</td>
                  <td>14:00</td>
                  <td>Designer</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value="Ahmad Syaifulloh" name="name_psi" /><a href="#"><input type="button" class="btn btn-info" value="Lihat Profil"></a>&nbsp;</form></td>
                </tr>
                <tr>
                  <td>Ester Maharani</td>
                  <td>8020195</td>
                  <td>09/30/2017</td>
                  <td>14:00</td>
                  <td>Programmer</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value="Ester Maharani" name="name_psi" /><a href="#"><input type="button" class="btn btn-info" value="Lihat Profil"></a>&nbsp;</form></td>
                </tr>
                <tr>
                  <td>Dedi Sudarso</td>
                  <td>9901567</td>
                  <td>09/29/2017</td>
                  <td>11:00</td>
                  <td>Akuntan</td>
                  <td><form method="post" action="<?php echo base_url('profiling/confirm');?>">
                      <input type="hidden" value="Dedi Sudarso" name="name_psi" /><a href="#"><input type="button" class="btn btn-info" value="Lihat Profil"></a>&nbsp;</form>
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th>Nama</th>
                  <th>ID</th>
                  <th>Hari</th>
                  <th>Jam</th>
                  <th>Pekerjaan</th>
                  <th>Action</th>
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