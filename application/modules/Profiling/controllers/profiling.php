<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profiling extends CI_Controller {

	public function index()
	{
		$d['page'] = 'profiling_index';
    	$d['title'] = 'Kosultasi';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'profiling/index\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

	function lists()
	{
		$d['page'] = 'profiling_lists';
    	$d['title'] = 'Kosultasi';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'profiling/lists\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

	function confirm()
	{
		$d['psi_name'] = $this->input->post('name_psi');
		$d['page'] = 'profiling_confirm';
    	$d['title'] = 'Kosultasi';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'profiling/confirm\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

	function session_lists()
	{
		$d['page'] = 'profiling_session_lists';
    	$d['title'] = 'Kosultasi';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'profiling/session_lists\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

}

/* End of file Profiling.php */
/* Location: ./application/controllers/Profiling.php */