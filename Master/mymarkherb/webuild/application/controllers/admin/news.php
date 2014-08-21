<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('news_m');
	}
	public $news_rules = array(
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
		);
	public function index()
	{
		$side['pages'] = 'news';

		$this->form_validation->set_rules($this->news_rules);
		$now = date('Y-m-d H:i:s');

		if($this->form_validation->run() == TRUE){
			$data_news = array(
				'head_berita' => $this->input->post('head'),
				'body_berita' => $this->input->post('body'),
				'tanggal_berita' => $now,
				'id_user' => $this->session->userdata('id_user'),
				);

			if($_FILES['image']['name'] != NULL){

				if (!file_exists('./assets/news')) {
		    		mkdir('./assets/news', 0777, true);
				}

				$config['upload_path'] = './assets/news'; 
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = 10000;
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);

				if($this->upload->do_upload('image') == TRUE){
					$data_news = array(
						'head_berita' => $this->input->post('head'),
						'body_berita' => $this->input->post('body'),
						'tanggal_berita' => $now,
						'img_berita' => $this->upload->data()['file_name'],
						'id_user' => $this->session->userdata('id_user'),
					);
				}

			}

			if($this->news_m->saveNews($data_news)){
				$body['confirm'] = TRUE;
			}
			else{
				$body['confirm'] = FALSE;
			}
		}

		$body['news'] = $this->news_m->getNews();

		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);
		$this->load->view('BackEnd/news/news',$body);
		$this->load->view('BackEnd/foot');
		
	}

	public function edit($id_berita=NULL){
		$side['pages'] = 'news';
		if($id_berita == NULL){
			redirect('admin/news');
		}

		$this->news_m->id_berita = $id_berita;
		$body['news'] = $this->news_m->getNews(TRUE);
		if(count($body['news']) <= 0){
			redirect('admin/news');
		}

		$this->form_validation->set_rules($this->news_rules);
		$now = date('Y-m-d H:i:s');
		

		if($this->form_validation->run() == TRUE){
			$data_news = array(
				'head_berita' => $this->input->post('head'),
				'body_berita' => $this->input->post('body'),
				'tanggal_berita' => $now,
				'id_user' => $this->session->userdata('id_user'),
				);

			if($_FILES['image']['name'] != NULL){

				if (!file_exists('./assets/news')) {
		    		mkdir('./assets/news', 0777, true);
				}

				$config['upload_path'] = './assets/news'; 
				$config['allowed_types'] = 'jpg|png';
				$config['max_size'] = 10000;
				$config['overwrite'] = TRUE;
				$this->load->library('upload', $config);

				if($this->upload->do_upload('image') == TRUE){
					$data_news = array(
						'head_berita' => $this->input->post('head'),
						'body_berita' => $this->input->post('body'),
						'tanggal_berita' => $now,
						'img_berita' => $this->upload->data()['file_name'],
						'id_user' => $this->session->userdata('id_user'),
					);
				}

			}

			if($this->news_m->saveNews($data_news,TRUE)){
				$body['confirm'] = TRUE;
				redirect('admin/news');
			}
			else{
				$body['confirm'] = FALSE;
			}
		}

		$body['id_berita'] = $id_berita;

		$this->load->view('BackEnd/head');
		$this->load->view('BackEnd/side',$side);

		$this->load->view('BackEnd/news/news_edit',$body);
		$this->load->view('BackEnd/foot');
	}

	public function delete($id_berita=NULL){
		
		if($id_berita == NULL){
			redirect('admin/news');
		}

		$this->news_m->id_berita = $id_berita;
		if($this->news_m->deleteNews()){
			redirect('admin/news');
		}
		else{
			redirect('admin/news');
		}
		
	}


}

/* End of file news.php */
/* Location: ./application/controllers/admin/news.php */