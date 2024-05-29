<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

	$(document).on("click", ".btn_claim", function(){

		let logged_in = false;

		<?php
		
		if(isset($_SESSION['front_logged_in'])){
			if($_SESSION['front_logged_in']){
				echo 'logged_in = true;';
			}
		}

		?>

		let click_id = $(this).attr("attr");

		if(logged_in){

			//location.href = ('<?php //echo base_url() ?>/Donation?item=' + click_id);

			// alert(click_id);

			$("#attr_bdon_id").val(click_id);


			$.ajax({
				url 	: '<?php echo base_url();?>/Requests/show_req',
				type 	: 'post',
				data 	: {"have_have": click_id},
				dataType : "json",
				cache   : false,
				processData: true,
				beforeSend:function(){
					//$('#msg').html('Loading......');
				},
				success:function(data){

					if(data.success){

						$("#uname").html("Hospital Name : " + data.uname);
						$("#reqtitle").html("Requested Blood Group : " + data.blood_group);
						$("#desc").html("Description : " + data.desc);
						$("#date_r").html("Request Date : " + data.date_r);
						$("#time_r").html("Request Time : " + data.time_r);
						$("#r_district").html("District - " + data.district);
						$("#r_city").html("City / Area - " + data.city);
						$("#pub_phone").html("Contact Phone - " + data.pub_phone);


						$('.req_details_mod').modal('toggle');

					}

				}

			});





		}else{

			$('.sign_up_modal').modal('toggle');

		}

	});

	
	
	///////////////////////////////////////

	
	$(document).on("click", "#btn_accept_blood", function(){
		//alert("Tets");


		let logged_in = false;

		<?php
		
		if(isset($_SESSION['front_logged_in'])){
			if($_SESSION['front_logged_in']){
				echo 'logged_in = true;';
			}
		}

		?>

		if(logged_in){

			let phone_verified = false;
			
			let click_id = $("#attr_bdon_id").val();

			<?php 	

				$ph = "false";

				if(user_phone_verified() == true){
					$ph = "true";
				}

				echo "phone_verified = ".$ph.";" 
			
			?>

			if(phone_verified){
				
				$.ajax({
				url 	: '<?php echo base_url();?>/Requests/accept_blood',
				type 	: 'post',
				data 	: {"have_have": click_id},
				dataType : "json",
				cache   : false,
				processData: true,
				beforeSend:function(){
					//$('#msg').html('Loading......');
				},
				success:function(data){

					if(data.success){

						Swal.fire({
							title: "Good job!",
							text: "Your live location is shared with the hospital now on words",
							icon: "success"
						});
						
					}

				}

			});



				


			}else{

				Swal.fire({
					title: "Your Phone Number?",
					text: "Your Phone Number is not verified?",
					icon: "question"
				}).then((result) => {
					window.location.href = '<?php echo base_url();?>/Profile/';
				});

			}

		}


	});


</script>