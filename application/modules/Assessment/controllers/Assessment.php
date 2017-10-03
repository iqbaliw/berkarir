<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Assessment extends CI_Controller {

	public function index()
	{
		$d['page'] = 'assess_index';
    	$d['title'] = 'Beranda';
    	$d['breadcrumbs'] = array();
    	$d['active'] = 'active';
    	$this->load->view('layout_member', $d);
	}

	function lengkapi()
	{
		$d['page'] = 'assess_lengkapi';
    	$d['title'] = 'Lengkapi Profil';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'assessment/lengkapi\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

	function psikotest()
	{
		$d['page'] = 'assess_psikotest';
    	$d['title'] = 'Ikuti Psikotest';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'assessment/psikotes\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

	function test_petunjuk($kodetest)
	{
		$d['page'] = 'assess_test_petunjuk';
    	$d['title0'] = 'Ikuti Psikotest';
		$d['title'] = 'Petunjuk Test &minus; '.$kodetest;
		$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'assessment/psikotes\');?>">'.$d['title0'].'</a></li>', '<li><a href="<?php echo base_url(\'assessment/mulai_test/\''.$kodetest.');?>">'.$d['title'].'</a></li>');
		$this->load->view('layout_member', $d);
	}

	function mulai_test($kodetest)
	{
		$d['page'] = 'assess_mulai_test';
    	$d['title0'] = 'Ikuti Psikotest';
		$d['title'] = 'Ikuti Psikotest &minus; '.$kodetest;
		$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'assessment/psikotes\');?>">'.$d['title0'].'</a></li>', '<li><a href="<?php echo base_url(\'assessment/mulai_test/\''.$kodetest.');?>">'.$kodetest.'</a></li>');
		$this->load->view('layout_member', $d);
	}

	function hasil()
	{
		$d['page'] = 'assess_hasil';
    	$d['title'] = 'Lihat Hasil';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'assessment/hasil\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

}

/* End of file assessment.php */
/* Location: ./application/controllers/assessment.php */