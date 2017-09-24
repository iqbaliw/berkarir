<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	function __construct() {
	    parent::__construct();
	}

	function index()
  	{
    	$d['page'] = 'homepage';
    	$d['title'] = 'berkarir &minus; Siap membantu meningkatkan karir Anda!';
    	$this->load->view('homepage/index', $d);
  	}

}

/* End of file homepage.php */
/* Location: ./application/controllers/homepage.php */