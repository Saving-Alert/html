<div class="dropdown">
    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
    <ul id="myDropdown" class="dropdown-content">
        <li><a href="<?php echo base_url(); ?>/Account"><span class="flaticon-layers"></span> Account</a></li>
        <li><a href="<?php echo base_url(); ?>/SubmitDonation"><span class="flaticon-envelope"></span> Submit Donation</a></li>

    <?php
        if(ami_reciver()){
           echo '<li><a href="'.base_url().'/RequestDonation"><span class="flaticon-home"></span>Blood Request</a></li>';
        }
    
    ?>

        
        <li><a href="<?php echo base_url(); ?>/Manage"><span class="flaticon-heart"></span> Manage</a></li>
        <li><a href="<?php echo base_url(); ?>/Tracking"><span class="flaticon-heart"></span> Tracking</a></li>
        <li><a href="<?php echo base_url(); ?>/Profile"><span class="flaticon-magnifying-glass"></span> Profile</a></li>	
        <li><a href="<?php echo base_url(); ?>/Location"><span class="flaticon-magnifying-glass"></span> Location</a></li>
    </ul>

</div>