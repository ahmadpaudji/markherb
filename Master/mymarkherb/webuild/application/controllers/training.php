<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Training extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('training_m');
	}

	public $participate_rules = array();

	public function index($id_training = NULL)
	{
		if($id_training == NULL){
			$now = date('Y-m-d H:i:s');
			$training = $this->training_m->getTraining();
			$body['training'] = $training;
			$head['page'] = "training";
			$this->load->view('FrontEnd/head',$head);
			$this->load->view('FrontEnd/training',$body);
			$this->load->view('FrontEnd/foot');	
		}
		else{
			$now = date('Y-m-d H:i:s');
			$this->_lihatDetail($id_training);
		}
		
	}

	private function _lihatDetail($id_training){

		$this->training_m->id_training = $id_training;
		$training = $this->training_m->getTraining(TRUE);

		if(count($training) <= 0){
			redirect('training');
		}
		$body['training'] = $training;
		$head['page'] = 'training';

		$this->form_validation->set_rules($this->participate_rules);

		if($this->form_validation->run() == TRUE){

			$data_participate = array(
				'email_peserta' => $this->input->post('email'),
				'nama_peserta' => $this->input->post('nama'),
				'kontak_peserta' => $this->input->post('kontak'),
				'keterangan_peserta' => $this->input->post('keterangan'),
				'status_peserta' => "Belum Konfirmasi",
				'tanggal+peserta_daftar' => $now,
				'jenis_peserta' => $this->input->post('jenis')
				);

			$this->training_m->saveParticipate($data_participate);

		}

		$this->load->view('FrontEnd/head',$head);
		$this->load->view('FrontEnd/training_detail',$body);
		$this->load->view('FrontEnd/foot');


	}

	

}

/* End of file training.php */
/* Location: ./application/controllers/training.php */