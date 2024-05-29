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

			location.href = ('<?php echo base_url() ?>/Donation?item=' + click_id);


		}else{

			$('.sign_up_modal').modal('toggle');

		}

	});

</script>