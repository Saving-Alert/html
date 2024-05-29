<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- Mirrored from grandetest.com/theme/findhouse-html/page-listing-agencies-v1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Jul 2020 09:58:00 GMT -->
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
<title>Saving Alert - A bridge between the donors and receivers</title>
<!-- Favicon -->
<link href="<?php echo base_url(); ?>/assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="<?php echo base_url(); ?>/assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
		            <img class="nav_logo_img img-fluid" src="<?php echo base_url(); ?>/assets/images/header-logo.png" alt="header-logo.png">
		            <button type="button" id="menu-btn">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		        </div>
		        <a href="<?php echo base_url(); ?>" class="navbar_brand float-left dn-smd">
		            <img class="logo1 img-fluid" src="<?php echo base_url(); ?>/assets/images/header-logo2.png" alt="header-logo.png">
		            <img class="logo2 img-fluid" src="<?php echo base_url(); ?>/assets/images/header-logo2.png" alt="header-logo2.png">
		            <span>Saving Alert</span>
		        </a>
		        <!-- Responsive Menu Structure-->
		        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
		        
				<?php require("header_links.php"); ?>

		    </nav>
		</div>
	</header>
	
	<!-- Main Header Nav For Mobile -->
	<div id="page" class="stylehome1 h0">
		<div class="mobile-menu">
			<div class="header stylehome1">
				<div class="main_logo_home2 text-center">
		            <img class="nav_logo_img img-fluid mt20" src="<?php echo base_url(); ?>/assets/images/header-logo2.png" alt="header-logo2.png">
		            <span class="mt20">SavingAlert</span>
				</div>
				<ul class="menu_bar_home2">
	                <li class="list-inline-item list_s"><a href="page-register.html"><span class="flaticon-user"></span></a></li>
					<li class="list-inline-item"><a href="#menu"><span></span></a></li>
				</ul>
			</div>
		</div><!-- /.mobile-menu -->
		
		<nav id="menu" class="stylehome1">
			<ul>
				<li><span><a href="<?php echo base_url(); ?>">Home</a></span></li>

				<li><span><a href="<?php echo base_url(); ?>/Donations">Donations</a></span></li>

				
				<li><span>Contact</span></li>

				<?php

						$log_btn = '<li><a href="#" data-toggle="modal" data-target=".bd-example-modal-lg"> <span>Login/Register</span></a></li>';

						if(isset($_SESSION['front_logged_in'])){
							if($_SESSION['front_logged_in']){
								
								echo '

								<li><span>Account</span>
									<ul>
										<li><a href="'.base_url().'/Account">Account</a></li>
										<li><a href="'.base_url().'/Logout">Logout</a></li>
									</ul>
								</li>
								';

							}else{
								echo $log_btn;
							}

						}else{
							echo $log_btn;
						}

					?>
				
			</ul>
		</nav>

	</div>