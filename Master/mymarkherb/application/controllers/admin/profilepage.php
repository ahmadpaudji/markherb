<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profilepage extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('component_m');
	}

	public $profile_rules= array(
			'profile' => array(
				'field' => 'profile',
				'label' => "Company Profile",
				'rules' => 'required|min_length[10]'
				)
		);

	public function index()
	{
		$side['pages'] = 'profilepage';
		$this->form_validation->set_rules($this->profile_rules);

		if($this->form_validation->run() == TRUE){

			$data_profile = array(
					'isi' => $this->input->post('profile')
				);
			$this->component_m->bagian = 'profile';
			if($this->component_m->changeHalaman($data_profile)){
				$body['confirm'] = TRUE;
			}
			else{
				$body['confirm'] = FALSE;
			}
		}

		$this->component_m->bagian = "profile";
		$body['isi'] = $this->component_m->getHalaman();
		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/komponen/profile',$body);
		$this->load->view('BackEnd/foot');
	}

}

/* End of file profilepage.php */
/* Location: ./application/controllers/admin/profilepage.php */