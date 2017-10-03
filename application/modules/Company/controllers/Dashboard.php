<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$d['page'] = 'cmp_dashboard_index';
    	$d['title'] = 'Beranda';
    	$d['breadcrumbs'] = array();
    	$d['active'] = 'active';
    	$this->load->view('layout_member', $d);
	}

}

/* End of file assessment.php */
/* Location: ./application/controllers/assessment.php */