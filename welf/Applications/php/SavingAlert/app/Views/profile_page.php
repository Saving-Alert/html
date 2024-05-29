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

						<form id="submit_form" method="post">
							<div class="col-lg-12">
								<div class="my_dashboard_review">
									<div class="row">
										<div class="col-lg-12">
											<h4 class="mb30">Profile</h4>

											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Name</label>
												<input type="text" class="form-control" id="prof_name" name="prof_name" value="<?php echo get_user_info(front_user_id())->name ?>">
											</div>

											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">NIC</label>
												<input type="text" class="form-control" id="prof_nic" name="prof_nic" value="<?php echo get_user_info(front_user_id())->name ?>">
											</div>
											
											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Date of Birth</label>
												<input type="date" class="form-control" id="prof_dob" name="prof_dob" value="<?php echo get_user_info(front_user_id())->dob ?>">
											</div>

											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Gender <?php //print_r( get_user_info(front_user_id())  ); ?></label>
												<select class="form-control" id="prof_gender" name="prof_gender">

													<?php 
														if(get_user_info(front_user_id())->gender != "N"){

															echo '
															<option value="'.get_user_info(front_user_id())->gender.'" selected>'.get_user_info(front_user_id())->gender.'</option>												
															';

															if(get_user_info(front_user_id())->gender == "Male"){
																echo '<option value="Female">Female</option>';

															}

															if(get_user_info(front_user_id())->gender == "Female"){
																echo '<option value="Male">Male</option>';

															}


														}else{
															echo '<option value="Male" selected>Male</option>
																	<option value="Female">Female</option>';
														}
													
													?>

																	
												</select>
											</div>

											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Blood Group</label>
												<select class="form-control" id="blod_group" name="blod_group">

													<?php

														$blood_arr = array("A+", "B+", "C+", "D+");
														$blood_type = get_user_info(front_user_id())->blood_type;

														foreach($blood_arr as $blood){
															if($blood_type == $blood){
																echo ' <option value="'.$blood_type.'" selected>'.$blood.'</option> ';
															}else{
																echo '<option value="'.$blood.'">'.$blood.'</option>';
															}

														}
													
													?>

													
												</select>
											</div>

																						
											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Weight (kg)</label>
												<input type="text" class="form-control" id="prof_weight" name="prof_weight" value="<?php echo get_user_info(front_user_id())->weight ?>">
											</div>

											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Height (cm)</label>
												<input type="text" class="form-control" id="prof_height" name="prof_height" value="<?php echo get_user_info(front_user_id())->height ?>">
											</div>



											<div class="my_profile_setting_input">
												<button type="button" class="btn btn2 float-right" id="saveProfname">Save Personal Data</button>
											</div>

										</div>

																											

										<div class="col-lg-3 col-xl-6">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
												<label>Phone Number</label>
												
												<input type="text" class="form-control" id="prof_phone" name="prof_phone" value="<?php echo get_phone_number() ?>">
											
											</div>

											<div class="my_profile_setting_input">
												<button type="button" class="btn btn2 float-right" id="verifyphone">Verify Phone</button>
											</div>


										</div>

										<div class="col-lg-3 col-xl-3">
											<div class="my_profile_setting_input ui_kit_select_search form-group">

												<?php 
													if(user_phone_verified()){
														echo '<label>This Number is Verified</label>';
													}else{
														echo '<label>Phone Number Must be verified to submit donations</label>';
													}
												
												?>

												
						
											</div>
										</div>					
																		
										

										<div class="col-xl-12">
											
										</div>

									</div>
								</div>
							</div>
						

					</form>
					
				</div>


			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>

<div id="mobile_verify_mod" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">SMS OTP Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
			<label>Enter Six Digit OTP Code</label><br>
			<input type="text" id="otp_ins" >
			
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="otp_submit_otp">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>