<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashbord_navitaion.css">

 <!-- DataTables -->
 <link rel="stylesheet" href="<?php echo base_url() ?>/backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  


	
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
											<h4 class="mb30">Tracking</h4>
											<div class="my_profile_setting_input form-group">
												
											</div>

										<div class="row">

											<div class="col-md-12" > 

												<h4>Your Claims</h4>





												<table id="example1" class="table table-bordered table-striped" >
													<thead>
														<tr>
														<th scope="col">Donation Title</th>
														<th scope="col">District</th>
														<th scope="col">City</th>
														<th scope="col">Status</th>
														<th scope="col">Donator Name</th>
														<th scope="col">#</th>
														</tr>
													</thead>
													<tbody>
														
														<?php
															$db = \Config\Database::connect();

															$builder = $db->table("front_claims");
															$builder->select("*");
															$builder->where("requester_id", front_user_id());

															$query = $builder->get();

															if($query->getNumRows() >= 1){

																foreach ($query->getResult() as $row) {

																	$phone = "";

																	$status_s = "";

																	if($row->approved == "Y"){
																		$phone = 'Donatot Contact : ' . get_user_info($row->donator_id)->phone_number;

																		$status_s = "Claimed To You";
																	}

																	if($row->approved == "O"){
																		$status_s = "Claimed By Another User";
																	}

																	
																	if($row->approved == "R"){
																		$status_s = "Rejected";
																	}

																	if($row->approved == "N"){
																		$status_s = "Not Approved Yet";
																	}

																	

																	$fr_r_user_name = get_user_info($row->donator_id)->name;

																	$fr_r_user_name = strlen($fr_r_user_name) == 0 ? "User-00".$row->requester_id : $fr_r_user_name;
																	
																	$don_data = get_donation_data($row->donation_id);
																	echo '
																		<tr>
																			<td>'.$don_data->title.'</td>
																			<td>'.$don_data->area_1.'</td>
																			<td>'.$don_data->area_2.'</td>
																			<td>'.$status_s.'</td>
																			<td>'.$fr_r_user_name.'</td>
																			<td>'.$phone.'</td>
																		</tr>
																	
																	';
																	
																}


															}
															

														?>

													</tbody>
												</table>

											</div>


											<!-- <div class="col-md-6">

													<h4>Claims</h4>

													<table class="table">
														<thead>
															<tr>
															<th scope="col">#</th>
															<th scope="col">First</th>
															<th scope="col">Last</th>
															<th scope="col">Handle</th>
															</tr>
														</thead>
														<tbody>
															<tr>
															<th scope="row">1</th>
															<td>Mark</td>
															<td>Otto</td>
															<td>@mdo</td>
															</tr>
															<tr>
															<th scope="row">2</th>
															<td>Jacob</td>
															<td>Thornton</td>
															<td>@fat</td>
															</tr>
															<tr>
															<th scope="row">3</th>
															<td>Larry</td>
															<td>the Bird</td>
															<td>@twitter</td>
															</tr>
														</tbody>
													</table>

											</div> -->


										</div>

											


											


										</div>

																											

																
										

										<!-- <div class="col-xl-12">
											
										</div> -->

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