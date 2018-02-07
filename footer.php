	<!-- footer -->
	<div class="footer_top_agile_w3ls">
		<div class="container">
			<div class="col-md-3 footer_grid">
				<h3>Quick Links</h3>
				<ul class="footer_grid_list">
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="index.php" data-toggle="modal" data-target="#myModal">Home</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="about.php" data-toggle="modal" data-target="#myModal">About</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="services.php" data-toggle="modal" data-target="#myModal">Services</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="gallery.php" data-toggle="modal" data-target="#myModal">Gallery</a>
					</li>
					<li><i class="fa fa-angle-right" aria-hidden="true"></i>
						<a href="contact.php" data-toggle="modal" data-target="#myModal">Contact</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3 footer_grid">
				<h3>Contact Info</h3>
				<ul class="address">
					<li><i class="fa fa-map-marker" aria-hidden="true"></i>Brisbane</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
					<li><i class="fa fa-phone" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-md-3 footer_grid">
				<h3>Instagram</h3>
				<div class="footer-grid-instagram">
					<a href="#"><img src="images/m6.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="footer-grid-instagram">
					<a href="#"><img src="images/m19.jpg" alt=" " class="img-responsive"></a>
					</div>
					<div class="clearfix"> </div>				
			</div>
			<div class="col-md-3 footer_grid ">
				     <div class="connect-social">
					<h3>Connect with us</h3>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>

				</div>
			</div>
			<div class="clearfix"> </div>

		</div>
	</div>
	<div class="footer_wthree_agile">
		<p>© 2018 Henna Arts. All rights reserved | Design by <a href="index.php">Henna Arts</a></p>
	</div>
	<!-- //footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script>
	/*************onscroll****************/
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset >= 50) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

	</script>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- //bootstrap-modal-pop-up --> 
	<!-- js -->
	<script>
		$('ul.dropdown-menu li').hover(function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
		}, function () {
			$(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
		});
	</script>
	<!-- bootstrap-modal-pop-up -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
		<script>
/************Modal show************************/
$('#myModal').modal('show');	
</script>
</body>
</html>
 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    ×</button>
                <h2 class="modal-title" id="myModalLabel">
                    Login/Registration</h2>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8 form-sec">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
						<!------------------Login Form----------------------------->
                            <div class="tab-pane active" id="Login">
							<?php
							  if( $poste ) {
							  if($rows)
								echo "<script type='text/javascript'>alert(' Welcome!')</script>";
							  else
								echo "<script type='text/javascript'>alert('failed!')</script>";
								}
							?>
							
                                <form role="form" class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" required="required" class="form-control" id="email1" name="login_email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" required="required" class="form-control" id="exampleInputPassword1" name="login_pass" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="submit" value="Login" class="btn btn-primary btn-sm" name="login">
                                        
                                    </div>
                                </div>
                                </form>
                            </div>
							<!------------------Register Form----------------------------->
                            <div class="tab-pane" id="Registration">
							<?php
							  if( $posted ) {
							  if($inserted)
								echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
							  else
								echo "<script type='text/javascript'>alert('failed!')</script>";
								}
							?>
                                <form role="form" class="form-horizontal" method="post">
                                <div class="form-group">
                                    <label for="name" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                       <input type="text" class="form-control" name="name" required="required" placeholder="Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" required="required" class="form-control" id="email" name="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="mobile" required="required" name="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" required="required" name="password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-sm" value="Sign Up" name="register">
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
</div>
