<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipping extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('component_m');
	}

	public function index()
	{	
		$head['page'] = 'shipping';
		$this->component_m->bagian = "shipping";
		$isi = $this->component_m->getHalaman();
		$body['isi'] = $isi;
		$this->load->view('FrontEnd/head',$head);
		$this->load->view('FrontEnd/shipping',$body);
		$this->load->view('FrontEnd/foot');
	}

}

/* End of file shipping.php */
/* Location: ./application/controllers/shipping.php */