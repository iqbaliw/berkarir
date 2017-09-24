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