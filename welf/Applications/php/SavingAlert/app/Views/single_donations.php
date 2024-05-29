<?php 

$db = \Config\Database::connect();

$builder1 = $db->table("front_users");
$builder1->select("*");
$builder1->where("id", $front_user_id);
$query1 = $builder1->get();

$row1 = $query1->getRow();

?>

<section class="our-agent-single bgc-f7 pb30-991">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="listing_sidebar dn db-991">
						<div class="sidebar_content_details style3">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
								<div class="sidebar_advanced_search_widget">
									<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="keyword">
										    	<label for="exampleInputEmail"><span class="flaticon-magnifying-glass"></span></label>
										    </div>
										</li>
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputEmail" placeholder="Location">
										    	<label for="exampleInputEmail"><span class="flaticon-maps-and-flags"></span></label>
										    </div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Status</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Property Type</option>
														<option>Apartment</option>
														<option>Bungalow</option>
														<option>Condo</option>
														<option>House</option>
														<option>Land</option>
														<option>Single Family</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="small_dropdown2">
											    <div id="prncgs" class="btn dd_btn">
											    	<span>Price</span>
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
														<input type="text" class="amount" placeholder="$52,239"> 
														<input type="text" class="amount2" placeholder="$985,14">
														<div class="slider-range"></div>
												    </div>
											  	</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bathrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Bedrooms</option>
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
														<option>6</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Garages</option>
														<option>Yes</option>
														<option>No</option>
														<option>Others</option>
													</select>
												</div>
											</div>
										</li>
										<li>
											<div class="search_option_two">
												<div class="candidate_revew_select">
													<select class="selectpicker w100 show-tick">
														<option>Year built</option>
														<option>2013</option>
														<option>2014</option>
														<option>2015</option>
														<option>2016</option>
														<option>2017</option>
														<option>2018</option>
														<option>2019</option>
														<option>2020</option>
													</select>
												</div>
											</div>
										</li>
										<li class="min_area style2 list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName2" placeholder="Min Area">
										    </div>
										</li>
										<li class="max_area list-inline-item">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName3" placeholder="Max Area">
										    </div>
										</li>
										<li>
										  	<div id="accordion" class="panel-group">
											    <div class="panel">
											      	<div class="panel-heading">
												      	<h4 class="panel-title">
												        	<a href="#panelBodyRating" class="accordion-toggle link" data-toggle="collapse" data-parent="#accordion"><i class="flaticon-more"></i> Advanced features</a>
												        </h4>
											      	</div>
												    <div id="panelBodyRating" class="panel-collapse collapse">
												        <div class="panel-body row">
												      		<div class="col-lg-12">
												                <ul class="ui_kit_checkbox selectable-list float-left fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck1">
																			<label class="custom-control-label" for="customCheck1">Air Conditioning</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck4">
																			<label class="custom-control-label" for="customCheck4">Barbeque</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck10">
																			<label class="custom-control-label" for="customCheck10">Gym</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck5">
																			<label class="custom-control-label" for="customCheck5">Microwave</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck6">
																			<label class="custom-control-label" for="customCheck6">TV Cable</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck2">
																			<label class="custom-control-label" for="customCheck2">Lawn</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck11">
																			<label class="custom-control-label" for="customCheck11">Refrigerator</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck3">
																			<label class="custom-control-label" for="customCheck3">Swimming Pool</label>
																		</div>
												                	</li>
												                </ul>
												                <ul class="ui_kit_checkbox selectable-list float-right fn-400">
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck12">
																			<label class="custom-control-label" for="customCheck12">WiFi</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck14">
																			<label class="custom-control-label" for="customCheck14">Sauna</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck7">
																			<label class="custom-control-label" for="customCheck7">Dryer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck9">
																			<label class="custom-control-label" for="customCheck9">Washer</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck13">
																			<label class="custom-control-label" for="customCheck13">Laundry</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck8">
																			<label class="custom-control-label" for="customCheck8">Outdoor Shower</label>
																		</div>
												                	</li>
												                	<li>
																		<div class="custom-control custom-checkbox">
																			<input type="checkbox" class="custom-control-input" id="customCheck15">
																			<label class="custom-control-label" for="customCheck15">Window Coverings</label>
																		</div>
												                	</li>
												                </ul>
													        </div>
												        </div>
												    </div>
											    </div>
											</div>
										</li>
										<li>
											<div class="search_option_button">
											    <button type="submit" class="btn btn-block btn-thm">Search</button>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-7 col-xl-8">
					<div class="dn db-991 mt30 mb0">
						<div id="main2">
							<span id="open2" class="flaticon-filter-results-button filter_open_btn style3"> Show Filter</span>
						</div>
					</div>
					<div class="single_property_title mt30-767 mb30-767">
						<h2><?php echo $title ?></h2>
						<!-- <p>1421 San Pedro St, Los Angeles, CA 90015</p> -->
					</div>
				</div>
				<div class="col-lg-5 col-xl-4">
					
				</div>

				<div class="col-md-12 col-lg-8 mt50">
					<div class="row">
						<div class="col-lg-12">
							<div class="listing_single_description">
								<div class="lsd_list">
									<ul class="mb0">
										<li class="list-inline-item"><?php echo $area_1 ?></li>
										<li class="list-inline-item"><?php echo $area_2 ?></li>
										
									</ul>
								</div>
								

								<div>

									<?php

										if($image_url == ""){
											echo '<img src="'.base_url().'/assets/mimages/empty_img/empty_img.webp" />';
										}else{
											echo '<img src="'.base_url().'/uploads/'.$image_url.'" />';
										}

									?>

								</div>
								
							</div>
						</div>

						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb30">Description</h4>
									</div>
									
									<div class="col-lg-12">
										<p class="mb25"><?php echo $description ?></p>
									</div>


									
									
								</div>
							</div>
						</div>

						<div class="col-lg-12">
							<div class="additional_details">
								<div class="row">
									<div class="col-lg-12">
										<h4 class="mb15">Donation Details</h4>
									</div>
									<div class="col-md-6 col-lg-6">
										<ul class="list-inline-item">
											<li><p>Food Type :</p></a></li>
											<li><p>Date :</p></a></li>
											
										</ul>
										<ul class="list-inline-item">
											<li><p><span><?php echo $food_type == "D"? "Dry Food" : "Coocked Food"; ?> </span></p></a></li>
											<li><p><span> <?php echo $rdate; ?> </span></p></a></li>											
										</ul>
									</div>

									<div class="col-md-6 col-lg-6 col-xl-4">

										<ul class="list-inline-item">
											<li><p>Location :</p></a></li>
											
											<li><p>Time :</p></a></li>
										</ul>

										<ul class="list-inline-item">
											<li><p><span> <?php echo $area_1 . ' - ' . $area_2; ?> </span></p></a></li>
											
											<li><p><span> <?php echo $rtime; ?> </span></p></a></li>
										</ul>

									</div>
									
								</div>
							</div>
						</div>


						<div class="col-lg-12" >
							<div class="product_single_content">
								<div class="mbp_pagination_comments mt30">
									<div class="mbp_comment_form style2" id="claim_part">
										<h4>Claim Donation</h4>

										<form class="comments_form">

										<div class="row">
					
											<div class="col-md-12">
												<textarea id="claim_message" name="claim_message" class="form-control required" rows="4" required="required" placeholder="Message"></textarea>
											</div>

										</div>						
											<button type="button" class="btn btn-thm" id="btn_claim_don" attr="<?php echo $don_id ?>">Claim <span class="flaticon-right-arrow-1"></span></button>
										</form>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
				<div class="col-lg-4 col-xl-4 mt50">
					<div class="sidebar_listing_list">
						<div class="sidebar_advanced_search_widget">
							<div class="sl_creator">
								<h4 class="mb25">Donator</h4>
								<div class="media">
									<img class="mr-3" src="<?php echo base_url() ?>/assets/mimages/profile/icon.png" alt="lc1.png" style="max-width: 15%;">
									<div class="media-body">
								    	<h5 class="mt-0 mb0"><?php echo (strlen($row1->name) == 0) ? "User-00".$row1->id : $row1->name ?></h5>
								    	<p class="mb0"><?php echo $row1->phone_verified == "Y"? "Phone Verfied" : "Phone Not Verified" ?></p>
								    	<!-- <p class="mb0"><a href="https://grandetest.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="543d3a323b14323d3a303c3b2127317a373b39">[email&#160;protected]</a></p> -->
								    	<!-- <a class="text-thm">View My Listing</a> -->
								  	</div>
								</div>
							</div>
							<!-- <ul class="sasw_list mb0" id="message_part">
								<li class="search_area">
								    <div class="form-group">
								    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Your Name">
								    </div>
								</li>
								<li class="search_area">
								    <div class="form-group">
								    	<input type="number" class="form-control" id="exampleInputName2" placeholder="Phone">
								    </div>
								</li>
							
								<li class="search_area">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control required" rows="4" required="required" placeholder="Message"></textarea>
		                            </div>
								</li>
								<li>
									<div class="search_option_button">
									    <button type="button" class="btn btn-block btn-thm">Send Message</button>
									</div>
								</li>
							</ul> -->
						</div>
					</div>

				

				</div>
			</div>
		</div>
	</section>


	<!-- Claim Modal -->
	
	


	<!-- Claim MD End -->
