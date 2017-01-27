<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Properties extends MY_Controller{

	public function index(){

		$data['title'] = 'Properties';
		
		$this->load->view('properties', $data);
	}

	public function acaciaescalades(){

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

		$data['title'] = 'Acacia Escalades';


		$this->load->view('acaciaescalades', $data);

		
	}

	public function download_acacia(){
		$this->load->helper('download');

		$filename = 'Acacia Escalades.pdf';
		$filepath = file_get_contents("/htdocs/image/Acacia Escalades.pdf");
		force_download($filepath,$filename); 
	}

	public function download_axis(){

		$filename = 'Axis Residences.pdf';
		$filepath = "/htdocs/image/AxisResidences.pdf";
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // some day in the past to avoid cached files
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Content-Type: application/octet-stream");
		header("Content-Disposition: attachment; filename={$filename}");
		header("Content-Transfer-Encoding: binary");
		readfile($filepath.$filename); 

	}


	public function axisresidences(){

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

		$data['title'] = 'AXIS Residences';

		$this->load->view('axisresidences', $data);
	}

	public function chimesgreenhills(){

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

		$data['title'] = 'Chimes Greenhills';

		$this->load->view('chimesgreenhills', $data);
	}

	public function escaladeseasttower(){

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

		$data['title'] = 'Escalades East Tower';

		$this->load->view('escaladeseasttower', $data);
	}

	public function escaladessouthmetro(){

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

		$data['title'] = 'Escalades South Metro';

		$this->load->view('escaladessouthmetro', $data);
	}

	public function thepearlplace(){

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

		$data['title'] = 'The Pearl Place';

		$this->load->view('thepearlplace', $data);
	}	
	
}