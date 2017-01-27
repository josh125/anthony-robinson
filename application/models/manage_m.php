<?php
class Manage_m extends CI_Model{

	public function get_user_info($id){
		$this->db->where('id',$id);
		$query = $this->db->get('robinson_user');
		return $query;
	}
	public function telephone($id,$mobile){
		$this->db->where('user_id',$id);
		$this->db->where('contact_type',$mobile);
		$query = $this->db->get('robinson_contact_info');
		return $query;
	}
	//Account information Update
	public function update_account_info($id,$data){
		$this->db->where('id',$id);
		$this->db->update('robinson_user',$data);
	}
	public function update_contact($id,$data_m,$contact_no){
		$this->db->where('user_id',$id);
		$this->db->where('contact_type',$contact_no);
		$this->db->update('robinson_contact_info',$data_m);
	}
	public function update_contact_tele($id,$data_t,$contact_no){
		$this->db->where('user_id',$id);
		$this->db->where('contact_type',$contact_no);
		$this->db->update('robinson_contact_info',$data_t);
	}
	public function check_pass_change($id,$pass){
		$this->db->where('id',$id);
		$this->db->where('password',$pass);
		$q = $this->db->get('robinson_user');
		if ($q->num_rows > 0) {
			return $q;
		}else{
			return FALSE;
		}
	}
	public function update_new_pass($id,$data){
		$this->db->where('id',$id);
		$this->db->update('robinson_user',$data);
	}
	//Inserting inquiries
	public function send_inquiries($data_inq){					
		$this->db->insert('rob_inq',$data_inq);
	}
	public function get_inq_by_id($id){ //All inquiries
		$this->db->where('user_id_inq',$id);
		$this->db->where('status_inq','');
		$this->db->order_by('date_inq','desc');
		$q = $this->db->get('rob_inq', $config['per_page'] = 10,$this->uri->segment(4));
		return $q;
	}
	public function get_inq_by_id_important($id){ // get all important inquiries
		$this->db->where('user_id_inq',$id);
		$this->db->where('status_inq','important');
		$this->db->order_by('date_inq','desc');
		$q = $this->db->get('rob_inq',$config['per_page'] = 10,$this->uri->segment(4));
		return $q;
	}
	public function get_inq_by_id_trashbin($id){ // get all trash Bin inquiries
		$this->db->where('user_id_inq',$id);
		$this->db->where('status_inq','trashbin');
		$this->db->order_by('date_inq','desc');
		$q = $this->db->get('rob_inq',$config['per_page'] = 10,$this->uri->segment(4));
		return $q;
	}
	public function send_to_trashbin($id,$inq_id){ //Trashbin
		$data['status_inq'] = 'trashbin';
		$this->db->where('user_id_inq',$id);
		$this->db->where('inq_id',$inq_id);
		$this->db->update('rob_inq',$data);
	}
	public function send_to_important($id,$inq_id){ //Trashbin
		$data['status_inq'] = 'important';
		$this->db->where('user_id_inq',$id);
		$this->db->where('inq_id',$inq_id);
		$this->db->update('rob_inq',$data);
	}
	public function delete_inq($id,$inq_id){ //Trashbin
		$data['status_inq'] = 'deleted';
		$this->db->where('user_id_inq',$id);
		$this->db->where('inq_id',$inq_id);
		$this->db->update('rob_inq',$data);
	}	
	public function send_to_all_inq($id,$inq_id){ //Trashbin
		$data['status_inq'] = '';
		$this->db->where('user_id_inq',$id);
		$this->db->where('inq_id',$inq_id);
		$this->db->update('rob_inq',$data);
	}	
	public function send_to_inquiries($id,$inq_id){ //Trashbin
		$data['status_inq'] = 'important';
		$this->db->where('user_id_inq',$id);
		$this->db->where('inq_id',$inq_id);
		$this->db->update('rob_inq',$data);
	}					
	public function upload_blog($blog){

		$this->db->insert('robinson_blog',$blog);
	}
	public function get_blogs($id){
		$this->db->where('blog_user_id',$id);
		$this->db->where('blog_status','');
		$this->db->limit(1);
		$this->db->order_by('blog_date_posted','DESC');
		$q = $this->db->get('robinson_blog');
		return $q;
	}
	public function get_blogs_welcome_page(){
		$this->db->where('blog_hide_unhide','');
		$this->db->where('blog_status','');
		$this->db->order_by('blog_date_posted','DESC');
		$this->db->limit('4');
		$q = $this->db->get('robinson_blog',$config['per_page'] = 5,$this->uri->segment(4));
		return $q;
	}
	//FOR BLOG MODEL
	public function get_blog_id_edit($blog_id,$id){

		$this->db->where('blog_id',$blog_id);
		$this->db->where('blog_user_id',$id);
		$q = $this->db->get('robinson_blog');
		return $q;
	}
	public function update_blog_post($blog_id,$blog_u,$id){

		$this->db->where('blog_id',$blog_id);
		$this->db->where('blog_user_id',$id);
		$this->db->update('robinson_blog',$blog_u);
	}
	public function delete_blog($id,$blog_id){
		$delete['blog_status'] = 'deleted';
		$this->db->where('blog_user_id',$id);
		$this->db->where('blog_id',$blog_id);
		$this->db->update('robinson_blog',$delete);
	}
	public function hide_blog($blog_id,$id){
		$hide['blog_hide_unhide'] = 'hidden';
		$this->db->where('blog_user_id',$id);
		$this->db->where('blog_id',$blog_id);
		$this->db->update('robinson_blog',$hide);
	}
	public function unhide_blog($blog_id,$id){
		$hide['blog_hide_unhide'] = '';
		$this->db->where('blog_user_id',$id);
		$this->db->where('blog_id',$blog_id);
		$this->db->update('robinson_blog',$hide);
	}
	public function inquiries_algo($check_no){

		$this->db->where('contact_inq',$check_no);
		$this->db->limit(1);
		$inq = $this->db->get('rob_inq');
		if ($inq->num_rows > 0) {
			return $inq;
		}else{
			return FALSE;
		}
	}
}