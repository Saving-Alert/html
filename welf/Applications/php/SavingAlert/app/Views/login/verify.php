
<?php if(isset($_SESSION['front_valid'])): ?>
	
	
	
	<?php if($_SESSION['front_logged_in']) : ?>


		<?php 
		
		echo '<script>window.location.replace("'.base_url().'/");</script>'; 
		exit(); 
		
		?>

		

	<?php  else : ?>
		

		


		<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/responsive.css">
<!-- Title -->
<title>WelfareAro - A bridge between the donors and receivers</title>
<!-- Favicon -->
<link href="<?php echo base_url(); ?>/assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo base_url(); ?>/assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />


</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

	<!-- Main Header Nav -->
	<header class="header-nav menu_style_home_one style2 navbar-scrolltofixed stricky main-menu">
		<div class="container-fluid p0">
		    <!-- Ace Responsive Menu -->
		    <nav>
		        <!-- Menu Toggle btn-->
		        <div class="menu-toggle">
		            <img class="nav_logo_img img-fluid" src="<?php base_url() ?>/assets/images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="#" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="<?php base_url() ?>/assets/images/header-logo2.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="<?php base_url() ?>/assets/images/header-logo2.png" alt="header-logo2.png">
		            <span>WelfareAro</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
		            
		            <li>
		                <a href="#"><span class="title">&nbsp;</span></a>
		                
		            </li>
		            
		            
	                <li class="list-inline-item add_listing">
						<a href="<?php echo base_url() ?>/Logout"><span class="flaticon-switch"></span><span class="dn-lg"><b style="font-weight: bold;">Logout</b></span></a>
					</li>
		        </ul>
		    </nav>
		</div>
	</header>
	
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="<?php base_url() ?>/assets/images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">FindHouse</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span>Home</span>
	                <ul>
	                    <li><a href="index.html">Home 1</a></li>
	                    <li><a href="index2.html">Home 2</a></li>
	                    <li><a href="index3.html">Home 3</a></li>
	                    <li><a href="index4.html">Home 4</a></li>
	                    <li><a href="index5.html">Home 5</a></li>
	                    <li><a href="index6.html">Home 6</a></li>
	                    <li><a href="index7.html">Home 7</a></li>
	                    <li><a href="index8.html">Home 8</a></li>
	                    <li><a href="index9.html">Home 9</a></li>
	                    <li><a href="index10.html">Home 10</a></li>
	                </ul>
				</li>
				<li><span>Listing</span>
					<ul>
						<li><span>Listing Grid</span>
							<ul>
	                            <li><a href="page-listing-grid-v1.html">Grid v1</a></li>
	                            <li><a href="page-listing-grid-v2.html">Grid v2</a></li>
	                            <li><a href="page-listing-grid-v3.html">Grid v3</a></li>
	                            <li><a href="page-listing-grid-v4.html">Grid v4</a></li>
	                            <li><a href="page-listing-grid-v5.html">Grid v5</a></li>
	                            <li><a href="page-listing-full-width-grid.html">Grid Fullwidth</a></li>
							</ul>
						</li>
						<li><span>Listing Style</span>
							<ul>
	                            <li><a href="page-listing-parallax.html">Parallax Style</a></li>
	                            <li><a href="page-listing-slider.html">Slider Style</a></li>
	                            <li><a href="page-listing-map.html">Map Header</a></li>
							</ul>
						</li>
						<li><span>Listbody href="page-listing-half-map-v1.html">Map V1</a></li>
	                            <li><a href="page-listing-half-map-v2.html">Map V2</a></li>
	                            <li><a href="page-listing-half-map-v3.html">Map V3</a></li>
	                            <li><a href="page-listing-half-map-v4.html">Map V4</a></li>
							</ul>
						</li>
						<li><span>Agent View</span>
							<ul>
	                            <li><a href="page-listing-agent-v1.html">Agent V1</a></li>
	                            <li><a href="page-listing-agent-v2.html">Agent V2</a></li>
	                            <li><a href="page-listing-agent-v3.html">Agent Details</a></li>
							</ul>
						</li>
						<li><span>Agencies View</span>
							<ul>
	                            <li><a href="page-agencies-list-v1.html">Agencies V1</a></li>
	                            <li><a href="page-agencies-list-v2.html">Agencies V2</a></li>
	                            <li><a href="page-agencies-list-v3.html">Agencies Details</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span>Property</span>
					<ul>
						<li><span>Property</span>
							<ul>
					            <li><a href="page-dashboard.html">Dashboard</a></li>
			                    <li><a href="page-my-properties.html">My Properties</a></li>
			                    <li><a href="page-add-new-property.html">Add New Property</a></li>
							</ul>
						</li>
						<li><span>Listing Single</span>
							<ul>
	                            <li><a href="page-listing-single-v1.html">Single V1</a></li>
	                            <li><a href="page-listing-single-v2.html">Single V2</a></li>
	                            <li><a href="page-listing-single-v3.html">Single V3</a></li>
	                            <li><a href="page-listing-single-v4.html">Single V4</a></li>
	                            <li><a href="page-listing-single-v5.html">Single V5</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><span>Blog</span>
					<ul>
	                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
	                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
	                    <li><a href="page-blog-single.html">Single Post</a></li>
					</ul>
				</li>
				<li><span>Pages</span>
					<ul>
						<li><span>Shop</span>
							<ul>
			                    <li><a href="page-shop.html">Shop</a></li>
			                    <li><a href="page-shop-single.html">Shop Single</a></li>
			                    <li><a href="page-shop-cart.html">Cart</a></li>
			                    <li><a href="page-shop-checkout.html">Checkout</a></li>
			                    <li><a href="page-shop-order.html">Order</a></li>
							</ul>
						</li>
		                <li><a href="page-about.html">About Us</a></li>
		                <li><a href="page-gallery.html">Gallery</a></li>
		                <li><a href="page-faq.html">Faq</a></li>
		                <li><a href="page-login.html">LogIn</a></li>
		                <li><a href="page-compare.html">Membership</a></li>
		                <li><a href="page-compare2.html">Membership 2</a></li>
	                    <li><a href="page-register.html">Register</a></li>
	                    <li><a href="page-service.html">Service</a></li>
		                <li><a href="page-error.html">404 Page</a></li>
		                <li><a href="page-terms.html">Terms and Conditions</a></li>
		                <li><a href="page-ui-element.html">UI Elements</a></li>
					</ul>
				</li>
				<li><a href="page-contact.html">Contact</a></li>
				<li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
				<li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
				<li class="cl_btn"><a class="btn btn-block btn-lg btn-thm circle" href="#"><span class="flaticon-plus"></span> Create Listing</a></li>
			</ul>
		</nav>
	</div>

		

	<section class="our-log-reg bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-6 offset-lg-3">
					<div class="sign_up_form inner_page">
						<div class="heading">
							<h3 class="text-center">Enter <?php echo $dynamic ? 'Verification Code' : 'Password' ?></h3>
						</div>
						<div class="details">
							<form action="<?php echo base_url(); ?>/Login/Verify" method="post">

								<div class="form-group">
							    	<input type="<?php echo $dynamic ? 'text' : 'password' ?>" class="form-control" value="<?= set_value("user_password") ?>" name="user_password" id="user_password" placeholder="<?php echo $dynamic ? 'Verification Code' : 'Password' ?>">
								</div>
									
								<!-- <div class="form-group custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="exampleCheck3">
									<label class="custom-control-label" for="exampleCheck3">Remember me</label>
								</div> -->
								
								<button type="submit" class="btn btn-log btn-block btn-thm2">Submit</button>
								<div class="divide">
									
								</div>
								<div class="row mt40">
									
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>			




			</body>

				</html>
		
		

				<?php endif; ?>


<?php else : ?>
	<?php  echo '<script>window.location.replace("'.base_url().'/");</script>'; ?>

<?php endif; ?>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/isotop.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/snackbar.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/simplebar.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/scrollto.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/jquery.counterup.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>

<!-- Custom script for all pages --> 
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/script.js"></script>



