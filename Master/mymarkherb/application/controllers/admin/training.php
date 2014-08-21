<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Training extends Admin_Controller {


	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('training_m');
	}

	public $training_rules = array(
			'head' => array(
				'field' => 'head',
				'label' => 'Title',
				'rules' => 'required|min_length[10]|max_length[200]',
				),
			'body' => array(
				'field' => 'body',
				'label' => 'Description',
				'rules' => 'required|min_length[10]|max_length[5000]',
				),
			'durasi' => array(
				'field' => 'durasi',
				'label' => 'Training Duration',
				'rules' => 'required|is_natural',
				)
		);

	public function index($id_training = NULL)
	{

		$side['pages'] = 'training';
		$now = date('Y-m-d H:i:s');
		if($id_training != NULL){

			
			

			$this->_lihatTraining($id_training);

		}
		else{

			$this->form_validation->set_rules($this->training_rules);

			if($this->form_validation->run() == TRUE){

				$data_news = array(
					'head_training' => $this->input->post('head'),
					'body_training' => $this->input->post('body'),
					'tanggal_training' => $now,
					'durasi_training_dibuat' => $this->input->post('duration'),
					'status_training' => 'open'
					);

				if($_FILES['image']['name'] != NULL){

					if (!file_exists('./assets/training')) {
			    		mkdir('./assets/training', 0777, true);
					}

					$config['upload_path'] = './assets/training'; 
					$config['allowed_types'] = 'jpg|png';
					$config['max_size'] = 10000;
					$config['overwrite'] = TRUE;
					$this->load->library('upload', $config);

					if($this->upload->do_upload('image') == TRUE){
						$data_training = array(
							'head_training' => $this->input->post('head'),
							'body_training' => $this->input->post('body'),
							'tanggal_training_dibuat' => $now,
							'img_training' => $this->upload->data()['file_name'],
							'durasi_training' => $this->input->post('durasi'),
							'status_training' => 'open'
						);
					}

				}

				if($this->training_m->saveTraining($data_training)){
					$body['confirm'] = TRUE;
				}
				else{
					$body['confirm'] = FALSE;
				}

			}
			$body['training'] = $this->training_m->getTraining();
			$this->load->view('BackEnd/head');
			$this->load->view('BackEnd/side',$side);
			$this->load->view('BackEnd/training/training',$body);
			$this->load->view('BackEnd/foot');
			

		}



	}



	private function _lihatTraining($id_training){
		
		$this->training_m->id_training = $id_training;
		$training = $this->training_m->getTraining(TRUE);
		$side['pages'] = 'training';
		if(count($training) <= 0){
			redirect('admin/training');
		}

		$body['training'] = $training;
		$this->form_validation->set_rules($this->training_rules);

		$participant = $this->training_m->getParticipant();
		$body['participant'] = $participant;

		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/training/training_detail',$body);
		$this->load->view('BackEnd/foot');


	}

	public function edit($id_training = NULL){
		if($id_training == NULL){
			redirect('admin/training');
		}

		$this->training_m->id_training = $id_training;
		$training = $this->training_m->getTraining(TRUE);

		if(count($training) <= 0 ){
			redirect('admin/training');

			
		}
		$this->form_validation->set_rules($this->training_rules);
		if($this->form_validation->run() == TRUE){

			$data_news = array(
				'head_training' => $this->input->post('head'),
				'body_training' => $this->input->post('body'),
				'tanggal_training' => $now,
				'durasi_training_dibuat' => $this->input->post('duration'),
				'status_training' => 'open'
				);

			if($_FILES['image']['name'] != NULL){

				if (!file_exists('./assets/training')) {
			   		mkdir('./assets/training', 0777, true);
				}

				$config['upload_path'] = './assets/training'; 
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = 10000;
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);

				if($this->upload->do_upload('image') == TRUE){
					$data_training = array(
						'head_training' => $this->input->post('head'),
						'body_training' => $this->input->post('body'),
						'tanggal_training_dibuat' => $now,
						'img_training' => $this->upload->data()['file_name'],
						'durasi_training' => $this->input->post('durasi'),
						'status_training' => 'open'
					);
				}

			}
			$this->training_m->id_training = $id_training;
			if($this->training_m->saveTraining($data_training,TRUE)){
				redirect('admin/training');
			}
			else{
				redirect('admin/training');
			}
		}
		$side['pages'] = 'training';

		$body['training'] = $training;
		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/training/training_edit',$body);
		$this->load->view('BackEnd/foot');
	}

	public function delete($id_training = NULL){
		
		$this->training_m->id_training = $id_training;
		if(count($this->training_m->getTraining(TRUE)) > 0 ){
			$this->training_m->id_training = $id_training;

			if($this->training_m->deleteTraining()){
				redirect('admin/training');
			}
			else{
				redirect('admin/training');	
			}

		}
		else{
			redirect('admin/training');
		}

	}







}

/* End of file training.php */
/* Location: ./application/controllers/training.php */