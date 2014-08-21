<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('component_m');
	}

	public $payment_rules= array(
			'payment' => array(
				'field' => 'payment',
				'label' => "payment Method",
				'rules' => 'required|min_length[10]'
				)
		);

	public function index()
	{
		$side['pages'] = 'payment';
		$this->form_validation->set_rules($this->payment_rules);
		if($this->form_validation->run() == TRUE){

			$payment = array(
					'isi' => $this->input->post('payment')
				);
			$this->component_m->bagian = 'payment';
			if($this->component_m->changeHalaman($payment)){
				$body['confirm'] = TRUE;
			}
			else{
				$body['confirm'] = FALSE;
			}
		}

		$this->component_m->bagian = "payment";
		$body['isi'] = $this->component_m->getHalaman();
		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/komponen/payment',$body);
		$this->load->view('BackEnd/foot');
	}

}

/* End of file payment.php */
/* Location: ./application/controllers/admin/payment.php */