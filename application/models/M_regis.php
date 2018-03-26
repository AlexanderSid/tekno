<?php 
 
class M_regis extends CI_Model{	
	

public function register_user($user){


$this->db->insert('admin', $user);

}
}	
