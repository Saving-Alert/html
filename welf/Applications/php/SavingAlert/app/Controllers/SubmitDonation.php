<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class SubmitDonation extends BaseController
{   

    public function __construct(){
        helper("shuja");
    }


    public function index()
    {   

        if(is_user_logged()){

            if(user_phone_verified() && is_user_dynamic(front_user_id()) ){

                echo view('header');
                echo view('submit_donation');
                echo view('footer');
                echo view('scripts/submit_jax.php');

            }else{

                echo '<script>window.location.replace("'.base_url().'/Profile")</script>';

            }

        }

            

    }

    public function submit_donation(){

        if(is_user_logged() && is_user_dynamic(front_user_id()) ){

            $postData = $this->request->getVar(null);

            $location = "";

            $location2 = "empty_image/empty.jpg";

            if($postData["badu_have"] != "false"){

                if($_FILES['file']['name'] != ''){
                    $test = explode('.', $_FILES['file']['name']);
                    $extension = end($test);
                    $name = uniqid().rand(100,999).'.'.$extension;
        
                    $location = '/home/welf/domains/welfarearo/uploads/'.$name;
        
                    $location2 = $name;
        
                        if(move_uploaded_file($_FILES['file']['tmp_name'], $location)){
        
                        }
                }

            }

            $front_uid = $this->session->get('front_id');
    
            $submit_mod = model("App\Models\Account\SubmitRequest", false);
    
            $ret_data = $submit_mod->submit_donation($postData, $location2, $front_uid);

            echo json_encode($ret_data);

        }

    }

}
