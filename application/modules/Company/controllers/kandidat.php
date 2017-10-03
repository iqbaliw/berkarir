<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kandidat extends CI_Controller {

	public function index()
	{
		$d['page'] = 'cmp_kandidat_index';
    	$d['title'] = 'Kandidat';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'company/kandidat\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

}

/* End of file Profiling.php */
/* Location: ./application/controllers/Profiling.php */