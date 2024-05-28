<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Profile extends BaseController
{

    public function __construct(){
        helper("shuja");
    }

    public function index()
    {

        if(is_user_logged()){

            echo view('header');
            echo view('profile_page');
            echo view('footer');
            echo view('scripts/submit_jax.php');
            echo view('scripts/profile_page_script.php');

        }


    }

    public function verify_phone(){

        if(is_user_logged()){

            $postData = $this->request->getRawInput(true);

            if($postData['phone_number'] != ""){

                if(strlen($postData['phone_number']) != 10){

                    echo json_encode(array("success" => "invalid", "message" => "Invalid Number"));
                    return true;

                }

                if(user_phone_verified() && (get_phone_number() == $postData['phone_number'])){

                    echo json_encode(array("success" => "true", "message" => "This Phone Number Is Already Verified"));

                }else{

                    
                    ///////////////////////////////////////////////////////////////

                    $db4 = \Config\Database::connect();

                    $buider_select = $db4->table("front_users");

                    $buider_select->select("*");

                    $buider_select->where("phone_number", $postData["phone_number"]);
                    $buider_select->where("dynamic_login", "N");

                    $query_sel = $buider_select->get();


                    if($query_sel->getNumRows() >= 1){

                        $builder5 = $db4->table("front_users");

                        $datamn_L = [

                            'dynamic_login' => "N",

                        ];

                        $builder5->where("id", front_user_id());
                        $builder5->update($datamn_L); 

                        

                    }else{

                        send_mobile_otp($postData["phone_number"]);

                        echo json_encode(array("success" => "otp", "message" => "OTP Sent To : " . $postData['phone_number']));

                        return true;

                    }


                    ////////////////////////////////////////////////////////////////

                    
                }

            }else{

                echo json_encode(array("success" => "invalid", "message" => "Invalid Number"));

            } 



        }


    }


    public function confirm_otp(){

        $postData = $this->request->getRawInput(true);

        if(is_user_logged() && $postData["ot_otp_ot"] != ""){

            $session = session();

            if($session->get("mobile_otp") == $postData["ot_otp_ot"]){
                
                $db4 = \Config\Database::connect();

                $datamn = [
                    'phone_number' => $postData["phone_number"],
                    'phone_verified'  => "Y",
                ];

                $builder4 = $db4->table("front_users");
                $builder4->where('id', front_user_id());
                $builder4->update($datamn);
                
                
                
                //print_r($datamn);

                ///////////////////////////////////////////////////////////////////////////////


                // $buider_select = $db4->table("front_users");

                // $buider_select->select("*");

                // $buider_select->where("phone_number", $postData["phone_number"]);
                // $buider_select->where("dynamic_login", "N");

                // $query_sel = $buider_select->get();


                // if($query_sel->getNumRows() >= 1){

                //     $builder5 = $db4->table("front_users");

                //     $datamn_L = [

                //         'dynamic_login' => "N",

                //     ];

                //     $builder5->where("phone_number", $postData["phone_number"]);
                //     $builder5->update($datamn_L); 


                //     ////Delete Donations /// Delete Claims

                //     foreach ($query_sel->getResult() as $row) {

                //         $builder6 = $db4->table("donation_table");

                //         $datamn6 = [
                //                 'active'  => "D",
                //         ];

                //         $builder6->where('front_user_id', $row->id);

                //         $builder6->update($datamn6);

                        
                //         // $builder7 = $db4->table("front_claims");


                //     }

                    

                // }

                                                  

                echo json_encode(array("success" => true));

                return true;

            }else{

                echo json_encode(array("success" => false));

                return true;

            }

        }

    }


    public function save_name_s(){

        $postData = $this->request->getRawInput(true);

        if(is_user_logged() && $postData["my_name_is"] != "" && $postData["nic"] != "" && $postData["dob"] != "" && $postData["weight"] != "" && $postData["height"] != ""){

            $db4 = \Config\Database::connect();

            $datamn = [
                'name' => $postData["my_name_is"],
                'nic' => $postData["nic"],
                'dob' => $postData["dob"],
                'gender' => $postData["gender"],
                'blood_group' => $postData["blood_type"],
                'weight' => $postData["weight"],
                'height' => $postData["height"],
                
            ];

            $builder4 = $db4->table("front_users");
            $builder4->where('id', front_user_id());
            $builder4->update($datamn);
            

            echo json_encode(array("success" => true));

            return true;
            

        }else{
            echo json_encode(array("success" => false));
        }


    }

}
