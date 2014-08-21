<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_m extends CI_Model {

	public function signup(){

	}

	public function login($data){

		$sql = "SELECT * FROM t_user WHERE email_user = ? AND password_user = ? AND verifikasi_user = '1' ";
		$value = array($data['email_user'],md5($data['password']));
		$query = $this->db->query($sql,$value);
		$val = $query->num_rows();
		//var_dump($val);
		if($val > 0){
			$data = $query->row();
			//var_dump($data);
			$this->session->set_userdata('id_user',$data->id_user);
			$this->session->set_userdata('email',$data->email_user);
			$this->session->set_userdata('nama',$data->nama_user);
			$this->session->set_userdata('jenis',$data->jenis_user);
			$this->session->set_userdata('loggedin',TRUE);
			//var_dump($this->session->userdata('loggedin'));
			return TRUE;
		}
		else{
			return FALSE;
		}
	}

	public function loggedin(){

		return (bool) $this->session->userdata('loggedin');
	}

}

/* End of file user_m.php */
/* Location: ./application/models/user_m.php */