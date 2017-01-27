<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutus extends MY_Controller{

	public function index(){

		$id = '1';
		$mobile = 'mobile';
		$row = $this->login_m->telephone($id,$mobile);
		$data['mobile'] = $row->result_array();
		//telephone
		$mobile = 'telephone';
		$row = $this->login_m->telephone($id,$mobile);
		$data['telephone'] = $row->result_array();		
		//user information
		$row = $this->manage_m->get_user_info($id);
		$data['user_info'] = $row->result();

		$data['title'] = 'About Us';
		
		$this->load->view('aboutus', $data);
	}

}