<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact_us extends CI_Model {

	public function addContact_us($data){

		

		if($this->db->insert('t_contact_us',$data)){
			return TRUE;
		}
		else{
			return FALSE;
		}
		
	}

}

/* End of file contact_us.php */
/* Location: ./application/models/contact_us.php */