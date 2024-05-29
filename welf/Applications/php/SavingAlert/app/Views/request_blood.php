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
											<h4 class="mb30">Blood Request</h4>
											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Hospital</label>
												<input type="text" class="form-control" id="dontitile" name="dontitile" value="<?php echo get_user_info(front_user_id())->name; ?>">
											</div>
										</div>
										
										<div class="col-lg-12">
											<div class="my_profile_setting_textarea">
												<label for="propertyDescription">Blood Group</label>
												<select class="form-select" id="blod_group" name="blod_group">
													<option value="A+" selected>A+</option>
													<option value="B+">B</option>
													<option value="C+">B</option>
													<option value="D+">C+</option>
													</select>
											</div>
										</div>


										<div class="col-lg-12">
											<div class="my_profile_setting_textarea">
												<label for="propertyDescription">Description</label>
												<textarea class="form-control" id="dondescription" name="dondescription" rows="7"></textarea>
											</div>
										</div>

										
										<div class="col-lg-4 col-xl-4">
											<div class="my_profile_setting_input form-group">
												<label for="propertyTitle">Hospital Phone Number</label>
												<input type="text" class="form-control" id="don_pub_phone" name="don_pub_phone" value="<?php echo get_user_info(front_user_id())->phone_number; ?>">
											</div>
										</div>

										<div class="col-lg-4 col-xl-4">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExamplePrice">District</label>
												<input type="text" class="form-control"  id="main_area" name="main_area" value="<?php echo get_user_info(front_user_id())->district; ?>">
											</div>
										</div>
										<div class="col-lg-4 col-xl-4">
											<div class="my_profile_setting_input form-group">
												<label for="formGroupExampleArea">Area / City</label>
												<input type="text" class="form-control"  id="sub_area" name="sub_area" value="<?php echo get_user_info(front_user_id())->city; ?>">
											</div>
										</div>


										<div class="col-lg-6 col-xl-6" style="display:none;">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
												<label>Type</label>
												
												<select class="selectpicker" data-live-search="true" data-width="100%" id="frofoodtypel" name="frofoodtypel" >
													<option>Dry Foods</option>
													<option>Coocked Foods</option>
												</select>

											</div>
										</div>

										<div class="col-lg-3 col-xl-3">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
																							

											</div>
										</div>

										<!-- <div class="col-lg-3 col-xl-3">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
												<label>Quantitiy</label>
												
												<input type="text" class="form-control" id="quantity" name="quantity">
												

											</div>
										</div>

										<div class="col-lg-3 col-xl-3">
											<div class="my_profile_setting_input ui_kit_select_search form-group">
												<label>Unit</label>
												
												<input type="text" class="form-control" id="quantityname" name="quantityname">
												

											</div>
										</div> -->


										

										
										<div class="col-lg-6 col-xl-4" style="display:none;">
											<div class="my_profile_setting_input form-group">
												<label>Donation Image</label>
												<div class="avatar-upload">
													<div class="avatar-edit">
														<input class="btn btn-thm" type="file" id="imageUpload" accept=".png, .jpg, .jpeg">
														<label for="imageUpload"></label>
													</div>
													<div class="avatar-preview">
														<div id="imagePreview"></div>
														<input type="hidden" name="imgpath" id="imgpath">
													</div>
												</div>
											</div>
										</div>

										<div class="col-xl-12">
											<div class="my_profile_setting_input">
												<button type="button" class="btn btn2 float-right" id="saveBtn">Submit</button>
											</div>
										</div>

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

