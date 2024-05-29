<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>

    $(document).on("click", "#verifyphone", function(){

        $(this).prop("disabled", true);

        let phone_number = $("#prof_phone").val();

        $.ajax({
            url 	: '<?php echo base_url();?>/Profile/verify_phone',
            type 	: 'post',
            data 	: {"phone_number": phone_number},
            dataType : "json",
            cache   : false,
            processData: true,
            beforeSend:function(){
                //$('#msg').html('Loading......');
            },
            success:function(data){
                if(data.success === "otp"){

                    $('#mobile_verify_mod').modal('toggle');
                }

                if(data.success === "true"){
                    Swal.fire(
                        'Done!',
                        'This Number is Already Verified!',
                        'success'
                    ).then(() => {

                        location.reload('<?php echo base_url();?>/Profile/');

                    });

                }

                if(data.success === "invalid"){

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Invalid Number!',

                    }).then(() => {

                        location.reload('<?php echo base_url();?>/Profile/');

                    });

                }

            }

        })

    });

</script>


<script>



    $(document).on("click", "#otp_submit_otp", function(){

        let phone_number = $("#prof_phone").val();

        let otp_otp = $("#otp_ins").val();

        $.ajax({
            url 	: '<?php echo base_url();?>/Profile/confirm_otp',
            type 	: 'post',
            data 	: {"phone_number": phone_number, "ot_otp_ot" : otp_otp},
            dataType : "json",
            cache   : false,
            processData: true,
            beforeSend:function(){
                //$('#msg').html('Loading......');
            },
            success:function(data){
                if(data.success){

                    Swal.fire(
                        'Done!',
                        'Number Verified!',
                        'success'
                    ).then(() => {
                        $('#mobile_verify_mod').modal('toggle');
                        location.reload('<?php echo base_url();?>/Profile/');


                    });

                    $('#mobile_verify_mod').modal('toggle');
                }
            }

        })

    });


</script>


<script>

    $(document).on("click", "#saveProfname", function(){

        $(this).prop("disabled", true);

        let my_name_is = $("#prof_name").val();
        let nic = $("#prof_nic").val();
        let dob = $("#prof_dob").val();
        let gender = $("#prof_gender").val();
        let blood_group = $("#prof_gender").val();
        let weight = $("#prof_weight").val();
        let height = $("#prof_height").val();


        $.ajax({
            url 	: '<?php echo base_url();?>/Profile/save_name_s',
            type 	: 'post',
            data 	: {"my_name_is": my_name_is, "nic":nic, "dob":dob, "gender":gender, "blood_group":blood_group, "weight":weight, "height":height},
            dataType : "json",
            cache   : false,
            processData: true,
            beforeSend:function(){
                //$('#msg').html('Loading......');
            },
            success:function(data){

                if(data.success){
                    Swal.fire(
                        'Done!',
                        'Your Personal Data updated!',
                        'success'
                    ).then(() => {

                        $("#saveProfname").prop("disabled", false);

                    });

                }else{

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Data Can not be empty!'

                    }).then(() =>{
                        $("#saveProfname").prop("disabled", false);
                    });

                }



            }

        })

    });

</script>
