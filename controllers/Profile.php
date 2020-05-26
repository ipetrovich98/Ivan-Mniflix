<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function __construct() 
  	{
	    parent::__construct();
      $this->load->model('user_model', 'auth');
  	}

  	public function exchange() 
  	{
  		$P_username = $this->input->post('username');
      $P_first_name = $this->input->post('firstname');
      $P_last_name = $this->input->post('lastname');
      $P_email = $this->input->post('email');

      $data = array(
        'username' => $P_username,
        'fname' => $P_first_name,
        'lname' => $P_last_name,
        'email' => $P_email,
        'userid' => $this->session->userdata('userid'),
        'address' => $this->session->userdata('address'),
      );
      // session data will be updated with this $data(fname, lname, email, username)

      $this->session->set_userdata($data);
      // userID will be get from this 
      $userID = $this->session->userdata('userid');

      $this->auth->update_users($userID, $P_username, $P_first_name, $P_last_name, $P_email);

      // var_dump($this->session->userdata());
  
      $content = $this->load->view('dashboard/profile', array('username' => $data, 'id' => $data), true);
      $this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data)); 
  	}

    public function password()
    {
      $newPass = $this->input->post('newpass');
      $oldPass = $this->input->post('oldpass');
      $confirmPass = $this->input->post('confirmpass');

      if($newPass === $confirmPass)
      {
        $this->auth->update_password($newPass, $oldPass);
      }

      if (!$this->session->userdata('_token')){
        $redirect_page = base_url() . "auth/login";
        header("Location: " . $redirect_page); 
      }else{
        $data = array(
          'userid' => $this->session->userdata('userid'),
          'fname' => $this->session->userdata('first_name'),
          'lname' => $this->session->userdata('last_name'),
          'email' => $this->session->userdata('email'),
          'address' => $this->session->userdata('address'),
          'username' => $this->session->userdata('username'),
        );
        $content = $this->load->view('dashboard/profile', array('username' => $data, 'id' => $data), TRUE);
        $this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data)); 
      }
    }
}	