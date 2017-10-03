<div class="row">
	<div class="col-md-12">
        <div class="box box-success">
            <div class="box-header with-border">
            	<h3 class="box-title">
            	Kerjakan Paket Soal ini dengan cara sebagai berikut:
            	</h3>
            </div>

            <div class="box-body">
            <?php
            if($this->uri->segment(3) == 'Personality-HC'){
            	$this->load->view('petunjuk_personality');
            }elseif($this->uri->segment(3) == 'H-HC'){
            	$this->load->view('petunjuk_hhc');
            }elseif($this->uri->segment(3) == 'CFIT-HC'){
            	$this->load->view('petunjuk_cfithc');
            }
            ?>
            </div>
        </div>
    </div>
</div>