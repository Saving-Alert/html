<script>

    let claim_check = '<?php echo $claim_check ?>';

    let own_check = '<?php echo $own_check ?>';

    if(claim_check){

        $("#claim_part").html("");

        $("#claim_part").html('<h4>You Have Alrady Sent a Claim Request</h4>');
    }

    if(own_check){
        $("#claim_part").html("");

        $("#claim_part").html("<h4>You Can't Claim Your Own Donation</h4>");

        $("#message_part").html("");
    }

</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

    $(document).on("click", "#btn_claim_don", function(){

        let don_id = $(this).attr("attr");

        // let qty = $("#qty_input").val();

        let message = $("#claim_message").val();

        $.ajax({
            url 	: '<?php echo base_url();?>/ClaimDonation',
            type 	: 'post',
            data 	: {"don_id": don_id, "message" : message},
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
                        'Your Claim Request Sent!',
                        'success'
                    ).then(() => {
                        location.reload();
                    });

                }


                if(data.phone){

                    Swal.fire(
                        'Done!',
                        'You must verify your phone number to claim donations!',
                        'error'
                    ).then(() => {
                        location.href = '<?php echo base_url() ?>/Profile';
                    });

                }



            }

        })




    });

</script>