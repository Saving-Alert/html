<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>/backend/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->

<script>
  $(function () {
    $("#example1").DataTable({
      aLengthMenu: [
        [25, 50, 100, 200, -1],
        [25, 50, 100, 200, "All"]
    ],
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

  $(document).on("click", ".btn_view", function(){

    // alert("test");

    let title = $(this).closest('tr').find('.hid_title').val();

    let user_name = $(this).closest('tr').find('.hid_name').val();
    let desc = $(this).closest('tr').find('.hid_descrip').val();
    let food_type = $(this).closest('tr').find('.hid_food_type').val();

    let area1 = $(this).closest('tr').find('.hid_area1').val();
    let area2 = $(this).closest('tr').find('.hid_area2').val();

    let rdate = $(this).closest('tr').find('.hid_rdate').val();
    let rtime = $(this).closest('tr').find('.hid_rtime').val();
    let img = $(this).closest('tr').find('.hid_img').val();

    // /alert(img);

    let v_id = $(this).closest('tr').find('.hid_v_id').val(); 

    //$("#btn_approve").attr("attr", v_id);
    $("#btn_reject").attr("attr", v_id);

    $("#mod_title").html(title);
    $("#mod_user_name").html(user_name);
    $("#mod_desc").html(desc);
    $("#mod_food_type").html(food_type);

    $("#mod_date").html(rdate);
    $("#mod_time").html(rtime);

    $("#mod_area_1").html(area1);
    $("#mod_area_2").html(area2);

    $('#don_view').modal('toggle');
    
    $('#mod_img').attr("src", '<?php base_url() ?>/uploads/'+img);

  });

</script>



<script>

$(document).on("click", "#btn_reject", function(){

let don_id = $(this).attr("attr");


$.ajax({
  url 	: '<?php echo base_url();?>/Backend/DeleteDonationRequests/reject',
  type 	: 'post',
  data 	: {"don_id": don_id},
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
      'Public Request Deleted!',
      'success'
      ).then(() => {
        location.reload();
      });

    }

    
    

  }

})




});


</script>