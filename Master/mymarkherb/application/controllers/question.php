<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('component_m');
	}

	public function index()
	{
		$head['page'] = 'question';
		$this->component_m->bagian = "question";
		$isi = $this->component_m->getHalaman();
		$body['isi'] = $isi;
		$this->load->view('FrontEnd/head',$head);
		$this->load->view('FrontEnd/faq',$body);
		$this->load->view('FrontEnd/foot');
	}

}

/* End of file question.php */
/* Location: ./application/controllers/question.php */