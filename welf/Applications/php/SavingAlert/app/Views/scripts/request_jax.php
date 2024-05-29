<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Wrapper End -->


<!-- <script type="text/javascript" src="<?php //echo base_url(); ?>/assets/js/chart.min.js"></script>
<script type="text/javascript" src="<?php //echo base_url(); ?>/assets/js/chart-custome.js"></script> -->

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/progressbar.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/dashboard-script.js"></script>

<!-- Custom script for all pages --> 


<!-- <script type="text/javascript" src="<?php //echo base_url(); ?>/assets/js/script.js"></script> -->
<script>
	$(document).on("click", "#saveBtn", function(){

		$(this).prop("disabled", true);

		var property = document.getElementById('imageUpload').files[0];
	    
		if(typeof property !== 'undefined'){

			var image_name = property.name;
		 	var image_extension = image_name.split('.').pop().toLowerCase();

		}
		
	    var my_form = document.getElementById('submit_form');
	    var form_data = new FormData(my_form);

		if(typeof property !== 'undefined'){
			form_data.append("file",property);
			form_data.append("badu_have", true)
		}else{
			form_data.append("badu_have", false)
		}

	    
		//alert(property);

		$.ajax({
			url 	: '<?php echo base_url();?>/RequestDonation/request_donation',
			type 	: 'post',
			data 	: form_data,
            cache   : false,
            contentType: false,
            processData: false,
            beforeSend:function(){
                //$('#msg').html('Loading......');
            },
            success:function(data){
                // console.log(data);
                //$('#msg').html(data);

				let bdata = JSON.parse(data);

				if(bdata.success){
					Swal.fire(
					'Done!',
					'Your request listed!',
					'success'
					).then(() => {
						
						location.reload('<?php echo base_url();?>/RequestDonation/');

					});	
				}

				if(!bdata.success){

					Swal.fire({
						icon: 'error',
						title: 'Oops...',
						text: 'Mandotory Fields Are Missing!',
												
					}).then(() => {
						
						$("#saveBtn").prop("disabled", false);

					});

					if(!bdata.dondescription){
						 
						$("#dondescription").css('border' , 'solid 1px red');
					}

					if(!bdata.dontitile){
						 
						$("#dontitile").css('border' , 'solid 1px red');
					}

					if(!bdata.main_area){
						 
						$("#main_area").css('border' , 'solid 1px red');
					}

					if(!bdata.sub_area){
						 
						$("#sub_area").css('border' , 'solid 1px red');
					}

					if(!bdata.don_pub_phone){
						 
						$("#don_pub_phone").css('border' , 'solid 1px red');
					}


				}

            }


		});


	});

</script>





