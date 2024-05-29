<script>

$(document).on("click", "#front_log_btn", function(){

   $(this).prop("disabled", true);  

$.ajax({
  url: "<?php echo base_url() ?>/Login/Login",
  type: "POST",
  dataType: "json",
  data: $("#log_form").serialize(),
  success: function(data){

    $(this).prop("disabled", false);

    window.location.replace('<?php echo base_url() ?>/Login/Verify');
  }
  
});
	

});

</script>

