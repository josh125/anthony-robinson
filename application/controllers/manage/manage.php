<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage extends MY_Controller {

	function __construct(){

		parent::__construct();


	}

	public function index(){
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row != NULL){

			redirect('manage/dashboard');		
		}		
		$data['title'] = 'manage your website';
		$this->load->view('dashboard/loginpage',$data);
	}
	public function loginAccount(){

		$title['title'] = 'manage your website';
		$rules = $this->login_m->rules;
		
		$this->form_validation->set_rules($rules);
		
		if($this->form_validation->run() == TRUE) {
		
			if($this->input->post('username')){
				$owner = 'anthony'; // Website Owner
				$username = $this->input->post('username');
				$password = $this->input->post('password');
			
				if($row = $this->login_m->verifyUser($username,$password,$owner)){
					
					$data['status'] = 'online';
					
					$this->login_m->statuson($username,$data);
					
					$data['userdetail'] = $row->result();
					
					foreach($data['userdetail'] as $useritem){
						
						$_SESSION['id'] = $useritem->id;
					}		
					
					if ($_SESSION['id'] > 0 ){							
			
						redirect('manage/dashboard',$this->session->set_userdata('id',$useritem->id.' '.$useritem->business_name.' '.$useritem->email));
					}
					else{
					
						$this->session->set_flashdata('error','Invalid username or password');	
						redirect('manage/manage');
					}
				}
				else{
					
					$this->session->set_flashdata('error','Invalid username or password');	
					redirect('manage/manage');
				}
			}		
		}
		$this->load->view('dashboard/loginpage',$title);
	}
	public function logout(){	
		
		$id = $this->session->userdata('id');			
		$data['status'] = '';			
		$this->login_m->statusoff($id,$data);			
		$this->session->sess_destroy();
		redirect ('manage/manage','refresh');
	}
	public function send_inquiries(){
		//mobile information
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
		$data['title'] = "Robinson Communities";

		//Balance the inquiries, Avoid sending 1 inquiry in many accounts
		$check_no = $this->input->post('contact');
		//check the inq number first
		$inquiries_algo = $this->manage_m->inquiries_algo($check_no);
		if($inquiries_algo != FALSE){
		
			$inq_info['information'] = $inquiries_algo->result();
		
			foreach ($inq_info['information'] as $inq) {
				$id_inq = $inq->user_id_inq;
			}
		

			$data_inq['name_inq'] = $this->input->post('name');
			$data_inq['email_inq'] = $this->input->post('email');
			$data_inq['contact_inq'] = $this->input->post('contact');
			$data_inq['project_inq'] = $this->input->post('location');
			$data_inq['comment_inq'] = $this->input->post('comment');
			$data_inq['user_id_inq'] = $id_inq;
			$this->manage_m->send_inquiries($data_inq);//send to first agent who receive first
			redirect('home');
		}

		$data_inq['name_inq'] = $this->input->post('name');
		$data_inq['email_inq'] = $this->input->post('email');
		$data_inq['contact_inq'] = $this->input->post('contact');
		$data_inq['project_inq'] = $this->input->post('location');
		$data_inq['comment_inq'] = $this->input->post('comment');
		$data_inq['user_id_inq'] = $id;
		$this->manage_m->send_inquiries($data_inq);
		$this->session->set_flashdata('message','Message send Successfully');
		redirect('home');

	}
	private function _validate_inquiries(){
		
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('contact', 'Contact', 'required|trim');
		$this->form_validation->set_rules('location', 'Preferred Location', 'required|trim');
		
		return $this->form_validation->run();
	}
}




