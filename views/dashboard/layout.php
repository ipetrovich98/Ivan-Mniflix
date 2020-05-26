<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/plyr.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/photoswipe.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/default-skin.css">
	<link rel="stylesheet" href="<?php echo asset_url(); ?>css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo asset_url(); ?>icon/favicon-32x32.png" sizes="32x32">
	<link rel="apple-touch-icon" href="<?php echo asset_url(); ?>icon/favicon-32x32.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo asset_url(); ?>icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo asset_url(); ?>icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo asset_url(); ?>icon/apple-touch-icon-144x144.png">

  	<link rel="icon" type="image/png" href="<?php echo asset_url(); ?>icon/favicon-32x32.png" sizes="32x32">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">
	
	<!-- header -->
	<header class="header">
		<div class="header__wrap">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__content" style = "width: 108%;">
							<!-- header logo -->
							<a href="<?php echo base_url(); ?>dashboard/home" class="header__logo" 
							   style = "position: relative; right: 4%; width: 73%;">  
								<img src="<?php echo asset_url(); ?>img/logo.svg" alt="">
							</a>
							<!-- end header logo -->

							<!-- header nav -->
							<ul class="header__nav" style = "position: relative; right: 3%; width: 138%; ">
								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="<?php echo base_url(); ?>dashboard/home" role="button" id="dropdownMenuHome">Home</a>
								</li>
								<!-- end dropdown -->

								<!-- dropdown -->
								<li class="header__nav-item">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuCatalog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalog</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuCatalog">
										<li><a href="<?php echo base_url(); ?>catalog/grid">Catalog Grid</a></li>
										<li><a href="<?php echo base_url(); ?>catalog/list">Catalog List</a></li>
										<li><a href="<?php echo base_url(); ?>catalog/details_1">Details Movie</a></li>
										<li><a href="<?php echo base_url(); ?>catalog/details_2">Details TV Series</a></li>
									</ul>
								</li>
								<!-- end dropdown -->

								<li class="header__nav-item">
									<a href="<?php echo base_url(); ?>dashboard/pricing" class="header__nav-link" style = "width: 135%;">Pricing Plan</a>
								</li>

								<li class="header__nav-item">
									<a href="<?php echo base_url(); ?>faq" class="header__nav-link">Help</a>
								</li>

								<!-- dropdown -->
								
								<!-- end dropdown -->
								 <li class="dropdown header__nav-item">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon ion-ios-more"></i></a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li>
											<a href="<?php echo base_url(); ?>catalog/about">
											  <i class="fa fa-edit"></i>About
											</a>
									    </li>
										<li><a href="<?php echo base_url(); ?>dashboard/privacy">Privacy Policy</a></li>
										<li><a href="<?php echo base_url(); ?>catalog/contact">contacts</a></li>
									 </ul>
								</li>
							</ul>
							<!-- end header nav -->

							<!-- header auth -->
							<div class="header__auth" style = "width: 137%; position: relative;">
								<button class="header__search-btn" type="button" style = "position: relative;right: 5%;">
									<i class="icon ion-ios-search"></i>
								</button>

								<!-- dropdown -->
								<div class="dropdown header__lang" style="position: relative;right: 5%;">
									<a class="dropdown-toggle header__nav-link" href="#" role="button" id="dropdownMenuLang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EN</a>

									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuLang">
										<li><a href="#">English</a></li>
										<li><a href="#">Spanish</a></li>
										<li><a href="#">Russian</a></li>
									</ul>
								</div>
								<!-- end dropdown -->

								<li class="dropdown header__nav-item" style = "width: 67%;position: relative; ">
									<a class="dropdown-toggle header__nav-link header__nav-link--more" href="#" role="button" id="dropdownMenuMore" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style = "width: 150%; display: inline; ">
										<span style = "font-size: 59%; position: relative; 
										               left: 0%; bottom:3px !important;">
										               <?php echo $userdata['username'] ?></span>
				               	  	</a>
										<!-- <img class ="avatar" 
										     style = "width: 21% !important; height: 58px; left:5px !important;
										              border-radius: 27px;
										              position: relative; bottom: 4px !important;" 
								  	         src="<?php echo asset_url(); ?>img/user/user2.jpg" /> -->
					  	         	<div class="profile__avatar" style="width: 56px !important; display: inline !important; left: 10px;">
										<img id="profileImage_header" src="<?php echo asset_url(); ?>img/user.svg" alt="" style = "height: 58px !important; width: 56px !IMPORTANT;border-radius: 50%;
									    		  position:relative; bottom: 5px;">
									</div>
									<input style = "display:none; " id="imageUpload_header" type="file" 
							   				   name="profile_photo" placeholder="Photo" required="" capture>				   
									<ul class="dropdown-menu header__dropdown-menu" aria-labelledby="dropdownMenuMore">
										<li><a href="<?php echo base_url(); ?>dashboard/profile">Profile</a></li>
										<li><a href="<?php echo base_url(); ?>auth/signout">log out</a></li>
									</ul>
								</li>
							</div>
							<!-- end header auth -->

							<!-- header menu btn -->
							<button class="header__btn" type="button">
								<span></span>
								<span></span>
								<span></span>
							</button>
							<!-- end header menu btn -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- header search -->
		<form action="#" class="header__search">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="header__search-content">
							<input type="text" placeholder="Search for a movie, TV Series that you are looking for">

							<button type="button">search</button>
						</div>
					</div>
				</div>
			</div>
		</form>
		<!-- end header search -->
		<!-- <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
			<img alt="Creative Commons License" style="border-width:0" 
			     src="https://i.creativecommons.org/l/by/4.0/88x31.png" />
		</a>
		<br />This work is licensed under a 
		<a rel="license" href="http://creativecommons.org/licenses/by/4.0/">
			Creative Commons Attribution 4.0 International License
		</a> -->
	</header>
	<!-- end header -->

	<?php echo $content; ?>

	<!-- footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">s
				<!-- footer list -->
				<div class="col-12 col-md-3">
					<h6 class="footer__title">Download Our App</h6>
					<ul class="footer__app">
						<li><a href="#"><img src="<?php echo asset_url(); ?>img/Download_on_the_App_Store_Badge.svg" alt=""></a></li>
						<li><a href="#"><img src="<?php echo asset_url(); ?>img/google-play-badge.png" alt=""></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Resources</h6>
					<ul class="footer__list">
						<li><a href="<?php echo base_url(); ?>catalog/about">About Us</a></li>
						<li><a href="<?php echo base_url(); ?>dashboard/pricing">Pricing Plan</a></li>
						<li><a href="<?php echo base_url(); ?>faq">Help</a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer list -->
				<div class="col-6 col-sm-4 col-md-3">
					<h6 class="footer__title">Legal</h6>
					<ul class="footer__list">
						<li><a href="<?php echo base_url(); ?>dashboard/privacy">Terms of Use</a></li>
						<li><a href="<?php echo base_url(); ?>dashboard/privacy">Privacy Policy</a></li>
						<li><a href="<?php echo base_url(); ?>dashboard/privacy">Security</a></li>
					</ul>
				</div>
				<!-- end footer list -->
				<!-- footer list -->
				<div class="col-12 col-sm-4 col-md-3">
					<h6 class="footer__title">Contact</h6>
					<ul class="footer__list">
						<li><a href="tel:+18002345678">+1 (800) 234-5678</a></li>
						<li><a href="mailto:support@moviego.com">support@flixgo.com</a></li>
					</ul>
					<ul class="footer__social">
						<li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
						<li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
						<li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
						<li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
					</ul>
				</div>
				<!-- end footer list -->

				<!-- footer copyright -->
				<div class="col-12">
					<div class="footer__copyright">
						<small>© 2018 FlixGo. Create by <a href="https://themeforest.net/user/dmitryvolkov/portfolio?ref=DmitryVolkov" target="_blank">Dmitry Volkov</a></small>

						<ul>
							<li><a href="<?php echo base_url(); ?>dashboard/privacy">Terms of Use</a></li>
							<li><a href="<?php echo base_url(); ?>dashboard/privacy">Privacy Policy</a></li>
						</ul>
					</div>
				</div>
				<!-- end footer copyright -->
			</div>
		</div>
	</footer>
	<!-- end footer -->

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
	<!-- <script data-cfasync="false" defer type="text/javascript" src="https://embed.videodelivery.net/embed/r4xu.fla9.latest.js?video=d26d79dde04204695005fa83762fdc55"></script> -->
	<script>
		$("#profileImage").click(function(e) {
			$("#imageUpload").click();
		});
		function fasterPreview( uploader ) {
    		if ( uploader.files && uploader.files[0] ){
          		$('#profileImage').attr('src', 
             		window.URL.createObjectURL(uploader.files[0]) );
          		$('#profileImage_header').attr('src', 
             		window.URL.createObjectURL(uploader.files[0]) );
    		}
		}
		$("#imageUpload").change(function(){
		    fasterPreview( this );
		});

		$("#profileImage_header").click(function(e) {
			$("#imageUpload_header").click();
		});
		function fasterPreview_header( uploader ) {
    		if ( uploader.files && uploader.files[0] ){
          		$('#profileImage_header').attr('src', 
             		window.URL.createObjectURL(uploader.files[0]) );
          		$('#profileImage').attr('src', 
             		window.URL.createObjectURL(uploader.files[0]) );
    		}
		}
		$("#imageUpload_header").change(function(){
		    fasterPreview_header( this );
		});
	</script>
</body>
</html>