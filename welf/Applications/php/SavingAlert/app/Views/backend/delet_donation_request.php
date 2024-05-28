  <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>/backend/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/backend/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>/backend/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Delete Requests</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url() ?>/Backend/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Delete Requests</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

      <div class="card">
              <div class="card-header">
                <h3 class="card-title">Delete Publicly Listed Donation Requests</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Username - Name</th>
                    <th>Phone Number</th>
                    <th>Record Type</th>
                    <th>Record Title</th>
                    <th>Date - Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <?php
                  
                  $db = \Config\Database::connect();

                  $builder1 = $db->table("donation_table");
                  $builder1->select("*");
                  $my_where = "dontation_type='R' AND active='Y'";
                  $builder1->where($my_where);
                  $query1 = $builder1->get();
                  
                  
                  if($query1->getNumRows() >= 1){


                    foreach ($query1->getResult() as $row1) {

                      $person_data = get_user_info($row1->front_user_id);

                      $fr_r_user_name = get_user_info($row1->front_user_id)->name;

											$fr_r_user_name = strlen($fr_r_user_name) == 0 ? "User-00".$row1->front_user_id : $fr_r_user_name;

                      $phone_ver = ($person_data->phone_verified == "Y") ? "Yes" : "No";

                      $record_type = $row1->dontation_type == "D" ? "Donation" : "Request";

                      $don_stat = "";

                      $btn_html = "";

                      if($row1->active == "Y"){
                        $don_stat = "Active"; 

                        $btn_html = '

                        <button type="button" class="btn btn-danger btn_reject" attr="'.$row1->id.'">Delete</button>

                        ';
                      }

                      // if($row1->active == "D"){
                      //   $don_stat = "Rejected"; 
                      // }

                      $btn_view = '
                      
                      <input type="hidden" class="hid_v_id" value="'.$row1->id.'" >

                      <input type="hidden" class="hid_name" value="'.$fr_r_user_name.'" >
                      <input type="hidden" class="hid_title" value="'.$row1->title.'" >
                      <input type="hidden" class="hid_descrip" value="'.$row1->description.'" >
                      <input type="hidden" class="hid_food_type" value="'.$record_type.'" >
                      <input type="hidden" class="hid_area1" value="'.$row1->area_1.'" >
                      <input type="hidden" class="hid_area2" value="'.$row1->area_2.'" >
                      <input type="hidden" class="hid_rdate" value="'.$row1->rdate.'" >
                      <input type="hidden" class="hid_rtime" value="'.$row1->rtime.'" >

                      <input type="hidden" class="hid_img" value="'.$row1->image_url.'" >
                      


                      <button type="button" class="btn btn-info btn_view" attr="'.$row1->id.'">View</button>

                      ';

                      echo '
                      
                        <tr>
                        
                          <td>'.$fr_r_user_name.'</td>
                          <td>'.$person_data->phone_number.' - Verified - '.$phone_ver.'</td>
                          <td>'.$record_type.'</td>
                          <td>'.$row1->title.'</td>
                          <td>'.$row1->rdate.' - '.$row1->rtime.'</td>
                          <td>'.$don_stat.'</td>
                          <td>'.$btn_view.'</td>
                        
                        </tr>
                      
                      ';


                    }



                  }


                  
                  ?>

                  
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Username - Name</th>
                    <th>Phone Number</th>
                    <th>Record Type</th>
                    <th>Record Title</th>
                    <th>Date - Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>


      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <div class="modal" id="don_view" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pending Donation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <div class="modal-body">

        <div class="col-md-12">
          <div class="row">
            <div class="col-md-4">
                  <img id="mod_img" src="" style="max-width: -webkit-fill-available;" >
            </div>
            
            <div class="col-md-8">
                <label id="mod_food_type"></label> <br>
                <label id="mod_date"></label> - 
                <label id="mod_time"></label>

                <h6 id="mod_user_name"></h6>
                <h5 id="mod_title"></h5>
                <p id="mod_desc"></p>
                
                <label id="mod_date"></label>
                <label id="mod_time"></label>
                <label id="mod_area_1"></label>
                <label id="mod_area_2"></label>

            </div>

          </div>

        </div>
        
      </div>

      
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-primary" id="btn_approve" attr="">Approve</button> -->
        <button type="button" class="btn btn-danger" id="btn_reject" attr="">Delete</button>

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>