<?php

namespace App\Models;

use CodeIgniter\Model;

class DonationRequest extends Model{

    function request_donation($post_data, $location, $front_uid){

        $title = $post_data["dontitile"];
        $description = $post_data["dondescription"];
        $blood_group = $post_data["blood_group"];
        //$food_type = $post_data["frofoodtypel"];
        $quantity = "1";
        $unit = "1";
        $main_area = $post_data["main_area"];
        $sub_area = $post_data["sub_area"];

        $public_phone = $post_data["don_pub_phone"];

        $img_upload_path = $post_data["imgpath"];

        $ret_data = [];

        if(($title != "" && $description != "" && $main_area != "" && $sub_area != "" && $public_phone != "")){

            $data_lm = [
                'front_user_id' => $front_uid,
                'dontation_type' => 'R',
                'image_url' => $location,
                'title' => $title,
                'blood_group' => $blood_group,
                'description' => $description,
                'food_type' => "R",
                'area_1' => $main_area,
                'area_2' => $sub_area,
                'qty' => $quantity,
                'unit' => $unit,
                'rdate' => date("Y-m-d"),
                'rtime' => date("H:i:s"),
                'active' => 'Y',
                'public_phone' => $public_phone
            ];

            $this->db->table('donation_table')->insert($data_lm);

            $ret_data["success"] = true;         

        }else{ 

            $ret_data["success"] = false;  
            if($title == "") $ret_data["dontitile"] = false;
            if($description == "") $ret_data["dondescription"] = false;
            //if($blood_group == "") $ret_data["blood_group"] = false;
            if($title == "") $ret_data["frofoodtypel"] = false;
            if($title == "") $ret_data["main_area"] = false;    
            if($title == "") $ret_data["sub_area"] = false;
            if($title == "") $ret_data["don_pub_phone"] = false;

        }

        return $ret_data;
    }
}