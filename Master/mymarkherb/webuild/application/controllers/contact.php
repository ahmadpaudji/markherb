<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {




	public function __construct(){
		parent::__construct();

		$this->load->model('contact_us');

	}	

	public $contact_rules = array(
			'name' => array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'trim|required|min_length[8]|max_length[20]|xss_clean'
				),
			'email' => array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'trim|valid_email|required|max_length[50]|xss_clean'
				),
			'phone' => array(
				'field' => 'phone',
				'label' => 'Phone Number',
				'rules' => 'trim|is_natural|max_length[20]|xss_clean'
				),
			'msg' => array(
				'field' => 'msg',
				'label' => 'Message',
				'rules' => 'trim|required|min_length[5]|xss_clean'
				),			
		);

	public function index()
	{
		$head['page'] = "contact";

		$this->form_validation->set_rules($this->contact_rules);

		if($this->form_validation->run() == TRUe){

			$now = date('Y-m-d H:i:s');

			$data_contact_us = array(
					'nama_contact_us' => $this->input->post('name'),
					'email_contact_us' => $this->input->post('email'),
					'kontak_contact_us' => $this->input->post('phone'),
					'isi_contact_us' => $this->input->post('msg'),
					'tanggal_contact_us' => $now,
				);
			
			if($this->contact_us->addContact_us($data_contact_us)){
				
			}
		}


		$this->load->view('FrontEnd/head',$head);
		$this->load->view('FrontEnd/contact');
		$this->load->view('FrontEnd/foot');
	}

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */