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

								
							
							<?php
							
							$db = \Config\Database::connect();

							$builder = $db->table("donation_table");
							$builder->select("*");
							$builder->where("front_user_id", front_user_id());
							$builder->orderBy('rdate', 'ASC');
							$builder->orderBy('rtime', 'ASC');
							$query = $builder->get();


							$builder2 = $db->table("front_claims");
							

							
							?>

							<div class="my_dashboard_review col-md-12">

								<div class="col-md-12">
									<h4 class="mb30">Manage</h4>
									
								</div>


								<?php

									if($query->getNumRows() >= 1){

										$color_loo = 0;

										$all_ready_approved = false;

										$all_ready_approved_html = "";

										foreach ($query->getResult() as $row) {

											if($row->active == "D"){
												continue;
											}

											$don_type = $row->dontation_type == "D" ? "Donation" : "Request";
											$food_type = $row->dontation_type == "D" ? "Dry Food" : "Coocked Food";

											if($row->dontation_type == "R"){
												$food_type = "";
											}

											$active_s = $row->active == "Y" ? "Active" : "Not Active"; 

											$btn_act = $row->active == "Y" ? "Deactivate" : "Activate"; 

											if($row->active == "P"){
												$active_s = "Pending Admin Approvel";
											}
											
											if($row->active == "R"){
												$active_s = "Admin Rejected";
											}

											/////////////////////////////

											$builder2->select("*");
											$builder2->where("donation_id", $row->id);
											$builder2->where("donator_id", front_user_id());

											$query2 = $builder2->get();

											/////////////////////////////

											$html_reqs = "";
											
											$color_v = "";

											if($color_loo == 0){

												$color_v = "";
												$color_loo++;

											}else{
												$color_v = "background-color: #f1f1ea;";
												$color_loo = 0;
											}


											foreach ($query2->getResult() as $row2) {
												

												if($row2->approved == "R"){
													continue;
												}

												if($row2->approved == "Y" || $row2->approved == "O" ){
													$all_ready_approved = true;

		
												}

												$fr_r_user_name = get_user_info($row2->requester_id)->name;

												$fr_r_user_name = strlen($fr_r_user_name) == 0 ? "User-00".$row2->requester_id : $fr_r_user_name;
												
												$data_set_user = get_user_info($row2->requester_id);
												
												$phone_ver = ($data_set_user->phone_verified == "Y") ? "Yes" : "No";


												
												$html_reqs .= '

													<div class="row" style="padding: 1%; border-style: groove; ">

														<div class="col-md-8">

															<h5>Claim Request By : '.$fr_r_user_name.'</h5>
															<h6>Phone Verified : '.$phone_ver.'</h5>
															<h6>Phone Number : '.$data_set_user->phone_number.'</h5>

															<h6>Claim Message : </h5>
															<p>'.$row2->message.'</p>

														</div>

														<div class="col-md-4">
															<button type="button" class="btn btn-success btn_approve_s" attr="'.$row2->id.'" donttr="'.$row2->donation_id.'">Approve</button>
															<br>
															<br>
															<button type="button" class="btn btn-danger btn_reject_s" attr="'.$row2->id.'" donttr="'.$row2->donation_id.'">Reject</button>
														</div>
													
													</div>

												';

											}


											if($all_ready_approved){

													$donta_claim = get_user_info(donation_claimed_to($row->id));
													
													$donta_name = strlen($donta_claim->name) == 0 ? "User-00".$donta_claim->id : $donta_claim->name;

													$all_ready_approved_html .= '
															
														<div class="row" style="padding-bottom: 2%; padding-top: 2%; '.$color_v.'">

															<div class="col-md-6">
																
																<div class="row" >

																	<div class="col-md-4">
																		<img src="'.base_url().'/uploads/'. $row->image_url.'" />
																	</div>

																	<div class="col-md-8">
																		<h6>Donation Claimed To : '.$donta_name.' - Phone : '.$donta_claim->phone_number.'</h6>
																		<h6>'.$don_type.' - '.$row->rdate.' - '.$row->rtime.' </h6>
																		<h5>'.$row->title.'</h5>
																		<p>'.$row->description.'</p>
																		<p>'.$food_type.'</p>


																		

																	</div>



																</div>
																
						
															</div>
						
						
															<div class="col-md-6">
																
						
															</div>
						
														</div>


															
															';

											}else{


														echo '
													
												<div class="row" style="padding-bottom: 2%; padding-top: 2%; '.$color_v.'">

													<div class="col-md-6">
														
														<div class="row" >

															<div class="col-md-4">
																<img src="'.base_url().'/uploads/'. $row->image_url.'" />
															</div>

															<div class="col-md-8">
																<h6>'.$active_s.'</h6>
																<h6>'.$don_type.' - '.$row->rdate.' - '.$row->rtime.' </h6>
																<h5>'.$row->title.'</h5>
																<p>'.$row->description.'</p>
																<p>'.$food_type.'</p>


																<div class="row">
																	
																	<div class="col-md-6">
																		<button type="button" class="btn btn-danger btn_delete" attr="'.$row->id.'">Delete</button>
																	</div>
		
																</div>

															</div>



														</div>
														
				
													</div>
				
				
													<div class="col-md-6">
														'.$html_reqs.'
				
													</div>
				
												</div>


													
													';



											}

											$all_ready_approved = false;

									}

										echo '<hr> Approved <hr> ';
										

										echo $all_ready_approved_html;


									}
								
								?>

								

								


							</div>



						</div>

					</form>
					
				</div>


			</div>
		</div>
	</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>

