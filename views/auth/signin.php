<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo asset_url(); ?>css/main.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css" />
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/png" href="<?php echo asset_url(); ?>icon/favicon-32x32.png" sizes="32x32">
  <style>
  	button.submit:hover {
      opacity: 10 !important;
	    color: rgb(26, 58, 130);
  	}
    ul {
          position: relative;
          left: 6em;
          bottom: 37px;
    }
    .loginUser {
          color: red;
          position: relative;
          left: 3.5em;
          bottom: 30px;
          font-size: 130%;
    }
    font {
      color: red;
      font-size: 120%;
      position: relative;
      left: 20%;
      bottom: 25px;
    }
    .valid {
      color: green;
      font-size: 120%;
      position: relative;
      left: 20%;
      bottom: 25px;
    }
    /* The container */
    .container_checkbox {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 22px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* Hide the browser's default checkbox */
    .container_checkbox input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }

    /* Create a custom checkbox */
    .checkmark {
      position: absolute;
      top: 3px;
      left: 0;
      height: 22px;
      width: 22px;
      background-color: #a19db1;
      border-radius: 15%;
    }

    /* On mouse-over, add a grey background color */
    .container_checkbox:hover input ~ .checkmark {
      background-color: #ccc;
    }

    /* When the checkbox is checked, add a blue background */
    .container_checkbox input:checked ~ .checkmark {
      background-color: #5f3e67;
    }

    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the checkmark when checked */
    .container_checkbox input:checked ~ .checkmark:after {
      display: block;
    }

    /* Style the checkmark/indicator */
    .container_checkbox .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }
  </style>
 </head>
<body class="body">
 <!-- container --> 
<!--  showcase
 -->  
  <div class="sign section--bg" style = "height: 100%; background-color: #2a292e;" data-bg="<?php echo asset_url(); ?>img/section/section.jpg">
    <div class="container">
     <!--  <div class="pb-2 mt-4 mb-2 border-bottom">
        <h2>CodeIgniter Login and Registration System using MySQL with Bootstrap 4</h2>
      </div>  -->
      <form action="<?php echo base_url(); ?>auth/signin" class="remember-login-frm" id="remember-login-frm" method="post" accept-charset="utf-8" enctype="multipart/form-data">
      <div class="row justify-content-center">
    <div class="col-12 col-md-8 col-lg-6 pb-5" style = "padding-top: 15%;
    													padding-bottom: 0px !important;">
    <div class="row"><ul style="color: #CB0000"><?php echo validation_errors('<li>', '</li>'); ?></div>
        <!--Form with header-->

      <?php if($this->session->flashdata('loginUser')) { ?>
          <div class="loginUser">
             <?php echo $this->session->flashdata('loginUser'); ?>
          </div>
      <?php } ?>  

      <?php if($this->session->flashdata('token_check')){ ?>
          <div class = "loginUser">
            <?php echo $this->session->flashdata('token_check'); ?>
          </div>
      <?php } ?> 

      <?php if($this->session->flashdata('notRegistered')){ ?>
        <div class = "loginUser">
          <?php echo $this->session->flashdata('notRegistered'); ?>
        </div>
      <?php } ?>

      <?php if(! is_null($msg)) echo $msg; ?>

          <div class="card rounded-0" style = " background-color: #28282d;
											      border-top-color: red;
											      border-top-color: #ff55a5 !important;
											      border-top-width: 2px;
											      border-color: #1c1f21;
											      box-shadow: 0 5px 25px 0 rgba(0,0,0,0.3);
											      position: relative;
											      left: 12%;
											      width: 75%;">
                <div class="card-header p-0">
                    <div class="bg-login-page text-white text-center py-2">
                        <a href="<?php echo base_url(); ?>auth/login" class="sign__logo">
								            <img src="<?php echo asset_url(); ?>img/logo.svg" alt="">
					             	</a>
                    </div>
                </div>
                <div class="card-body p-3">   
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style = "background-color: rgb(68, 59, 59); border: 0px; box-shadow: 0 0 20px 0 rgba(90, 44, 85, 0.5);"><i class="fas fa-envelope-square"></i></div>
                            </div>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email *" style = "background-color: rgb(42, 41, 46); border: 0px; box-shadow: 0 0 20px 0 rgba(66, 28, 62, 0.5);">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style = "background-color: rgb(68, 59, 59); border: 0px; box-shadow: 0 0 20px 0 rgba(90, 44, 85, 0.5);"><i class="fas fa-key"></i></div>
                            </div>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password *" style = "background-color: rgb(42, 41, 46); border: 0px; box-shadow: 0 0 20px 0 rgba(66, 28, 62, 0.5);">
                        </div>
                    </div> 
                    <div style = "position: relative; left: 2px; margin-bottom: 8%;">
                    	<!-- <input type = "checkbox" id="remember" name="remember" value="Privacy" style = "-webkit-appearance: checkbox; width: 20px; height: 16px; " >
                    	<label for = "remember" style = "bottom: 3px;
														color: rgb(100, 100, 100);">Remember me
                      </label> -->
                      <label class = "container_checkbox" style = "color: rgb(193, 181, 181); font-size: 18px;"> Remember me
                        <input type = "checkbox" name = "remember">
                        <span class = "checkmark"></span>
                      </label>
                    </div>
                    <div class="text-center">
                        <button type="submit" id="contact-send-a" class="btn btn-info btn-block rounded-0 py-2 submit" style = "box-shadow: 0 0 20px 0 rgba(234, 211, 212, 0.5); width: 60%; position: relative; left: 20%; text-transform: uppercase; border-radius: 4px !important; background-image:  linear-gradient(90deg, #ff55a5 0%, rgb(216, 84, 84)100%); border: 0px;">Sign In</button>
	                    <span class="sign__text" style = "display: block;">
                        Don't have an account? <a href="<?php echo base_url(); ?>auth/register">Sign up!</a>
                      </span>
                      <span class="sign__text"><a href="#">Forgot password?</a></span>
			           		</div>
                </div>
            </div> 
          </div>
        </div>
    </form>
    </div>
  </div>

	<!-- JS -->
	<script src="<?php echo asset_url(); ?>js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/owl.carousel.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/jquery.mCustomScrollbar.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/wNumb.js"></script>
	<script src="<?php echo asset_url(); ?>js/nouislider.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/plyr.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/jquery.morelines.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/photoswipe.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/photoswipe-ui-default.min.js"></script>
	<script src="<?php echo asset_url(); ?>js/main.js"></script>
</body>
</html>