<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Controller extends MY_Controller {

	
	
	public function __construct()
	{
		parent::__construct();
		//var_dump($this->session->userdata());
		if($this->session->userdata('status_user') == 'COMPANY'){
			redirect('company/');
		}
		if($this->session->userdata('status_user') == 'ADMIN'){
			redirect('admin/');
		}

	}

}

/* End of file User_Controller.php */
/* Location: ./application/libraries/User_Controller.php */