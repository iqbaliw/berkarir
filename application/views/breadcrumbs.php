<ol class="breadcrumb">
	<li><a href="<?php echo base_url('assessment/index') ;?>">Beranda</a></li>
    <?php
    foreach($breadcrumbs as $b){
    	echo $b;
    }
    ?>
</ol>