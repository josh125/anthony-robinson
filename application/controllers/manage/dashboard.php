<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

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
		//get user information
		$data['account_info'] = $row->result();
		//mobile info
		$mobile = 'mobile';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data['mobile'] = $row->result_array(); 
		//Telephone info
		$mobile = 'telephone';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data['telephone'] = $row->result_array(); 
		//get the inquiries
		
		$config['base_url'] = site_url().'manage/dashboard/index';
		//$config['base_url'] = site_url().'manage/dashboard/index';
		$this->db->where('user_id_inq',$id);
		$this->db->where('status_inq','');
		$config['total_rows'] = $this->db->get('rob_inq')->num_rows() ;
		$config['per_page'] = 10;			
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 2;		
		$this->pagination->initialize($config);		

		$row = $this->manage_m->get_inq_by_id($id);
		$data['inquiries'] = $row->result_array();
		//load view
		$this->load->view('dashboard/dashboard',$data);
	}
	public function sendtoimportant($inq_id){

		$id = $this->session->userdata('id');
		$this->manage_m->send_to_important($id,$inq_id);
		$this->session->set_flashdata('message','Transfer to Important Successfull');
		redirect('manage/dashboard');
	}
	public function sendtotrashbin($inq_id){

		$id = $this->session->userdata('id');
		$this->manage_m->send_to_trashbin($id,$inq_id);
		$this->session->set_flashdata('message','Transfer to trashbin Successfull');
		redirect('manage/dashboard');
	}			
	public function notification(){
		//input title
		$data['title'] = 'Dashboard | Manage your site';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}		
		$this->load->view('dashboard/notification',$data);
	}	
	public function message(){
		//input title
		$data['title'] = 'Dashboard | Message';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		$this->load->view('dashboard/message',$data);
	}	
	public function blogs(){
		//input title
		$data['title'] = 'Dashboard | Blogs';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}


		$id = '1';
		$config['base_url'] = site_url().'manage/dashboard/blogs';
		//$config['base_url'] = site_url().'manage/dashboard/index';
		$this->db->where('blog_user_id',$id);
		$config['total_rows'] = $this->db->get('robinson_blog')->num_rows() ;
		$config['per_page'] = 10;			
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 2;		
		$this->pagination->initialize($config);	

		$blogs = $this->manage_m->get_blogs_welcome_page($id);
		$data['blogs'] = $blogs->result_array(); 
		$this->load->view('dashboard/blogs',$data);
	}
	public function submit_blog(){
 		//UPLOADING IMAGES
		$config['upload_path']='./image/blog_img/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='5000';
		$config['max_width']='5000';
		$config['max_height']='5000';
		$this->load->library('upload',$config);
		//input title
		$data['title'] = 'Dashboard | Blogs';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		if($this->_validate_blog_post()===FALSE){
			$data['error'] = '';	
			if(!$this->upload->do_upload()) {
				$error = $this->upload->display_errors();
				$data['error'] = $error;
			}
			$this->load->view('dashboard/blog_post',$data);
			return;
		}
		if(!$this->upload->do_upload()) {
			$error = $this->upload->display_errors();
			$data['error'] = $error;
			$this->load->view('dashboard/blog_post',$data);
			return;
		}else{
			$image = $this->upload->data();
					
			$blog['blog_img'] = $image['file_name'];
			$blog['blog_title'] = $this->input->post('title');
			$blog['blog_content'] = $this->input->post('content');
			$blog['blog_user_id'] = $id;
			
			$this->manage_m->upload_blog($blog);
						
			$this->session->set_flashdata('message','Post blog Successfull');
			redirect('manage/dashboard/blogs');			
		}
	}
	private function _validate_blog_post(){
	
		$this->form_validation->set_rules('title', 'Title', 'required|trim');
		$this->form_validation->set_rules('content', 'Content', 'required|trim');
		return $this->form_validation->run();
	}
	public function settings(){
		//input title
		$data['title'] = 'Dashboard | Manage your site';
		//check user status
		$id = $this->session->userdata('id');	
		$row_info = $this->login_m->checkstatus($id);
		if($row_info == NULL){

			redirect('manage/manage');		
		}
		//mobile info
		$mobile = 'mobile';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data['mobile'] = $row->result_array(); 
		//Telephone info
		$mobile = 'telephone';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data['telephone'] = $row->result_array();
		//account information		
		$data['account_info'] = $row_info->result();		
		$this->load->view('dashboard/settings',$data);
	}
	public function help(){
		//input title
		$data['title'] = 'Dashboard | Manage your site';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		$this->load->view('dashboard/help',$data);
	}
	public function edit_my_account(){
		//input title
		$data['title'] = 'Dashboard | Edit my Account';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		//account information
		$data['account_info'] = $row->result();
		//mobile info
		$mobile = 'mobile';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data['mobile'] = $row->result(); 
		//Telephone info
		$mobile = 'telephone';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data['telephone'] = $row->result();
		$this->load->view('dashboard/editmyaccount',$data);
	}
	public function submit_edit_account(){
		//input title
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		
		//account information
		$data1['account_info'] = $row->result();
		//mobile info
		$mobile = 'mobile';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data1['mobile'] = $row->result(); 
		//Telephone info
		$mobile = 'telephone';
		$row = $this->manage_m->telephone($id,$mobile);	
		$data1['telephone'] = $row->result();

		$data1['title'] = 'Dashboard | Edit my Account';
		if ($this->_validate_edit_account()===FALSE) {
			
			$this->load->view('dashboard/editmyaccount',$data1);
			return;
		}else{
			//update User information
			$data['fullname'] = $this->input->post('fullname');
			$data['address'] = $this->input->post('address');
			$data['email'] = $this->input->post('email');
			$this->manage_m->update_account_info($id,$data);

			//update mobile number
			$data_m['contact_no'] = $this->input->post('mobile');
			$contact_no = 'mobile';
			$this->manage_m->update_contact($id,$data_m,$contact_no);
			//update telephone number
			$data_t['contact_no'] = $this->input->post('telephone');
			$contact_no = 'telephone';
			$this->manage_m->update_contact_tele($id,$data_t,$contact_no);

			$this->session->set_flashdata('message','Update Successfully');
			redirect('manage/dashboard/settings');			
		}
	}

	private function _validate_edit_account(){

		$this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
		$this->form_validation->set_rules('address', 'Address', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('mobile', 'Mobile Confirmation', 'required|min_length[11]|max_length[15]|trim');
		$this->form_validation->set_rules('telephone', 'Telephone', 'required|min_length[7]|max_length[10]|trim');
		
		return $this->form_validation->run();
	}
	public function security_info(){

		//input title
		$data['title'] = 'Dashboard | Edit Security';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		//account information
		$data['account_info'] = $row->result();
	
		$this->load->view('dashboard/security_info',$data);		
	}
	public function edit_security(){
		//input title
		$data['title'] = 'Dashboard | Change Password';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		//account information
		$data['account_info'] = $row->result();
	
		$this->load->view('dashboard/editsecurity',$data);
	}
	public function change_password(){
		//input title
		$data1['title'] = 'Dashboard | Change Password';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		//account information
		$data1['account_info'] = $row->result();
		
		if ($this->_validate_password()===FALSE) {

			$this->load->view('dashboard/editsecurity',$data1);
			return;
		}
		$data['password'] = $this->input->post('new_password');
		$pass = $this->input->post('old_password');

		$row = $this->manage_m->check_pass_change($id,$pass);

		if ($row == FALSE) {
			
			$this->session->set_flashdata('message','The old password you entered is incorrect');
			$this->load->view('dashboard/editsecurity',$data1);
			return;			
		}

		$this->manage_m->update_new_pass($id,$data);
		$this->session->set_flashdata('message','Change Password Successfully!');
		redirect('manage/dashboard/security_info');
	}
	private function _validate_password(){

		$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]|max_length[17]|trim|matches[retype_password]');
		$this->form_validation->set_rules('retype_password', 'Re-type Password', 'required|min_length[6]|max_length[15]|trim');
		$this->form_validation->set_rules('old_password', 'Old Password', 'required|trim');
		
		return $this->form_validation->run();
	}	
	// All About Blog Control
	public function editBlog($blog_id){ //EDIT BLOG
		//input title
		$data['title'] = 'Dashboard | Edit Blog post';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		$blog = $this->manage_m->get_blog_id_edit($blog_id,$id);
		$data['blog_item'] = $blog->result();
		$this->load->view('dashboard/editblog',$data);
	}	
	public function edit_blog_submit(){
 		//UPLOADING IMAGES
 		$this->output->enable_profiler(TRUE);
		$config['upload_path']='./image/blog_img/';
		$config['allowed_types']='gif|jpg|png';
		$config['max_size']='5000';
		$config['max_width']='5000';
		$config['max_height']='5000';
		$this->load->library('upload',$config);	
		//input title
		$data['title'] = 'Dashboard | Edit Blog post';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}

		$blog_id = $this->input->post('blog_id');
		$blog = $this->manage_m->get_blog_id_edit($blog_id,$id);
		$data['blog_item'] = $blog->result();		
		if($this->_validate_blog_post()===FALSE){
			$this->load->view('dashboard/editblog',$data);
			return;
		}					
			if($this->upload->do_upload()) {
				$image = $this->upload->data();
				$blog_u['blog_img'] = $image['file_name'];				
			}

		$blog_u['blog_title'] = $this->input->post('title');			
		$blog_u['blog_content'] = $this->input->post('content');
		$this->manage_m->update_blog_post($blog_id,$blog_u,$id);
		$this->session->set_flashdata('message','Update Blog Successfully');
		redirect('manage/dashboard/blogs');		
	}
	public function deleteBlog($blog_id){ //DELETE BLOG
		//input title
		$data['title'] = 'Dashboard | Delete Blog post';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		$row = $this->manage_m->get_blog_id_edit($blog_id,$id);
		$data['blogs'] = $row->result();
		$this->load->view('dashboard/delete_view',$data);	
	}
	public function submit_delete(){
		//input title
		$data['title'] = 'Dashboard | Delete Blog post';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		$blog_id = $this->input->post('blog_id');

		$this->manage_m->delete_blog($id,$blog_id);
		$this->session->set_flashdata('message','Delete blog Successfull');
		redirect('manage/dashboard/blogs');
	}	
	public function hideBlog($blog_id){	//HIDE BLOG
		//input title
		$data1['title'] = 'Dashboard | Edit Blog post';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}		
		$this->manage_m->hide_blog($blog_id,$id);
		$this->session->set_flashdata('message','hide blog Successfull');
		redirect('manage/dashboard/blogs');
	}	
	public function showBlog($blog_id){ //SHOW BLOG
		//input title
		$data1['title'] = 'Dashboard | Edit Blog post';
		//check user status
		$id = $this->session->userdata('id');	
		$row = $this->login_m->checkstatus($id);
		if($row == NULL){

			redirect('manage/manage');		
		}
		$this->manage_m->unhide_blog($blog_id,$id);
		$this->session->set_flashdata('message','Unhide blog Successfull');
		redirect('manage/dashboard/blogs');			
	}	
}



