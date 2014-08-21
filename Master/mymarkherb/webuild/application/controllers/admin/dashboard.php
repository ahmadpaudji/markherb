<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends Admin_Controller {

	public function index()
	{
		$side['pages'] = 'dashboard';
		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/dashboard/dashboard');
		$this->load->view('BackEnd/foot');
		
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/admin/dashboard.php */