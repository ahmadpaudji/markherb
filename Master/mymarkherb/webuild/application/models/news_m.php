<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public $id_berita = ""; 

	public function getNews($single = FALSE){

		if(!$single){

			$this->db->select('*')->from('t_berita')
			->where('id_user',$this->session->userdata('id_user'));

			return $this->db->get()->result();	
		}else{
			$this->db->select('*')->from('t_berita')
			->where('id_berita',$this->id_berita)
			->where('id_user',$this->session->userdata('id_user'));

			return $this->db->get()->row();
		}
		

	}

	public function usergetNews($single = FALSE){

		if(!$single){

			$this->db->select('*')->from('t_berita');

			return $this->db->get()->result();	
		}else{
			$this->db->select('*')->from('t_berita')
			->where('id_berita',$this->id_berita);

			return $this->db->get()->row();
		}
		

	}

	public function saveNews($data,$edit = FALSE){

		if(!$edit){

			if($this->db->insert('t_berita',$data)){
				return TRUE;
			}
			else{
				return FALSE;
			}	

		}
		else{

			$this->db->where('id_berita',$this->id_berita);
			if($this->db->update('t_berita',$data)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		

	}


	public function deleteNews(){

		$this->db->select('*')->from('t_berita')->where('id_berita',$this->id_berita);
		$news = $this->db->get()->row();
		$val = count($news);

		if($val > 0){

			$this->db->where('id_berita',$this->id_berita);
			if($this->db->delete('t_berita')){

				if(!is_null($news->img_berita)){
					unlink('assets/news/'.$news->img_berita);
				}

				return TRUE;
			}

		}else{
			return FALSE;
		}

	}


	

}

/* End of file news_m.php */
/* Location: ./application/models/news_m.php */