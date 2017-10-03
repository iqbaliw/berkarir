<div class="row">
	<div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
            	<h3 class="box-title">
            	<span class="label bg-green">KRKWEB00000023</span>
            	<span class="label bg-yellow">240 soal</span>
            	<span class="label bg-red">06:59 / 25:00</span>
            	</h3>
            </div>

            <div class="box-body">
            <?php
            if($this->uri->segment(3) == 'Personality-HC'){
            	$this->load->view('test_personality');
            }elseif($this->uri->segment(3) == 'H-HC'){
            	$this->load->view('test_hhc');
            }elseif($this->uri->segment(3) == 'CFIT-HC'){
            	$this->load->view('test_cfithc');
            }
            ?>
            </div>
        </div>
    </div>
</div>

<ul class="pagination">
  <li class="disabled"><a href="#">&laquo;</a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>