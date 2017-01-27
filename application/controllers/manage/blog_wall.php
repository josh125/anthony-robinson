<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_wall extends MY_Controller {

	function __construct(){

		parent::__construct();
	}

	public function index(){
		//mobile information
		$id = '4';
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

		$config['base_url'] = site_url().'manage/blog_wall/index';
		//$config['base_url'] = site_url().'manage/blog_wall/index';
		$this->db->where('blog_user_id',$id);
		$this->db->where('blog_status','');
		$this->db->where('blog_hide_unhide','');
		$config['total_rows'] = $this->db->get('robinson_blog')->num_rows() ;
		$config['per_page'] = 10;			
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['num_links'] = 2;		
		$this->pagination->initialize($config);	

		$blog = $this->manage_m->get_blogs_welcome_page($id);
		$data['blogs'] = $blog->result_array();
		$data['title'] = 'Robinson Communities';
		$this->load->view('dashboard/blog_wall',$data);
	}
}



