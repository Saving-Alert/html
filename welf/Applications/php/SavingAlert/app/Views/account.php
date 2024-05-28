<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashbord_navitaion.css">

	
	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f7 pb50">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-xl-2 dn-992 pl0">

					<div class="card" >
						<div class="card-header">
							 <a href="<?php echo base_url(); ?>/Account">Account</a>
						</div>
						<?php require("account_menu.php"); ?>
					</div>

				</div>
				<div class="col-lg-9 col-xl-10 maxw100flex-992">
					<div class="row">
						<div class="col-lg-12">
							<div class="dashboard_navigationbar dn db-992">
							<?php require("account_mobile_menu.php"); ?>
							</div>
						</div>
						
						<?php

						$db = \Config\Database::connect();						

						$builder = $db->table("donation_table");
						$builder->select("*");
						$builder->where("active", "Y");
						$builder->where("dontation_type", "D");
						$builder->where("front_user_id", front_user_id());

						$query = $builder->get();
						
						?>

						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one">
							<div class="icon"><span class="flaticon-heart"></span></div>
								<div class="detais">
									<div class="timer"><?php echo $query->getNumRows() ?></div>
									<p>All Active Donations</p>
								</div>
							</div>
						</div>

						<?php 
						
						$builder->select("*");
						$builder->where("active", "S");
						$builder->where("dontation_type", "D");
						$builder->where("front_user_id", front_user_id());

						$query = $builder->get();
						
						?>


						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style2">
								<div class="icon"><span class="flaticon-view"></span></div>
								<div class="detais">
									<div class="timer"><?php echo $query->getNumRows() ?></div>
									<p>You Have Donated</p>
								</div>
							</div>
						</div>

						<!-- <div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style3">
								<div class="icon"><span class="flaticon-chat"></span></div>
								<div class="detais">
									<div class="timer">12</div>
									<p>Total Visitor Reviews</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-6 col-lg-6 col-xl-3">
							<div class="ff_one style4">
								<div class="icon"><span class="flaticon-heart"></span></div>
								<div class="detais">
									<div class="timer">18</div>
									<p>Total Favorites</p>
								</div>
							</div>
						</div> -->
						

						<div>
							<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

						</div>

					</div>
					<div class="row mt50">
						<div class="col-lg-6 offset-lg-3">
							<div class="copyright-widget text-center">
								<p>© WelfareAro. Made with love.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>

