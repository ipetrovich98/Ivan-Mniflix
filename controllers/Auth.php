<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

  	public function __construct() 
    	{
  	    parent::__construct();
  	    //load models
  	    $this->load->model('user_model', 'auth');
  	    $this->load->library('form_validation');
          $this->load->helper(array('cookie', 'url'));
          $this->load->library('upload');
          $this->load->helper('url', 'form');
      }

	public function signup()
	{
		$this->load->view('auth/signup');
	}

	public function actionRegister() {
        // |is_unique[users.email]
        $this->form_validation->set_rules('first_name', 'First Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('address', 'Address', 'required');
 
        if ($this->form_validation->run() == FALSE) {
            $this->signup();
        } else {
            $firstName = $this->input->post('first_name');
            $lastName = $this->input->post('last_name');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $address = $this->input->post('address');
            $timeStamp = time();
            $status = 1;
            $userName = $this->auth->generateUniqueUserName('users', 
            	trim($firstName . $lastName), 'user_name', NULL, NULL);
            $this->auth->setUserName($userName);
            $this->auth->setFirstName(trim($firstName));
            $this->auth->setLastName(trim($lastName));
            $this->auth->setEmail($email);  
            $this->auth->setPassword($password);
            $this->auth->setAddress($address);
            $this->auth->setTimeStamp($timeStamp);
            $this->auth->setStatus($status);

            if($this->auth->emailCheck() == true)
            {
                $chk = $this->auth->signup();
                if($chk == true)
                {
                    $this->session->set_flashdata('success', "New user is sccessfully created just now!");
                    $this->load->view('auth/signup');
                    sleep(3.5);
                    // $this->load->view('auth/signin');
                    redirect('auth/login');
                }
            } else {
                    $this->session->set_flashdata('signupEl', "This user is already existed in database!");
                    sleep(1.5);
                    // this represents file in view folder!!!
                    $this->load->view('auth/signup');
                }
            
        }       
    }    
    public function signin($msg = NULL) {
        $data['msg'] = $msg;
        $this->load->view('auth/signin', $data);
    }

    public function doLogin() 
    {
        // grab user input
        $email = $this->security->xss_clean($this->input->post('email'));
        $password = $this->security->xss_clean($this->input->post('password'));

        $result = $this->auth->validate($email, $password);
        
        if(!$result)
        {
            $msg = '<font color=red>Invalid email and/or password.</font><br />';            
            $this->signin($msg);
        } else {
            if($this->input->post('remember'))
            {
                $this->input->set_cookie('User_Email', $email, time()); /* Create cookie for store emailid */
                $this->input->set_cookie('User_Password', $password, time()); /* Create cookie for password */ 
            } else {
                   delete_cookie('User_Email'); /* Delete email cookie */
                   delete_cookie('User_Password'); /* Delete password cookie */
            }
            // echo($result['user_priority']);

            // token using md5 is created and stored in session!!!
            $token = md5(uniqid(rand(), true));
            $this->session->set_userdata('_token', $token);

            if($result['user_priority'])
            {
              $redirect_page = base_url() . "dashboard/home";
              $user_priority = $result['user_priority'];
              $this->session->set_userdata('user_priority', $user_priority);
              // var_dump($this->session->userdata('user_priority'));
              header("Location: " . $redirect_page); 
              exit();
            } else {
              $redirect_page = base_url() . "dashboard/pricing";
              $user_priority = $result['user_priority'];
              $this->session->set_userdata('user_priority', $user_priority);
              // var_dump($this->session->userdata('user_priority'));              
              header("Location: " . $redirect_page); 
              exit();
            }
            // $redirect_page = base_url() . "dashboard/home";
            // $redirect_page = base_url() . "dashboard/pricing";

            // token using md5 is created and stored in session!!!
            // $token = md5(uniqid(rand(), true));
            // $this->session->set_userdata('_token', $token);

            // header("Location: " . $redirect_page); 
            // exit();
        }
    }

    public function store() {
        $config['upload_path'] = './images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
        $config['max_width'] = 45;
        $config['max_height'] = 45;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_image')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('auth/signin', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());

            $this->load->view('auth/signin', $data);
        }
    }

    public function do_upload(){
    if($this->session->userdata('is_logged_in'))
    {
     $id = $this->session->userdata('id');
     $config['upload_path'] = './uploads/';
     $config['allowed_types'] = 'gif|jpg|jpeg|png';
     $config['max_size']    = '100';
     $config['max_width']  = '1024';
     $config['max_height']  = '768';
     $config['overwrite'] = false;

     $this->load->library('upload', $config);

     if ( ! $this->upload->do_upload())
     {
      $error = array('error' => $this->upload->display_errors());
      $this->load->view("site_header");
      $this->load->view("site_nav");
      $this->load->view('upload_form', $error);
      }else{    

      $data = $this->upload->data();
      $file_array = $this->upload->data('file_name');
      $profile['profile_picture'] = $file_array['file_name'];
      $this->db->where('id', $id);
      $this->db->update('users', $profile);
      $this->load->view('upload_success', $data);
      }
     }else{
      $this->load->view("site_header");
      $this->load->view("site_nav");
      $this->load->view("login_view");
      $this->load->view("site_footer");
      }   
   }

    public function token_check()
    {
        if (!$this->session->userdata('_token')) {
            $this->session->set_flashdata('token_check', "Your token is already deleted!");
            redirect('auth/login');
        } else {
            // this represents the routing in route file!!!
            redirect('dashboard/home');
        }
    }

    public function index() 
    {
        $content = $this->load->view('dashboard/main', array(), true);
        $this->load->view('dashboard/layout', array('content' => $content));
    } 
}