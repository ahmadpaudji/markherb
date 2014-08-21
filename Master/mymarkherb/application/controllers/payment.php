<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('component_m');
	}

	public function index()
	{
		$head['page'] = 'payment';
		$this->component_m->bagian = "payment";
		$isi = $this->component_m->getHalaman();
		$body['isi'] = $isi;
		$this->load->view('FrontEnd/head',$head);
		$this->load->view('FrontEnd/payment',$body);
		$this->load->view('FrontEnd/foot');
	}

}

/* End of file payment.php */
/* Location: ./application/controllers/payment.php */