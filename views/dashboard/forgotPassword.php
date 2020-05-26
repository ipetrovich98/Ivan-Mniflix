<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet">

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

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>FlixGo – Online Movies, TV Shows & Cinema HTML Template</title>

</head>
<body class="body">

	<div class="sign section--bg" data-bg="<?php echo asset_url(); ?>img/section/section.jpg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="#" class="sign__form">
							<a href="<?php echo base_url(); ?>signin" class="sign__logo">
								<img src="<?php echo asset_url(); ?>img/logo.svg" alt="">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Email">
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">I agree to the <a href="<?php echo base_url(); ?>dashboard/privacy">Privacy Policy</a></label>
							</div>
							
							<button class="sign__btn" type="button">Sign in</button>

							<span class="sign__text">We will send a password to your Email</span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
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