<?php 
 
class Regis extends CI_Controller{
 
 function __construct(){
		parent::__construct();		
		$this->load->model('m_regis');
 
	}
 
	function index(){
		$this->load->view('v_regis');
	}
 
 
 function register_user(){
 
      $user=array(
      'username'=>$this->input->post('username'),
      'password'=>md5($this->input->post('password')),
        );
		
		$this->m_regis->register_user($user);
		$this->load->view('v_registered');
}		

}