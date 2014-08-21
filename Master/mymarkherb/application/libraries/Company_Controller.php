<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company_Controller extends MY_Controller {


	public $infocompany = "";
	public function __construct()
	{
		parent::__construct();
		$this->load->model('company_m');
		//$this->data['zakky'] = 'zakky';
		$this->load->library('session');
		$this->load->helper('date');



		$exception_uris = array('company/login','company/logout','company/signup');
		

		if(in_array(uri_string(),$exception_uris) == FALSE){
			//var_dump(uri_string());
			if($this->company_m->loggedin() == FALSE){
				//var_dump(uri_string());
				redirect('company/login');
			}
		}

		//var_dump(uri_string());

		$restricted_uris = array('company/signup','company/login');

		if($this->company_m->loggedin() == TRUE){

			$this->infocompany = $this->company_m->getinfo();

			if($this->session->userdata('status_user') == 'STUDENT'){
				redirect('user/');
			}
		
			if($this->session->userdata('status_user') == 'ADMIN'){
				redirect('admin/');
			}

			if(in_array(uri_string(), $restricted_uris) == TRUE){
				//var_dump(uri_string());
				redirect('company/');
			}
		}


	}
}

/* End of file Company_Controller.php */
/* Location: ./application/libraries/Company_Controller.php */