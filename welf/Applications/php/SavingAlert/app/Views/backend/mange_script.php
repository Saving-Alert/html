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
<script>
  $(document).on('click', '.btn_approve', function(){
    var ver = $(this).attr('ver');
    mes = (ver == 'Yes') ? 'Deactive' : 'Active';
    var alert = (ver == 'Yes') ? 'Deactivated' : 'Activated';
    
    Swal.fire({
      title: 'Are you sure?',
      text: "Do you want to "+mes+" this user!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes!'

    }).then((result) => {
      if (result.value) {
        let don_id = $(this).attr("attr");

        $.ajax({
          url   : '<?php echo base_url();?>/Backend/ManageUsers/approve',
          type  : 'post',
          data  : {"don_id": don_id, "ver": ver},
          dataType : "json",
          success:function(data){
            if(data.sucess){
              Swal.fire(

                'Done!',
                'User '+alert,
                'success'

              ).then(() => {
                location.reload();
              });
            }
          }
        })
      }
    })

    
  })
</script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

  $(document).on("click", ".reqmts", function(){

    let don_id = $(this).attr("attr");

    let ver = $(this).attr("bttr")

    //alert(ver);

    $.ajax({

        url   : '<?php echo base_url();?>/Backend/ManageUsers/enable_requester',
        type  : 'post',
        data  : {"don_id": don_id, "ver": ver},
        dataType : "json",
        success:function(data){
          if(data.sucess){
            Swal.fire(

              'Done!',
              'User ',
              'success'

            ).then(() => {
              location.reload();
            });
          }
        }

      });



  });


</script>