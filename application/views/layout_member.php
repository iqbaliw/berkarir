<?php $this->load->view('head'); ?>

<body class="hold-transition skin-purple layout-top-nav">
  <div class="wrapper">

<?php 
if ($page == 'cmp_dashboard_index' || $page == 'cmp_kandidat_index') {
  $this->load->view('nav_top_cmp');
}
else{
  $this->load->view('nav_top');
}
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
}elseif($page == 'profiling_confirm'){
  $this->load->view('profiling/confirm');
}elseif($page == 'profiling_index'){
  $this->load->view('profiling/index');
}elseif($page == 'profiling_lists'){
  $this->load->view('profiling/lists');
}elseif($page == 'profiling_session_lists'){
  $this->load->view('profiling/session_lists');
}elseif($page == 'cmp_dashboard_index'){
  $this->load->view('company/dashboard/index');
}elseif($page == 'cmp_kandidat_index'){
  $this->load->view('company/kandidat/lists');
}elseif($page == 'profiling_confirm'){
  $this->load->view('profiling/confirm');
}elseif($page == 'profiling_index'){
  $this->load->view('profiling/index');
}elseif($page == 'profiling_lists'){
  $this->load->view('profiling/lists');
}elseif($page == 'profiling_session_lists'){
  $this->load->view('profiling/session_lists');
}elseif($page == 'cmp_dashboard_index'){
  $this->load->view('company/dashboard/index');
}elseif($page == 'cmp_kandidat_index'){
  $this->load->view('company/kandidat/lists');
}elseif($page == 'assess_test_petunjuk') {
  $this->load->view('assessment/petunjuk');
}elseif($page == 'assess_mulai_test') {
  $this->load->view('assessment/test');
}elseif($page == 'cmp_profesi_index') {
  $this->load->view('company/profesi/index');
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
