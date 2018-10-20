<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_auth extends CI_Model {

	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
		}	

}

/* End of file m_auth.php */
/* Location: ./application/models/m_auth.php */