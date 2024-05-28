<?php

namespace App\Controllers;

class RequestDonation extends BaseController
{

    public function __construct(){
        helper("shuja");
    }

    public function index()
    {

        if(is_user_logged()){

            if(user_phone_verified() && is_user_dynamic(front_user_id())  ){

                $veri_pps = get_user_info(front_user_id())->reciver;

                if($veri_pps == "Y"){

                    echo view('header');
                    echo view('request_blood');
                    echo view('footer');
                    echo view('scripts/request_jax.php');

                }else{
                    echo '<script>alert("You must be a registerd charitable org to submit donation requests"); history.back();</script>';
                }


            }



        }





    }


    public function request_donation(){

        if(is_user_logged()){

            $postData = $this->request->getVar(null);

            $location = "";

            $location2 = "empty_image/empty.jpg";

            // if($postData["badu_have"] != "false"){

            //     if($_FILES['file']['name'] != ''){
            //         $test = explode('.', $_FILES['file']['name']);
            //         $extension = end($test);
            //         $name = uniqid().rand(100,999).'.'.$extension;

            //         $location = '/home/welf/domains/welfarearo/uploads/'.$name;

            //         $location2 = $name;

            //             if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){

            //             }
            //     }

            // }

            $front_uid = $this->session->get('front_id');

            $submit_mod = model("App\Models\Account\DonationRequest", false);

            $ret_data = $submit_mod->request_donation($postData, $location2, $front_uid);

            echo json_encode($ret_data);

        }

    }



}