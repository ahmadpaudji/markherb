<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Training_m extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public $id_training = "";
	public $id_peserta = "";

	public function saveTraining($data,$edit = FALSE){

		if(!$edit){

			if($this->db->insert('t_training',$data)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
		else{

			$this->db->where('id_training',$this->id_training);
			if($this->db->update('t_training',$data)){
				return TRUE;
			}
			else{
				return FALSE;
			}

		}

	}

	public function getTraining($single = FALSE){

		if(!$single){

			$this->db->select('*')->from('t_training');

			return $this->db->get()->result();
		}
		else{

			$this->db->select('*')->from('t_training')
			->where('id_training',$this->id_training);

			return $this->db->get()->row();

		}

	}

	public function deleteTraining(){

		$this->db->select('*')->from('t_training')
		->where('id_training',$this->id_training);

		$training = $this->db->get()->row();
		$val = count($training);

		if($val > 0){

			$this->db->where('id_training',$this->id_training);
			if($this->db->delete('t_training')){

				if(!is_null($training->img_training)){
					unlink('assets/training/'.$training->img_training);
				}
			}

		}
		else{
			return FALSE;
		}
	}

	public function getParticipant(){

		$this->db->select('*')->from('t_pendaftar_training')
		->where('id_training',$this->id_training);

		return $this->db->get()->result();

	}

	public function saveParticipant($data,$edit = TRUE){

		if(!$edit){
			if($this->db->insert('t_pendaftar_training',$data)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}	
		else{

			$this->db->where('id_peserta', $this->id_peserta);
			if($this->db->update('Table', $data)){
				return TRUE;
			}
			else{
				return FALSE;
			}
		}
	}

}

/* End of file training_m.php */
/* Location: ./application/models/training_m.php */