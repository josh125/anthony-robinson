<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Important extends MY_Controller{

	function __construct(){
		parent::__construct();
		
	}
	public function index(){
		
		$id = $this->session->userdata('id');	
		$row_user = $this->login_m->checkstatus($id);

		if($row_user == NULL){

			redirect('manage/manage');		
		}

		$data['title'] = 'Dashboard | Important';
		$id = $this->session->userdata('id');
		$row = $this->manage_m->get_user_info($id);
		$data['account_info'] = $row->result();
		//mobile info
		$mobile = 'mobile';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data['mobile'] = $row->result_array(); 
		//Telephone info
		$mobile = 'telephone';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data['telephone'] = $row->result_array();

		$config['base_url'] = site_url().'manage/important/index';
		//$config['base_url'] = site_url().'manage/important/index';
		$this->db->where('user_id_inq',$id);
		$this->db->where('status_inq','important');
		$config['total_rows'] = $this->db->get('rob_inq')->num_rows() ;
		$config['per_page'] = 10;			
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 2;		
		$this->pagination->initialize($config);			
		//get the inquiries
		$row = $this->manage_m->get_inq_by_id_important($id);
		$data['inquiries'] = $row->result_array();		
		$this->load->view('dashboard/important',$data);
	}
	public function sendtotrashbin($inq_id){

		$id = $this->session->userdata('id');
		$this->manage_m->send_to_trashbin($id,$inq_id);
		$this->session->set_flashdata('message','Transfer to trashbin Successfull');
		redirect('manage/important');
	}	
	public function return_dash_inq($inq_id){

		$id = $this->session->userdata('id');
		$this->manage_m->send_to_all_inq($id,$inq_id);
		$this->session->set_flashdata('message','Transfer to All inquiries Successfull');
		redirect('manage/important');
	}	
}