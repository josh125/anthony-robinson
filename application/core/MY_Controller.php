<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	function __construct(){

		parent::__construct();
		$this->db->query("SET time_zone='+8:00'");
		$this->load->library(array('session','form_validation','pagination'));
		$this->load->helper(array('form','url','date'));
		// Model
		$this->load->model(array('login_m','manage_m'));

		
	}
}