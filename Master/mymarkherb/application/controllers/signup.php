<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->load->model('user_m');

		if($this->user_m->loggedin()){

			if($this->session->userdata('jenis') == "ADMIN"){
				redirect('admin/dashboard');
			}
			else{
				redirect('');
			}

		}
	}

	public $login_rules = array(
			'email' => array(
					'field' => 'email',
					'label' => 'Email',
					'rules' => 'required|valid_email|max_length[50]|trim|xss_clean'	
				),
			'password' => array(
					'field' => 'password',
					'label' => 'Password',
					'rules' => 'required|max_length[30]|trim|xss_clean'	
				),
		);

	public function index()
	{	
		$now = date('Y-m-d H:i:s');
		//var_dump($now);
		$head = "";
		$this->form_validation->set_rules($this->login_rules);

		if($this->form_validation->run() == TRUE){
			
			$data = array(
				'email_user' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				);
			if($this->user_m->login($data)){
				//var_dump($this->session->userdata('id_user'));
				if($this->session->userdata('jenis') == "ADMIN"){
					redirect('admin/dashboard');
				}
				elseif ($this->session->userdata('jenis') == "USER") {
					redirect('');	
				}
			}
			else{
				$head['failed'] = 'gagal';
			}

			//var_dump($this->session->userdata('id_user'));

		}
		//var_dump($head);
		$this->load->view('BackEnd/signup',$head);
	}

}

/* End of file login.php */
/* Location: ./application/controllers/admin/login.php */