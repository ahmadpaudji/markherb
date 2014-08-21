<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipping extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('component_m');
	}

	public $shipping_rules= array(
			'shipping' => array(
				'field' => 'shipping',
				'label' => "Shipping Method",
				'rules' => 'required|min_length[10]'
				)
		);

	public function index()
	{
		$side['pages'] = 'shipping';
		$this->form_validation->set_rules($this->shipping_rules);
		if($this->form_validation->run() == TRUE){

			$data_shipping = array(
					'isi' => $this->input->post('shipping')
				);
			$this->component_m->bagian = 'shipping';
			if($this->component_m->changeHalaman($data_shipping)){
				$body['confirm'] = TRUE;
			}
			else{
				$body['confirm'] = FALSE;
			}
		}

		$this->component_m->bagian = "shipping";
		$body['isi'] = $this->component_m->getHalaman();
		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/komponen/shipping',$body);
		$this->load->view('BackEnd/foot');
	}

}

/* End of file shipping.php */
/* Location: ./application/controllers/admin/shipping.php */