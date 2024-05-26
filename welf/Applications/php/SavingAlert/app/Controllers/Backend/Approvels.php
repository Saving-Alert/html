<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class Approvels extends BaseController
{
    public function __construct(){
        helper("shuja");
    }

    public function index()
    {


        if(is_back_user_logged()){

            echo view('backend/header');
            echo view('backend/sidebar');
            echo view('backend/approvels');
            echo view('backend/footer');
            echo view('backend/approvel_script');

        }



    }

    public function approve(){

        if(is_back_user_logged()){

            $postData = $this->request->getRawInput(true);

            if($postData["don_id"] != "" ){

                $db = \Config\Database::connect();

                $builder3 = $db->table("donation_table");

                $datamn = [
                    'active'  => "Y",
                ];

                $builder3->where('id', $postData["don_id"]);

                $builder3->update($datamn);

                echo json_encode(array("sucess" => true));


            }


        }


    }

    public function reject(){

        if(is_back_user_logged()){

            $postData = $this->request->getRawInput(true);

            if($postData["don_id"] != "" ){

                $db = \Config\Database::connect();

                $builder3 = $db->table("donation_table");

                $datamn = [
                    'active'  => "R",
                ];

                $builder3->where('id', $postData["don_id"]);

                $builder3->update($datamn);

                echo json_encode(array("sucess" => true));


            }


        }


    }


}