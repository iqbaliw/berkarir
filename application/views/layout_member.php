<?php $this->load->view('head'); ?>

<body class="hold-transition skin-purple layout-top-nav">
  <div class="wrapper">

<?php 
$this->load->view('nav_top');
?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <div class="container">

<?php //$this->load->view('breadcrumbs'); ?>

<?php
$this->load->view('content_header');
?>
		<!-- Main content -->
    	<section class="content">

<?php
if($page == 'assess_index'){
	$this->load->view('assessment/index');
}elseif($page == 'assess_lengkapi'){
  $this->load->view('assessment/lengkapi');
}elseif($page == 'assess_psikotest'){
  $this->load->view('assessment/psikotest');
}elseif($page == 'assess_hasil'){
  $this->load->view('assessment/hasil');
}elseif($page == 'assess_test_petunjuk') {
  $this->load->view('assessment/petunjuk');
}elseif($page == 'assess_mulai_test') {
  $this->load->view('assessment/test');
}

?>
		</section>
    	<!-- /.content -->
      </div>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

<?php 
$this->load->view('footer_credit');
//$this->load->view('switcher');
$this->load->view('footer');
?>
