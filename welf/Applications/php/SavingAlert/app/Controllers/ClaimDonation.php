<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class ClaimDonation extends BaseController
{

    public function __construct(){
        helper("shuja");
    }

    public function index(){
        
        $postData = $this->request->getRawInput(true);

        if(is_user_logged()){

            if($postData["don_id"] != ""){
            
                if(claim_check(front_user_id(), $postData["don_id"])){
                    
                    echo json_encode(array("success" => false));
    
                    return true;
                }
    
                if(!user_phone_verified()){
    
                    echo json_encode(array("phone" => true, "message" => "You must verify your phone number to claim donations"));
                    
                    return true;
                }
                
                $db3 = \Config\Database::connect();
    
                $builder3 = $db3->table("front_claims");
                 
                $data = [
                    'donation_id' => $postData["don_id"],
                    'requester_id' => front_user_id(),
                    'donator_id' => get_donator_id( $postData["don_id"]),
                    'message' => $postData["message"],
                    'rdate' => date("Y-m-d"),
                    'rtime' => date("H:i:s"),
                    'listed_donation' => 'Y',
                    'req_qty' => '1',
                    'approved' => 'N',
                ];
                
                $builder3->insert($data);
    
                echo json_encode(array("success" => true));
    
            }else{
                echo json_encode(array("success" => false));
            }


        }

        

        

    }


}
