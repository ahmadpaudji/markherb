<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Component_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public $bagian = "";

	public function saveSlide($data){

		if($this->db->insert('t_slide',$data)){
			return TRUE;
		}
		else{
			return FALSE;
		}

	}

	public function getSlide(){

		$query = $this->db->get('t_slide');
		return $query->result();

	}

	public function deleteSlide($id){

		$this->db->select('*')->from('t_slide')->where('id_slide',$id);

		$slide = $this->db->get()->row();
		$val = count($slide);
		//var_dump($slide);
		//var_dump($val);
		if($val > 0){

			if(!is_null($slide->img_slide)){
				//var_dump('hapuss');

				unlink('assets/slider/'.$slide->img_slide);
				//var_dump('berhasil');

			}

			$this->db->where('id_slide',$id);
			$this->db->delete('t_slide');
			return TRUE;

		}
		else{
			return FALSE;
		}


	}

	public function getHalaman(){
		
		$this->db->select('*')->from('t_komponen')->where('bagian',$this->bagian);
		return $this->db->get()->row();
	}

	public function changeHalaman($data){

		$this->db->where('bagian',$this->bagian);
		if($this->db->update('t_komponen',$data)){
			return TRUE;
		}
		else{
			return FALSE;
		}

	}

}

/* End of file component_m.php */
/* Location: ./application/models/component_m.php */