<?php
class Login_M extends CI_Model{

	public $rules = array(
		
		'username' => array(
			'field' => 'username', 
			'label' => 'username', 
			'rules' => 'trim|required|xss_clean'
		), 
		'password' => array(
			'field' => 'password', 
			'label' => 'Password', 
			'rules' => 'trim|required'
		)
	);                       

	public function verifyUser($username,$password,$owner){
			
		$this->db->where('owner',$owner);
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->where('account_stat','active');
		$this->db->limit(1);
		$UserQuery = $this->db->get('robinson_user'); // dmci_sorrel_user
		
		if($UserQuery->num_rows > 0 ){
			
			return $UserQuery;
		}
		else{
			return FALSE;	
		}
	}
		//Check status of User
	public function statuson($username,$data){
	
		$this->db->where('username',$username);
		$this->db->update('robinson_user',$data);
	
	}
	public function checkstatus($id){
	
		$this->db->where('id',$id);
		
		$checkstatusquery = $this->db->get('robinson_user');
			
		if($checkstatusquery->num_rows > 0){
			
			return $checkstatusquery;
		}
			
		else{
			return FALSE;	
		}
	}
	// Status Offline
	public function statusoff($id,$data){
	
		$this->db->where('id',$id);
		$this->db->update('robinson_user',$data);
	}

	public function getClientDetails($client){

		$this->db->where('id',$client);
		$this->db->limit('1');
		$user = $this->db->get('robinson_user');

		if($user->num_rows > 0){
			return $user;
		}
			
		else{
			return FALSE;	
		}

	}
	public function telephone($id,$mobile){

		$this->db->where('user_id',$id);
		$this->db->where('contact_type',$mobile);
		$query = $this->db->get('robinson_contact_info');
		return $query;
	}	
}