<?php
session_start();
include 'includes/config.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>Priyanka Henna | Home </title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Henna Arts" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/appointment_style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<!--<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,300i,400,400i,600,600i,700" rel="stylesheet">
 for fonts-->
 <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Elsie+Swash+Caps:900" rel="stylesheet">


</head>

<body>
	<!-- header -->
	<div class="main-part">
	<div class="header" id="home">
		<div class="top_menu_w3layouts">
<div class="container">
			<div class="header_left">
				<ul>
					<li><i class="fa fa-map-marker" aria-hidden="true"><a href="https://www.google.com.au/maps/place/2+Redpath+St,+Wishart+QLD+4122/data=!4m2!3m1!1s0x6b915b5f8171dbd7:0x6730f1e29f316fdd?sa=X&ved=0ahUKEwiqnueLg7zaAhWMVrwKHXHsDD4Q8gEIKzAA"></i> Brisbane</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +(61) 468 453 667</li>
					<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:priyankahenna04@gmail.com">priyankahenna04@gmail.com</a></li>
				</ul>
			</div>
			<div class="header_right">
				<ul class="forms_right">
					<li><a href="https://www.facebook.com/priyankahennabrisbane/"><i class="fa fa-facebook"></i></a> </li>
					<li><a href="https://www.youtube.com/channel/UCAdQA87jZMgv0cEicsKB_AA?view_as=subscriber"><i class="fa fa-youtube"></i></a> </li>
					<li><a href="https://www.instagram.com/priyankahenna/"><i class="fa fa-instagram"></i></a> </li>
                    <li><a href="https://www.google.com.au/search?q=priyankaheenna&oq=priyankaheenna&aqs=chrome..69i57j0l2.4790j0j7&sourceid=chrome&ie=UTF-8"><i class="fa fa-google-plus"></i></a> </li>
				</ul>

			</div>
			<div class="clearfix"> </div>
			</div>
		</div>

		<div class="content white Sticky">
			<nav class="navbar navbar-default" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="logo-img">
						<a class="navbar-brand" href="home.php">
							<p>PriyankaHenna</p>
						<!--	<img src="images/logo.jpg" class"img-responsive ">-->
						</a></div>
					</div>
					<!--/.navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<nav>
							<ul class="nav navbar-nav ">
								<li><a  class="<?php if($page=='home'){ echo 'active';}else{ echo '';} ?>" href="home.php">Home</a></li>
								<li><a class="<?php if($page=="whyme"){ echo 'active';}else{ echo '';} ?>" href="whyme.php">Why me!</a></li>
								<li><a class="<?php if($page=="gallery"){ echo 'active';}else{ echo '';} ?>" href="gallery.php">Gallery</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle <?php if($page=='services'){ echo 'active';}else{ echo '';} ?>" data-toggle="dropdown">Services <b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="bridal.php" >Bridal Henna</a></li>
										<li class="divider"></li>
										<li><a href="belly.php">Belly Henna</a></li>
										<li class="divider"></li>

									</ul>
								</li>
								<li><a href="contact.php" class="<?php if($page=='contact'){ echo 'active';}else{ echo '';} ?>">Contact Us</a></li>
							</ul>
						</nav>
					</div>
					<!--/.navbar-collapse-->
					<!--/.navbar-->
				</div>
			</nav>
		</div>
	</div>
