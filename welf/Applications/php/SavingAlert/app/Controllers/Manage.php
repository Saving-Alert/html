<?php

namespace App\Controllers;

class Manage extends BaseController
{

    public function __construct(){
        helper("shuja");
    }


    public function index()
    {
        if(is_user_logged() && is_user_dynamic(front_user_id()) ){ 

            echo view('header');
            echo view('history');
            echo view('footer');
            
            echo view('scripts/history_page_script.php');

        }

    }


    public function approve(){

        if(is_user_logged()){

            $postData = $this->request->getRawInput(true);

            if($postData["mlt"] != "" && $postData["donttl"] != ""){


                $db = \Config\Database::connect();
    
               

                $builder4 = $db->table("front_claims");

                $datamn4 = [
                    'approved'  => "O",
                ];

                $builder4->where('donation_id', $postData["donttl"]);

                $builder4->update($datamn4);


                ////////////////////////////////////////


                 /////////////////////////////////

                 $builder3 = $db->table("front_claims");

                 $datamn = [
                     'approved'  => "Y",
                 ];
 
                 $builder3->where('id', $postData["mlt"]);
 
                 $builder3->update($datamn);
 
                 ///////////////////////////////////

                 ///////////////////////////////////

                 $builder5 = $db->table("donation_table");
                 $builder5->where('id', $postData["donttl"]);

                 $datamn5 = [
                    'active'  => "S",
                    ];

                 $builder5->update($datamn5);

                 /////////////////////////////////////

                  $email_req = get_user_info(donation_claimed_to($postData["donttl"]))->email;

                  //echo $email_req;

                  mail_me($email_req, "Donation Claimed To You", "Donation you requested through WelfareAro platform is claimed to you");

                 ////////////////////////////////////

                echo json_encode(array("sucess" => true));

            }



        }

    }


    public function reject(){

        if(is_user_logged()){

            $postData = $this->request->getRawInput(true);

            if($postData["mlt"] != "" && $postData["donttl"] != ""){

                $db = \Config\Database::connect();
    
                $builder3 = $db->table("front_claims");

                $datamn = [
                     'approved'  => "R",
                ];
 
                $builder3->where('id', $postData["mlt"]);
 
                $builder3->update($datamn);
 
                echo json_encode(array("sucess" => true));


            }



        }

    }


    public function delete_don(){

        if(is_user_logged()){

            $postData = $this->request->getRawInput(true);

            if($postData["mlt"] != "" ){

                $db = \Config\Database::connect();
    
                $builder3 = $db->table("donation_table");

                $datamn = [
                     'active'  => "D",
                ];
 
                $builder3->where('id', $postData["mlt"]);
 
                $builder3->update($datamn);
 
                echo json_encode(array("sucess" => true));


            }



        }

    }


}
