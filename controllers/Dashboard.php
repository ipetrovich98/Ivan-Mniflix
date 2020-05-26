<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() 
	{
  	    parent::__construct();
  	    //load models
  	    $this->load->model('user_model', 'auth');
  	}

	public function index()
	{
		// this is for indentifing token session!
		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{

			$data = array(
				'id' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			// Get all video item informatin from database!
			$video_item_information = $this->auth->get_all_videos();

			$var = 0;

			foreach ($video_item_information as $item) 
			{
				$video_info[$var] = array(
					'id' => $item->id,
					'videoName' => $item->video_name,
					'videoCategory' => $item->video_category,
					'videoRate' => $item->video_rate
				);
				$this->session->set_userdata($video_info[$var]);
			    // var_dump($this->session->userdata('videoName'));
				$var++;
			}
			// var_dump($video_info['0']);
			// echo($video_info['0']['videoName']);
			// echo($video_info['1']['videoName']);
			// echo($video_info['2']['videoRate']);
			// echo($video_info['3']['videoRate']);
			$content = $this->load->view('dashboard/main', array('video_info' => $video_info), TRUE);
			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		 }		
	}
	public function index_main()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$content = $this->load->view('dashboard/main_2', array(), TRUE);

			$data = array(
				'id' => $this->session->userdata('id'),
				'fname' => $this->session->userdata('first_name'),
				'lname' => $this->session->userdata('last_name'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}		
	}
	public function doSignout(){
		session_destroy();
		$redirect_page = base_url() . "auth/login";
		header("Location: " . $redirect_page); 
	}
	public function index_main2()
	{
		$content = $this->load->view('dashboard/main_2', array(), TRUE);
		$this->load->view('dashboard/layout', array('content' => $content));
	}
	public function signup()
	{
		$this->load->view('auth/signup');
	}
	public function signin() 
	{
		$this->load->view('auth/login');
	}
	public function catalog1()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$data = array(
				'id' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$video_item_information = $this->auth->get_all_videos();

			$var = 0;

			foreach ($video_item_information as $item) 
			{
				$video_info[$var] = array(
					'id' => $item->id,
					'videoName' => $item->video_name,
					'videoCategory' => $item->video_category,
					'videoRate' => $item->video_rate
				);
				$this->session->set_userdata($video_info[$var]);
			    // var_dump($this->session->userdata('videoName'));
				$var++;
			}

			$content = $this->load->view('dashboard/catalog1', array('video_info' => $video_info), TRUE);
			// $content = $this->load->view('dashboard/main', array('video_info' => $video_info), TRUE);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}	
	}
	public function catalog2()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$data = array(
				'id' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$video_item_information = $this->auth->get_all_videos();

			$var = 0;

			foreach ($video_item_information as $item) 
			{
				$video_info[$var] = array(
					'id' => $item->id,
					'videoName' => $item->video_name,
					'videoCategory' => $item->video_category,
					'videoRate' => $item->video_rate
				);
				$this->session->set_userdata($video_info[$var]);
			    // var_dump($this->session->userdata('videoName'));
				$var++;
			}

			$content = $this->load->view('dashboard/catalog2', array('video_info' => $video_info), TRUE);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}	
	}
	public function contact()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$content = $this->load->view('dashboard/contacts', array(), TRUE);

			$data = array(
				'id' => $this->session->userdata('id'),
				'fname' => $this->session->userdata('first_name'),
				'lname' => $this->session->userdata('last_name'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}	
	}
	public function about()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$content = $this->load->view('dashboard/about', array(), TRUE);

			$data = array(
				'id' => $this->session->userdata('id'),
				'fname' => $this->session->userdata('first_name'),
				'lname' => $this->session->userdata('last_name'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
	}
	public function error()
	{
		$this->load->view('dashboard/404');
	}
	public function detail_1()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$content = $this->load->view('dashboard/details', array(), TRUE);

			$data = array(
				'id' => $this->session->userdata('id'),
				'fname' => $this->session->userdata('first_name'),
				'lname' => $this->session->userdata('last_name'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
		
	}
	public function detail_2()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$content = $this->load->view('dashboard/details_2', array(), TRUE);

			$data = array(
				'id' => $this->session->userdata('id'),
				'fname' => $this->session->userdata('first_name'),
				'lname' => $this->session->userdata('last_name'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
	
	}
	public function faq()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$content = $this->load->view('dashboard/faq', array(), TRUE);

			$data = array(
				'id' => $this->session->userdata('id'),
				'fname' => $this->session->userdata('first_name'),
				'lname' => $this->session->userdata('last_name'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}

	}
	public function forgotPassword()
	{
		// var_dump($this->session->userdata());

		$this->load->view('dashboard/forgotPassword');
	}
	public function pricing()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$content = $this->load->view('dashboard/pricingPage', array(), TRUE);

			$data = array(
				'id' => $this->session->userdata('id'),
				'fname' => $this->session->userdata('first_name'),
				'lname' => $this->session->userdata('last_name'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
	}
	public function privacy()
	{
		// var_dump($this->session->userdata());

		if (!$this->session->userdata('_token')){
			$redirect_page = base_url() . "auth/login";
			header("Location: " . $redirect_page); 
		}else{
			$content = $this->load->view('dashboard/privacy', array(), TRUE);

			$data = array(
				'id' => $this->session->userdata('id'),
				'fname' => $this->session->userdata('first_name'),
				'lname' => $this->session->userdata('last_name'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
			);

			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
	}
	public function profile()
	{
		// var_dump($this->session->userdata());

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
	public function videoDisplay_1()
	{
		$data = array(
				'userid' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
				'user_priority' => $this->session->userdata('user_priority')
		);
		// var_dump($data);
		if($data['user_priority'])
		{
			if($data['user_priority'] == 'free')
			{
				$video = $this->auth->get_video_with_id(1);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'premium')
			{
				$video = $this->auth->get_video_with_id(1);
				if($video['video_value'] == 'Cinematic')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Free') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				}
			} else if($data['user_priority'] == 'cinematic')
			{
				$video = $this->auth->get_video_with_id(1);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}	
			}
		} else {
			$video = $this->auth->get_video_with_id(1);
			$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => '', 'chain' => 'chain'), TRUE);
			$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}	
	}
	public function videoDisplay_2()
	{
		$data = array(
				'userid' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
				'user_priority' => $this->session->userdata('user_priority')
		);
		// var_dump($data);
		if($data['user_priority'])
		{
			if($data['user_priority'] == 'free')
			{
				$video = $this->auth->get_video_with_id(2);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'premium')
			{
				$video = $this->auth->get_video_with_id(2);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'cinematic')
			{
				$video = $this->auth->get_video_with_id(2);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			}
		} else {
			$video = $this->auth->get_video_with_id(2);
				
				$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => '', 'chain' => 'chain'), TRUE);
				$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}	
	}
	public function videoDisplay_3()
	{
		$data = array(
				'userid' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
				'user_priority' => $this->session->userdata('user_priority')
		);
		// var_dump($data);
		if($data['user_priority'])
		{
			if($data['user_priority'] == 'free')
			{
				$video = $this->auth->get_video_with_id(3);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}	
			} else if($data['user_priority'] == 'premium')
			{
				$video = $this->auth->get_video_with_id(3);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'cinematic')
			{
				$video = $this->auth->get_video_with_id(3);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}	
			}
		} else {
			$video = $this->auth->get_video_with_id(3);
				
				$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => '', 'chain' => 'chain'), TRUE);
				$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}	
	}
	public function videoDisplay_4()
	{
		$data = array(
				'userid' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
				'user_priority' => $this->session->userdata('user_priority')
		);
		// var_dump($data);
		if($data['user_priority'])
		{
			if($data['user_priority'] == 'free')
			{
				$video = $this->auth->get_video_with_id(4);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}	
			} else if($data['user_priority'] == 'premium')
			{
				$video = $this->auth->get_video_with_id(4);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'cinematic')
			{
				$video = $this->auth->get_video_with_id(4);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			}
		} else {
			$video = $this->auth->get_video_with_id(4);
				
				$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => '', 'chain' => 'chain'), TRUE);
				$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
	}
	public function videoDisplay_5()
	{
		$data = array(
				'userid' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
				'user_priority' => $this->session->userdata('user_priority')
		);
		// var_dump($data);
		if($data['user_priority'])
		{
			if($data['user_priority'] == 'free')
			{
				$video = $this->auth->get_video_with_id(5);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'premium')
			{
				$video = $this->auth->get_video_with_id(5);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'cinematic')
			{
				$video = $this->auth->get_video_with_id(5);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			}
		} else {
			$video = $this->auth->get_video_with_id(5);
				
				$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => '', 'chain' => 'chain'), TRUE);
				$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
	}
	public function videoDisplay_6()
	{
		$data = array(
				'userid' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
				'user_priority' => $this->session->userdata('user_priority')
		);
		// var_dump($data);
		if($data['user_priority'])
		{
			if($data['user_priority'] == 'free')
			{
				$video = $this->auth->get_video_with_id(6);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'premium')
			{
				$video = $this->auth->get_video_with_id(6);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'cinematic')
			{
				$video = $this->auth->get_video_with_id(6);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			}
		} else {
			$video = $this->auth->get_video_with_id(6);
				
				$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => '', 'chain' => 'chain'), TRUE);
				$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
	}
	public function videoDisplay_7()
	{
		$data = array(
				'userid' => $this->session->userdata('userid'),
				'fname' => $this->session->userdata('fname'),
				'lname' => $this->session->userdata('lname'),
				'email' => $this->session->userdata('email'),
				'address' => $this->session->userdata('address'),
				'username' => $this->session->userdata('username'),
				'user_priority' => $this->session->userdata('user_priority')
		);
		// var_dump($data);
		if($data['user_priority'])
		{
			if($data['user_priority'] == 'free')
			{
				$video = $this->auth->get_video_with_id(7);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'premium')
			{
				$video = $this->auth->get_video_with_id(7);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => 'chain'), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			} else if($data['user_priority'] == 'cinematic')
			{
				$video = $this->auth->get_video_with_id(7);
				if($video['video_value'] == 'Free')
				{
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video, 'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => 'free', 'premium' => '', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Premium') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => 'premium', 'cinematic' => '', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
				} else if($video['video_value'] == 'Cinematic') {
					$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => 'cinematic', 'chain' => ''), TRUE);
					$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));
				}
			}
		} else {
			$video = $this->auth->get_video_with_id(7);
				
				$content = $this->load->view('dashboard/video', array('video_name' => $video, 'video_category' => $video,'video_rate' => $video, 'video_description' => $video, 'video_url' => $video, 'free' => '', 'premium' => '', 'cinematic' => '', 'chain' => 'chain'), TRUE);
				$this->load->view('dashboard/layout', array('content' => $content, 'userdata' => $data));	
		}
	}	
	public function priceUserSelect_free()
	{

		$data = array(
				'userid' => $this->session->userdata('userid')
		);
		$this->auth->insert_userPriority($data['userid'], 'free');
		
		// this is for updating user_priority value in session!!!
		$this->session->set_userdata('user_priority', 'free');

	 	$redirect_page = base_url() . "dashboard/home";
	  	header("Location: " . $redirect_page); 
   	 	exit();
	}
	public function priceUserSelect_premium()
	{

		$data = array(
				'userid' => $this->session->userdata('userid')
		);
		$this->auth->insert_userPriority($data['userid'], 'premium');

		// this is for updating user_priority value in session!!!
		$this->session->set_userdata('user_priority', 'premium');

	 	$redirect_page = base_url() . "dashboard/home";
	  	header("Location: " . $redirect_page); 
   	 	exit();
	}
	public function priceUserSelect_cinematic()
	{

		$data = array(
				'userid' => $this->session->userdata('userid')
		);
		$this->auth->insert_userPriority($data['userid'], 'cinematic');

		// this is for updating user_priority value in session!!!
		$this->session->set_userdata('user_priority', 'cinematic');

	 	$redirect_page = base_url() . "dashboard/home";
	  	header("Location: " . $redirect_page); 
   	 	exit();
	}
}