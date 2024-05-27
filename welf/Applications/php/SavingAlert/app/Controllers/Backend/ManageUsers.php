<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class ManageUsers extends BaseController
{
    public function __construct(){
        helper("shuja");
    }

    public function index()
    {
             
        if(is_back_user_logged()){

            echo view('backend/header');
            echo view('backend/sidebar');
            echo view('backend/manage_users');
            echo view('backend/footer');
            echo view('backend/mange_script');

        }
        

    }

    public function approve(){

        if(is_back_user_logged()){

            $postData = $this->request->getRawInput(true);

            if($postData["don_id"] != "" ){
                $ver = $postData["ver"];
                $ver = ($ver == 'Yes') ? 'N' : 'Y';

                $db = \Config\Database::connect();

                $builder3 = $db->table("front_users");

                $datamn = [
                    'dynamic_login'  => $ver,
                ];

                $builder3->where('id', $postData["don_id"]);

                $builder3->update($datamn);



                if($ver == "Y"){


                    /////////////////////////////////

                    // $builder_up = $db->table("front_users");

                    // $builder_up->where("phone_number", get_user_info($postData["don_id"])->phone_number);

                    // $datamn_up = [
                    //     'dynamic_login'  => "N",
                    // ];

                    // $builder_up->update($datamn_up);

                    /////////////////////////////////



                    $builder4 = $db->table("donation_table");

                    $datamn4 = [
                            'active'  => "D",
                    ];

                    $builder4->where('front_user_id', $postData["don_id"]);

                    $builder4->update($datamn4);



                }

                



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

    public function enable_requester(){

        if(is_back_user_logged()){

            $postData = $this->request->getRawInput(true);
            
            if($postData["don_id"] != ""){

                $ver = $postData["ver"];
                $ver = ($ver == 'Y') ? 'N' : 'Y';

                $db = \Config\Database::connect();

                $builder3 = $db->table("front_users");

                $datamn = [
                    'reciver'  => $ver,
                ];

                $builder3->where('id', $postData["don_id"]);

                $builder3->update($datamn);


                echo json_encode(array("sucess" => true));

            }

        }


    }


}
