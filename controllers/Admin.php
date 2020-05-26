<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){

        parent::__construct();

		$this->load->helper('url');
 		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper('email');
}
	public function signup() {
		// $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		// $this->form_validation->set_rules(  'password', 'Password', 'trim|required|min_length[6]|max_length[15]|callback_chk_password_expression');

		// if($this->input->post('email') == '')
		// {
		// 	$this->session->set_flashdata('empty_email', "please input your email address!");
		// }
		// $valid_email_1 = $this->user_model->emailValidation($this->input->post('email'));
		// if(!$valid_email_1)
		// {
		// 	$this->session->set_flashdata('invalidEmail', "Please input Valid Email Address!");
		// }	
	 	$user=array(
		      'username'=>$this->input->post('name'),
		      'email'=>$this->input->post('email'),
		      'password'=>md5($this->input->post('password'))
        	);
	 	$email_check=$this->user_model->email_check($user['email']);
	 	if($email_check){
		  $this->user_model->register_user($user);
		  $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
		  redirect('signin');
		} else {
		  $this->session->set_flashdata('error_msg', 'Sorry, this user is already existed.');
		  redirect('signup');
		}
	}
}