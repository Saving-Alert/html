<?php

namespace App\Models;

use CodeIgniter\Model;

class SubmitRequest extends Model{

    function submit_donation($post_data, $location, $front_uid){

        $title = $post_data["dontitile"];
        $description = $post_data["dondescription"];
        $food_type = $post_data["frofoodtypel"];
        $quantity = "1";
        $unit = "1";
        $main_area = $post_data["main_area"];
        $sub_area = $post_data["sub_area"];


        $img_upload_path = $post_data["imgpath"];

        $ret_data = [];

        if(($title != "" && $description != "" && $food_type != "" && $main_area != "" && $sub_area != "")){

            $data_lm = [
                'front_user_id' => $front_uid,
                'dontation_type' => 'D',
                'image_url' => $location,
                'title' => $title,
                'description' => $description,
                'food_type' => $food_type,
                'area_1' => $main_area,
                'area_2' => $sub_area,
                'qty' => $quantity,
                'unit' => $unit,
                'rdate' => date("Y-m-d"),
                'rtime' => date("H:i:s"),
                'active' => 'P'
            ];

            $this->db->table('donation_table')->insert($data_lm);

            $ret_data["success"] = true;

        }else{

            $ret_data["success"] = false;
            if($title == "") $ret_data["dontitile"] = false;
            if($description == "") $ret_data["dondescription"] = false;
            if($title == "") $ret_data["frofoodtypel"] = false;
            if($title == "") $ret_data["main_area"] = false;
            if($title == "") $ret_data["sub_area"] = false;


        }

        return $ret_data;

    }
}