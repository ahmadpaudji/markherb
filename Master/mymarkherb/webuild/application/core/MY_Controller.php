<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->data['nama']="zakky";
	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/core/Admin_Controller.php */