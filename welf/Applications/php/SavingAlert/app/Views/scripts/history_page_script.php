<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>


$(document).on("click", ".btn_approve_s", function(){

	let ttl = $(this).attr("attr");

	let donttl = $(this).attr("donttr");

	$(this).prop("disabled", true);

	$.ajax({
		url 	: '<?php echo base_url();?>/Manage/approve',
		type 	: 'post',
		data 	: {"mlt": ttl, "donttl" : donttl},
		dataType : "json",
		cache   : false,
		processData: true,
		beforeSend:function(){
			//$('#msg').html('Loading......');
		},
		success:function(data){

			if(data.sucess){

				Swal.fire(
				'Done!',
				'Approved!',
				'success'
				).then(() => {
					location.reload();;
				});

			}

		}

	});

});



</script>


<script>


$(document).on("click", ".btn_reject_s", function(){

	let ttl = $(this).attr("attr");

	let donttl = $(this).attr("donttr");

	$(this).prop("disabled", true);

	$.ajax({
		url 	: '<?php echo base_url();?>/Manage/reject',
		type 	: 'post',
		data 	: {"mlt": ttl, "donttl" : donttl},
		dataType : "json",
		cache   : false,
		processData: true,
		beforeSend:function(){
			//$('#msg').html('Loading......');
		},
		success:function(data){

			if(data.sucess){

				Swal.fire(
				'Done!',
				'Rejected!',
				'success'
				).then(() => {
					location.reload();;
				});

			}

		}

	});

});



</script>


<script>


$(document).on("click", ".btn_delete", function(){

	let ttl = $(this).attr("attr");

	//let donttl = $(this).attr("donttr");

	$(this).prop("disabled", true);

	$.ajax({
		url 	: '<?php echo base_url();?>/Manage/delete_don',
		type 	: 'post',
		data 	: {"mlt": ttl },
		dataType : "json",
		cache   : false,
		processData: true,
		beforeSend:function(){
			//$('#msg').html('Loading......');
		},
		success:function(data){

			if(data.sucess){

				Swal.fire(
				'Done!',
				'Donation Deleted!',
				'success'
				).then(() => {
					location.reload();;
				});

			}

		}

	});

});



</script>