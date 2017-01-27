<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blogs extends MY_Controller{

	public function index(){

		$data['title'] = 'Blogs';
		
		$this->load->view('blogs', $data);
	}

}