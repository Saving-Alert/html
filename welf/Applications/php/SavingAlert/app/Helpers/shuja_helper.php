<?php

function front_user_id(){
    $session = session();
    return $session->get('front_id');
}


function ami_reciver(){
    if(get_user_info(front_user_id())->reciver == "Y"){
		return true;
	}else{
        return false;
    }
}

function get_donator_id($donation_id){

    $db = \Config\Database::connect();

    $builder = $db->table("donation_table");

    $builder->select("front_user_id");
    $builder->where("id", $donation_id);
    $query = $builder->get();

    $row = $query->getRow();

    return $row->front_user_id;

}


function claim_check($requester_id, $donation_id){

    $db = \Config\Database::connect();

    $builder = $db->table("front_claims");

    $builder->where("requester_id", $requester_id);
    $builder->where("donation_id", $donation_id);

    $query = $builder->get();

    if($query->getNumRows() >= 1){
        return true;
    }else{
        return false;
    }

}

function own_donation_check($donation_id, $front_id){

    $db = \Config\Database::connect();

    $builder = $db->table("donation_table");

    $builder->where("id", $donation_id);
    $builder->where("front_user_id", $front_id);

    $query = $builder->get();

    if($query->getNumRows() >= 1){
        return true;
    }else{
        return false;
    }

}

function user_phone_verified(){

    $db = \Config\Database::connect();

    $builder = $db->table("front_users");

    $builder->select("phone_verified");
    $builder->where("id", front_user_id());
    $query = $builder->get();

    $row = $query->getRow();

    if($row->phone_verified == "Y"){
        return true;
    }else{
        return false;
    }

}

function get_phone_number(){

    $db = \Config\Database::connect();

    $builder = $db->table("front_users");

    $builder->select("phone_number");
    $builder->where("id", front_user_id());
    $query = $builder->get();

    $row = $query->getRow();

    return $row->phone_number;

}


function is_user_logged(){

    $session = session();

    if($session->get('front_logged_in')){
        return true;
    }else{
        return false;
    }

}

function send_mobile_otp($mobile_number){

    $session = session();

    $rand_int_six = random_int(100000, 999999);

    if(strlen($mobile_number) == 10){

        $session->set("mobile_otp", $rand_int_six);

        

        $url = "https://gateway.nixilo.com/sms.php?user=shuja-linux&pass=0814204236&phone=".$mobile_number."&message=".$rand_int_six;

        //echo $url;

        $contents = file_get_contents($url);

        //echo $rand_int_six;


    }

}


function get_cur_otp(){

    $session = session();

    return $session->get('mobile_otp');

}

function get_user_info($front_id){

    $db = \Config\Database::connect();

    $builder = $db->table("front_users");

    $builder->select("*");
    $builder->where("id", $front_id);
    $query = $builder->get();

    $row = $query->getRow();

    return $row;


}


function donation_claimed_to($donation_id){

    $db = \Config\Database::connect();

    $builder = $db->table("front_claims");

    $builder->select("*");
    $builder->where("donation_id", $donation_id);
    $builder->where("approved", "Y");
    $query = $builder->get();

    $row = $query->getRow();

    $donator_id = $row->requester_id;



    return $donator_id;

}


function is_back_user_logged(){

    $session = session();

    if($session->get('logged_in')){
        return true;
    }else{
        return false;
    }

}

function get_donation_data($don_id){

    $db = \Config\Database::connect();

    $builder = $db->table("donation_table");

    $builder->select("*");
    $builder->where("id", $don_id);
    $query = $builder->get();

    $row = $query->getRow();

    return $row;


}

function mail_me($to_m, $subject, $message){

    $email = \Config\Services::email();

    $email->setTo($to_m);
    $email->setFrom('test@sftpanthiya.com', 'WelfareAro');

    $subject = $subject;

    $message = $message;


    $email->setSubject($subject);
    $email->setMessage($message);

    $email->send();

}

function is_user_dynamic($user_id){

    $dynamic =  get_user_info($user_id)->dynamic_login;

    if($dynamic == "Y"){
        return true;
    }else{
        return false;
    }

}




?>
