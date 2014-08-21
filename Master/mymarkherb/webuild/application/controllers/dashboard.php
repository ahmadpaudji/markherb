<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('component_m');
	}

	public function index()
	{
		$body['slides'] = $this->component_m->getSlide();
		$head['page'] = "home";
		$this->load->view('FrontEnd/head',$head);
		$this->load->view('FrontEnd/dashboard',$body);
		$this->load->view('FrontEnd/foot');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */