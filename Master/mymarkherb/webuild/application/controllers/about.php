<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('component_m');
	}

	public function index()
	{
		$head['page']  = 'about';
		$this->component_m->bagian = "profile";

		$body['isi'] = $this->component_m->getHalaman();
		//var_dump($body['isi']);
		$this->load->view('FrontEnd/head',$head);
		$this->load->view('FrontEnd/about',$body);
		$this->load->view('FrontEnd/foot');
	}

}

/* End of file about.php */
/* Location: ./application/controllers/about.php */