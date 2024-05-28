<ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
    <li>
        <a href="<?php echo base_url() ?>"><span class="title">Home</span></a>
        <!-- Level Two-->
    </li>
    <li>
        <!-- <a href="<?php //echo base_url() ?>/Donations"><span class="title">Donations</span></a> -->

        <!-- Level Two-->
    </li>

    <li>
        <a href="<?php echo base_url() ?>/Requests"><span class="title">Blood Requests</span></a>

    </li>

    <li class="last">
        <a href="<?php echo base_url() ?>/Contact"><span class="title">Contact</span></a>
    </li>

    <?php

    $log_btn = '<li class="list-inline-item list_s"><a href="#" class="btn flaticon-user" data-toggle="modal" data-target=".bd-example-modal-lg"> <span class="dn-lg">Login/Register</span></a></li>';

    if(isset($_SESSION['front_logged_in'])){
        if($_SESSION['front_logged_in']){

            echo '
								<li>
									<a href="'.base_url().'/Account"><span class="title">Account</span></a>
									<ul>
										<li><a href="'.base_url().'/Account">Account</a></li>
										<li><a href="'.base_url().'/Logout">Logout</a></li>
										
									</ul>
								</li>
								';

        }else{
            echo $log_btn;
        }

    }else{
        echo $log_btn;
    }

    ?>

    <!-- <li class="list-inline-item add_listing head_btn_submit_don"><a href="#" id="head_btn_submit_don"><span class="flaticon-plus"></span><span class="dn-lg" > Submit Donation</span></a></li> -->

</ul>