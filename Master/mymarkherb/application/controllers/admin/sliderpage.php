<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sliderpage extends Admin_Controller {

	public $add_rules = array(
			'head' => array(
				'field' => 'head',
				'label' => 'Tittle',
				'rules' => 'required|min_length[5]|max_length[20]|trim|xss_clean'
				),
			'body' => array(
				'field' => 'body',
				'label' => 'Description',
				'rules' => 'required|min_length[10]|max_length[300]|trim|xss_clean'
				)
		);

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('component_m');

	}

	public function index()
	{
		$side['pages'] = "slide";
		$body = "";
		$this->form_validation->set_rules($this->add_rules);

			if($this->form_validation->run() == TRUE){
				$now = date('Y-m-d H:i:s');
				$data_slider = array(
						'head_slide' => $this->input->post('head'),
						'body_slide' => $this->input->post('body'),
						'tanggal_slide' => $now,
					);

				if($_FILES['image']['name'] != NULL){

					if (!file_exists('./assets/slider')) {
		    			mkdir('./assets/slider', 0777, true);
					}

					$config['upload_path'] = './assets/slider'; 
					$config['allowed_types'] = 'jpg|png';
					$config['max_size'] = 10000;
					$config['overwrite'] = TRUE;
					$this->load->library('upload', $config);

					if($this->upload->do_upload('image') == TRUE){
						$data_slider = array(
							'head_slide' => $this->input->post('head'),
							'body_slide' => $this->input->post('body'),
							'tanggal_slide' => $now,
							'img_slide' => $this->upload->data()['file_name']
						);
					}
				}

				if($this->component_m->saveSlide($data_slider)){
					$body['confirm'] = TRUE;
				}
				else{
					$body['confirm'] = FALSE;
				}
			}

		
		//var_dump($this->component_m->getSlide());	
		$body['slides'] = $this->component_m->getSlide();
		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/slider/slider',$body);
		$this->load->view('BackEnd/foot');
	}

	public function delete($id_slide = NULL){
		if($this->component_m->deleteSlide($id_slide)){
			redirect('admin/sliderpage');
		}
	}

}

/* End of file sliderpage.php */
/* Location: ./application/controllers/admin/sliderpage.php */