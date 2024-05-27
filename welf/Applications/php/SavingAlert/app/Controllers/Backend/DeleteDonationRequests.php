<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class DeleteDonationRequests extends BaseController
{
    public function __construct(){
        helper("shuja");
    }

    public function index()
    {
        
        
        if(is_back_user_logged()){

            echo view('backend/header');
            echo view('backend/sidebar');
            echo view('backend/delet_donation_request');
            echo view('backend/footer');
            echo view('backend/delet_donation_request_script');

        }
        

        
    }


    public function reject(){

        if(is_back_user_logged()){

            $postData = $this->request->getRawInput(true);

            if($postData["don_id"] != "" ){

                $db = \Config\Database::connect();

                $builder3 = $db->table("donation_table");

                $datamn = [
                        'active'  => "D",
                ];

                $builder3->where('id', $postData["don_id"]);

                $builder3->update($datamn);

                echo json_encode(array("sucess" => true));


            }
    
    
        }
 

    }


}