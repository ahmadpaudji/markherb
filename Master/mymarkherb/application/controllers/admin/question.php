<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('component_m');
	}

	public $question_rules= array(
			'question' => array(
				'field' => 'question',
				'label' => "Frequently Asked Question",
				'rules' => 'required|min_length[10]'
				)
		);

	public function index()
	{
		$side['pages'] = 'question';
		$this->form_validation->set_rules($this->question_rules);
		if($this->form_validation->run() == TRUE){

			$data_question = array(
					'isi' => $this->input->post('question')
				);
			$this->component_m->bagian = 'question';
			if($this->component_m->changeHalaman($data_question)){
				$body['confirm'] = TRUE;
			}
			else{
				$body['confirm'] = FALSE;
			}
		}

		$this->component_m->bagian = "question";
		$body['isi'] = $this->component_m->getHalaman();
		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/komponen/question',$body);
		$this->load->view('BackEnd/foot');
	}

}

/* End of file question.php */
/* Location: ./application/controllers/admin/question.php */