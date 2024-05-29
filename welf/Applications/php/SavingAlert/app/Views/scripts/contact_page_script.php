<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    $(document).on("click", "#btn_send_mes", function(){

        let logged_in = false;



        let from_email = $("#form_email").val();
        let from_phone = $("#form_phone").val();
        let from_subject = $("#form_subject").val();
        let from_message = $("#form_email").val();

        //alert(from_email);

        $(this).prop("disabled", true);

        $.ajax({
            url 	: '<?php echo base_url();?>/Contact/contact_xyz',
            type 	: 'post',
            data 	: $("#contact_form_1").serializeArray(),
            dataType: "json",
            cache   : false,
            processData: true,
            beforeSend:function(){
                //$('#msg').html('Loading......');
            },
            success:function(data){

                if(data.success){

                    Swal.fire(
                        'Done!',
                        'Your message sent!',
                        'success'
                    ).then(() => {
                        location.reload();;
                    });

                }else{

                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Mandotory Feilds are missing!'
                    }).then(() => {
                        $(this).prop("disabled", false);
                    });



                }

            }

        });







    });

</script>