
<!DOCTYPE html>

<html class="no-js"> 
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>JOLIGHT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="JONFLIGHT" />
<meta name="keywords" content="JONFLIGHT" />
<meta name="author" content="JONFLIGHT" />
<meta property="og:title" content=""/>
<meta property="og:image" content=""/>
<meta property="og:url" content=""/>
<meta property="og:site_name" content=""/>
<meta property="og:description" content=""/>
<meta name="twitter:title" content="" />
<meta name="twitter:image" content="" />
<meta name="twitter:url" content="" />
<meta name="twitter:card" content="" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico">

<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

<!-- Animate.css -->
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/animate.css">
<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/icomoon.css">
<!-- Bootstrap  -->
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap.css">
<!-- Superfish -->
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/superfish.css">
<!-- Magnific Popup -->
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/magnific-popup.css">
<!-- Date Picker -->
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/bootstrap-datepicker.min.css">
<!-- CS Select -->
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-select.css">
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/cs-skin-border.css">

<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url() ?>_assets/css/seat.css">


<!-- Modernizr JS -->
<script src="<?php echo base_url() ?>_assets/js/modernizr-2.6.2.min.js"></script>

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">

	<header id="fh5co-header-section" class="sticky-banner">
		<div class="container">
			<div class="nav-header">
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
				<h1 id="fh5co-logo"><a href="<?php echo base_url() ?>"><i class="icon-airplane"></i>JONDFLIGHT</a></h1>
				<!-- START #fh5co-menu-wrap -->
				<nav id="fh5co-menu-wrap" role="navigation">
					<ul class="sf-menu" id="fh5co-primary-menu">
						<li class="active"><a href="<?php echo base_url() ?>">User Page</a></li>
						<li class=""><a href="<?php echo base_url() ?>reservation"></a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<!-- end:header-top -->
<div class="fh5co-hero">
	<div class="fh5co-cover" style="background: 0px 5px rgb(94, 94, 94)" data-stellar-background-ratio="0.5">
		<div class="desc">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 form-signin">
						<div class="tabulation animate-box">

							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active">
									<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Signin Admin Panel</a>
								</li>
							</ul>
							<?php if ( isset($_GET['alert']) ): ?>
								<?php if ( $_GET['alert'] == 'success' ): ?>
								<div class="alert alert-success">
									<p>Sign up successful</p>
								</div>
								<?php elseif ( $_GET['alert'] == 'failed' ): ?>
								<div class="alert alert-failed">
									<p>Username and password do not match</p>
								</div>
								<?php endif; ?>
							<?php endif; ?>				

							<!-- Tab panes -->
							<form action="<?php echo base_url() ?>admin/account/signin_process" method="POST">
							<input type="hidden" name="url_before" value='<?php 
								if(isset($_GET['url'])){
									echo $_GET['url'];
								}
								else{
									echo '';
								}
								?>'>
							<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="flights">
										<div class="row">
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Username:</label>
													<input name="username" type="text" class="form-control" id="from-place" />
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Password:</label>
													<input name="password" type="text" class="form-control" id="to-place" />
												</div>
											</div>
										
											<div class="col-xs-12">
												<input name="submit" type="submit" class="btn btn-primary btn-block" value="Signin">
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div> 
<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a target="blank" href="http://twitter.com/hafiz_js"><i class="icon-twitter2"></i></a>
								<a target="blank" href="http://fb.com/fighter.cyber1"><i class="icon-facebook2"></i></a>
								<a target="blank" href="http://instagram.com/haffjjj"><i class="icon-instagram"></i></a>
							</p>
							<p>Copyright 2018 JONFLIGHT. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by <a href="http://jondes.com/" target="_blank">JONDES</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>

	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="<?php echo base_url() ?>_assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() ?>_assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.waypoints.min.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/sticky.js"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url() ?>_assets/js/hoverIntent.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url() ?>_assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url() ?>_assets/js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="<?php echo base_url() ?>_assets/js/classie.js"></script>
	<script src="<?php echo base_url() ?>_assets/js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="<?php echo base_url() ?>_assets/js/main.js"></script>
	<script>
		document.getElementById('current_url').value = window.location.href;
	</script>
	</body>
</html>

