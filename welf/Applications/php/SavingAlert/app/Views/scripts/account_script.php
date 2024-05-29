<!-- Wrapper End -->


<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/chart.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/chart-custome.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/progressbar.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/dashboard-script.js"></script>

<!-- Custom script for all pages --> 


<!-- <script type="text/javascript" src="<?php //echo base_url(); ?>/assets/js/script.js"></script> -->

<script>
	$(document).on("click", "#saveBtn", function(){
		var property = document.getElementById('imageUpload').files[0];
	    var image_name = property.name;
	    var image_extension = image_name.split('.').pop().toLowerCase();
	    var form = document.getElementById('submit_form');
	    var form_data = new FormData(form);
	    form_data.append("file",property);

		$.ajax({
			url 	: '<?php echo base_url();?>/SubmitRequest/submit_donation',
			type 	: 'post',
			data 	: form_data,
			dataType: 'json',
			success : function(data){

			}
		})
	})
</script>


