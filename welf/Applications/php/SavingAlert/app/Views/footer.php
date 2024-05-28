<!-- Log Modal -->
	<div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
		    <div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
		      	<div class="modal-body container pb20">
		      		<div class="row">
		      			<div class="col-lg-12">
				    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
							  	<li class="nav-item">
							    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login / Register</a>
							  	</li>

							  	<!-- <li class="nav-item">
							    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
							  	</li> -->

							</ul>
		      			</div>
		      		</div>
					<div class="tab-content container" id="myTabContent">
					  	<div class="row mt25 tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="login_thumb">
					  				<img class="img-fluid w100" src="<?php echo base_url(); ?>/assets/mimages/resource/" alt="login.jpg">
					  			</div>
					  		</div>
					  		<div class="col-lg-6 col-xl-6">
								<div class="login_form">
									<form  id="log_form">
										<div class="heading">
											<h4>Login</h4>
										</div>
										<!-- <div class="row mt25">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-fb btn-block"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-googl btn-block"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div> -->
										<!-- <hr> -->
										<div class="input-group mb-2 mr-sm-2">
										    <input type="text" class="form-control" name="user_email" id="user_email" placeholder="Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<!-- <div class="input-group form-group">
									    	<input type="password" class="form-control" name="user_password" id="user_password" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div> -->
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck1">
											<!-- <label class="custom-control-label" for="exampleCheck1">Remember me</label>
											<a class="btn-fpswd float-right" href="#">Lost your password?</a> -->
										</div>
										<button type="button" id="front_log_btn" class="btn btn-log btn-block btn-thm">Log In / Register</button>
										<!-- <p class="text-center">Don't have an account? <a class="text-thm" href="#">Register</a></p> -->
									</form>
								</div>
					  		</div>
					  	</div>
					  	<div class="row mt25 tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					  		<div class="col-lg-6 col-xl-6">
					  			<div class="regstr_thumb">
					  				<img class="img-fluid w100" src="<?php echo base_url(); ?>/assets/images/resource/regstr.jpg" alt="regstr.jpg">
					  			</div>
					  		</div>

							  <!-- <div class="col-lg-6 col-xl-6">
								<div class="sign_up_form">
									<div class="heading">
										<h4>Register</h4>
									</div>
									<form action="#">
										<div class="row">
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-fb"><i class="fa fa-facebook float-left mt5"></i> Login with Facebook</button>
											</div>
											<div class="col-lg-12">
												<button type="submit" class="btn btn-block btn-googl"><i class="fa fa-google float-left mt5"></i> Login with Google</button>
											</div>
										</div>
										<hr>
										<div class="form-group input-group">
										    <input type="text" class="form-control" id="exampleInputName" placeholder="User Name">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-user"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group input-group">
										    <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Re-enter password">
										    <div class="input-group-prepend">
										    	<div class="input-group-text"><i class="flaticon-password"></i></div>
										    </div>
										</div>
										<div class="form-group ui_kit_select_search mb0">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="SelectRole">Single User</option>
												<option data-tokens="Agent/Agency">Agent</option>
												<option data-tokens="SingleUser">Multi User</option>
											</select>
										</div>
										<div class="form-group custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="exampleCheck2">
											<label class="custom-control-label" for="exampleCheck2">I have read and accept the Terms and Privacy Policy?</label>
										</div>
										<button type="submit" class="btn btn-log btn-block btn-thm">Sign Up</button>
										<p class="text-center">Already have an account? <a class="text-thm" href="#">Log In</a></p>
									</form>
								</div>
					  		</div> -->

					  	</div>
					</div>
		      	</div>
		    </div>
		</div>
	</div>


	<!-- Log MD End -->

<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3 pr0 pl0">
					<div class="footer_about_widget">
						<h4>About SavingAlert</h4>
						<p>A bridge between the blood donors and receivers. Join with us to make a beautiful world out there!.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_qlink_widget">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="<?php echo base_url() ?>/About">About Us</a></li>
							<li><a href="<?php echo base_url() ?>/Terms">Terms & Conditions</a></li>
							<li><a href="<?php echo base_url() ?>/Privacy">Privacy Policy</a></li>
							<li><a href="<?php echo base_url() ?>/guide/UserGuide.pdf" target="_blank">User’s Guide</a></li>


						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_contact_widget">
						<h4>Contact Us</h4>
						<ul class="list-unstyled">
							<li><a href="#">akeela@evoluerit.com</a></li>
							<li><a href="#">Project Saving Alert </a></li>
							<li><a href="#">Colombo, Sri Lanka.</a></li>
							<li><a href="#">+94 775731785</a></li>
							
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
					<div class="footer_social_widget">
						<h4>Follow us</h4>
						<ul class="mb30">
							<li class="list-inline-item"><a href="https://www.facebook.com/welfarearo/"><i class="fa fa-facebook"></i></a></li>
							<!-- <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-google"></i></a></li> -->
						</ul>

						<!-- <h4>Subscribe</h4>

						<form class="footer_mailchimp_form">
						 	<div class="form-row align-items-center">
							    <div class="col-auto">
							    	<input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email">
							    </div>
							    <div class="col-auto">
							    	<button type="submit" class="btn btn-primary mb-2"><i class="fa fa-angle-right"></i></button>
							    </div>
						  	</div>
						</form> -->

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_middle_area pt40 pb40">
		<div class="container">
			<div class="row">

				<!-- <div class="col-lg-6 col-xl-6"> -->

					<!-- <div class="footer_menu_widget">
						<ul>
							<li class="list-inline-item"><a href="#">Home</a></li>
							<li class="list-inline-item"><a href="#">Listing</a></li>
							<li class="list-inline-item"><a href="#">Property</a></li>
							<li class="list-inline-item"><a href="#">Pages</a></li>
							<li class="list-inline-item"><a href="#">Blog</a></li>
							<li class="list-inline-item"><a href="#">Contact</a></li>
						</ul>
					</div> -->

				<!-- </div> -->

				<div class="col-lg-12">
					<div class="copyright-widget text-center">
						<p>© <?php echo date("Y") ?> Project SavingAlert. Made with love.</p>
					</div>
				</div>

			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/isotop.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/snackbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/simplebar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/scrollto.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/slider.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/timepicker.js"></script>





<!-- Custom script for all pages -->
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/script.js"></script>
</body>

</html>


<script>

  $(document).on("click", ".head_btn_submit_don", function(){

    let logged_in = false;

		<?php

		if(isset($_SESSION['front_logged_in'])){
			if($_SESSION['front_logged_in']){
				echo 'logged_in = true;';
			}
		}

		?>

    if(logged_in){

    window.location.replace('<?php echo base_url() ?>/SubmitDonation');


    }else{

    $('.sign_up_modal').modal('toggle');

    }

  });

</script>

<?php require("scripts/login_jax.php") ?>
