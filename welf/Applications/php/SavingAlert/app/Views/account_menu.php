<ul class="list-group list-group-flush">
    <!-- <li class="list-group-item"><a href="<?php //echo base_url(); ?>/SubmitDonation"> Submit Donation </a></li> -->

    <?php
    if(ami_reciver()){
        echo '<li class="list-group-item"> <a href="'.base_url().'/RequestDonation">Blood Request</a> </li> ';
    }

    ?>


    <li class="list-group-item"> <a href="<?php echo base_url(); ?>/Manage"> Manage </a> </li>
    <li class="list-group-item"> <a href="<?php echo base_url(); ?>/Tracking"> Tracking </a> </li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>/Profile"> Profile </a></li>
    <li class="list-group-item"><a href="<?php echo base_url(); ?>/Location"> Location </a></li>
</ul>