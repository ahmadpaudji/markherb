<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('news_m');
	}

	public function index($id_berita = NULL)
	{
		if($id_berita == NULL){
			$news = $this->news_m->usergetNews();
			$body['news'] = $news;
			$head['page'] = "news";
			$this->load->view('FrontEnd/head',$head);
			$this->load->view('FrontEnd/news',$body);
			$this->load->view('FrontEnd/foot');	
		}else{
			$this->_lihatDetail($id_berita);

		}
		
	}

	private function _lihatDetail($id_berita){
		$this->news_m->id_berita = $id_berita;
		$news = $this->news_m->usergetNews(TRUe);
		if(count($news) <= 0){
			redirect('news');
		}

		$body['news'] = $news;
		$head['page'] = "news";
		$this->load->view('FrontEnd/head',$head);
		$this->load->view('FrontEnd/news_detail',$body);
		$this->load->view('FrontEnd/foot');	
	}

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */