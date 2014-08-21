<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_m');

		if($this->user_m->loggedin()){

			if($this->session->userdata('jenis') != "ADMIN"){
				redirect('');
			}

		}else{
			redirect('');
		}

		$this->data['zakky'] = "zakky2";
	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */