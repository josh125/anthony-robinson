<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hostconn extends MY_Controller {

	function __construct(){

		parent::__construct();
	}
	public function index(){
		//input title
		$data['title'] = 'Dashboard | Manage your site';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		$this->load->view('dashboard/hostconn_view',$data);
	}
}
