<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function __construct(){
        helper("shuja");
    }

    public function index()
    {
        echo view('header');
        echo view('contact_us');
        echo view('footer');
        echo view('scripts/login_jax');
        echo view('scripts/contact_page_script');



    }

    function contact_xyz(){

        $postData = $this->request->getVar(null);

        $e_mail = $postData["form_email"];



        if($e_mail != ""){



            if($postData["form_name"] != "" && $postData["form_phone"] != "" && $postData["form_subject"] != "" && $postData["form_message"] != "" && $postData["form_email"] != "" ){

                mail_me("welfarearo@gmail.com", $postData["form_subject"], $postData["form_email"] . '<br>' . $postData["form_name"] . '<br>' .  $postData["form_message"] . '<br>' . $postData["form_phone"] );

                echo json_encode(array("success" => true));

            }else{
                echo json_encode(array("success" => false));
            }

        }else{
            echo json_encode(array("success" => false));
        }

    }
}