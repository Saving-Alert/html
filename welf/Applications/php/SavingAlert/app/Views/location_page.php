<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/dashbord_navitaion.css">





<!-- Our Dashbord -->
<section class="our-dashbord dashbord bgc-f7 pb50">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 col-xl-2 dn-992 pl0">

                <div class="card" >
                    <div class="card-header">
                        <a href="<?php echo base_url(); ?>/Account">Account</a>
                    </div>
                    <?php require("account_menu.php"); ?>
                </div>

            </div>

            <div class="col-lg-9 col-xl-10 maxw100flex-992">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dashboard_navigationbar dn db-992">
                            <?php require("account_mobile_menu.php"); ?>
                        </div>
                    </div>



                    <form id="submit_form" method="post">
                        <div class="col-lg-12">
                            <div class="my_dashboard_review">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h4 class="mb30">Location</h4>

                                        <div class="my_profile_setting_input form-group">
                                            <label for="propertyTitle">Name</label>
                                            <input type="text" class="form-control" id="prof_name" name="prof_name" value="<?php echo get_user_info(front_user_id())->name ?>">
                                        </div>

                                        <div class="my_profile_setting_input form-group">
                                            <label for="propertyTitle">LAT :<span id="llat"></span></label>
                                            <br>
                                            <label for="propertyTitle">LONG : <span id="llong"></span></label>

                                        </div>

                                        <div>
                                            <div id="Map" style="height:250px"></div>

                                        </div>





                                    </div>








                                    <div class="col-xl-12">

                                    </div>

                                </div>
                            </div>
                        </div>


                    </form>

                </div>


            </div>
        </div>
</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>

<div id="mobile_verify_mod" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">SMS OTP Verification</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div>
                    <label>Enter Six Digit OTP Code</label><br>
                    <input type="text" id="otp_ins" >

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="otp_submit_otp">Submit</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>