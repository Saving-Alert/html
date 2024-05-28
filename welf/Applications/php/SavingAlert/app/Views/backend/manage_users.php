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
                    <h1 class="m-0">User Managemet</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>/Backend/Dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Manage Users</li>
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
                    <h3 class="card-title">Users</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Username - Name</th>
                            <th>Phone Number</th>
                            <th>Phone Status</th>
                            <th>Active</th>
                            <th>Action</th>
                            <th>Hospital?</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        $db = \Config\Database::connect();

                        $builder1 = $db->table("front_users");
                        $builder1->select("*");
                        $query1 = $builder1->get();


                        if($query1->getNumRows() >= 1){


                            foreach ($query1->getResult() as $row1) {

                                $person_data = get_user_info($row1->id);
                                $fr_r_user_name = get_user_info($row1->id)->name;
                                $fr_r_user_name = strlen($fr_r_user_name) == 0 ? "User-00".$row1->id : $fr_r_user_name;
                                $phone_verified = ($row1->phone_verified == 'Y') ? 'Verified' : 'Not Verified';
                                $active = ($row1->dynamic_login == 'Y') ? 'Yes' : 'No';

                                $css = ($row1->dynamic_login == 'Y') ? 'btn-success' : 'btn-danger';

                                $black_white = "White Listed";

                                if($row1->dynamic_login == "N"){
                                    $black_white = "Black Listed";
                                }


                                $requester = '';

                                if($row1->reciver == "Y" ){

                                    $requester = '<button type="button" class="btn btn-success reqmts" attr="'.$row1->id.'" bttr="Y">Active</button>';

                                }else{

                                    $requester = '<button type="button" class="btn btn-danger reqmts" attr="'.$row1->id.'" bttr="N">Deactive</button>';

                                }


                                echo '
                      
                        <tr>
                        
                          <td>'.$fr_r_user_name.' - '.$row1->email.'</td>
                          <td>'.$row1->phone_number.'</td>
                          <td>'.$phone_verified.'</td>
                          <td>'.$active.'</td>
                          <td><button type="button" class="btn-sm '.$css.' btn_approve" attr="'.$row1->id.'" ver="'.$active.'">'.$black_white.'</button></td>
                          <td>'.$requester.'</td>
                        
                        </tr>
                      
                      ';


                            }



                        }



                        ?>



                        </tbody>
                        <tfoot>

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



        </div>
    </div>
</div>
