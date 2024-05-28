<?php

namespace App\Models;

use CodeIgniter\Model;

class FrontLoginModel extends Model
{
    function login_validate($email){

        $data = [];

        $builder = $this->db->table("front_users");
        $builder->select("*");
        $builder->where("email", $email);
        $builder->where("active", "Y");
        $query = $builder->get();

        $rand_int_six = random_int(100000, 999999);

        if($query->getNumRows() >= 1){

            $row = $query->getRow();

            $dyn = false;

            if($row->dynamic_login == "Y") {
                $dyn = true; 
                $this->send_mail($email, $rand_int_six);
            }

            $data["valid"] = true; 
            $data["id"] = $row->id;
            $data["email"] = $row->email;
            $data["active"] = $row->active; 
            $data["dyanmic"] = $dyn;

            $builder->set('dynamic_code', $rand_int_six, false);
            $builder->where('id', $row->id);
            $builder->update();
            

        }else{
            
            $data_ins = [
                'email' => $email,
                'active'  => 'Y',
                'dynamic_login' => 'Y',
                'dynamic_code' => $rand_int_six,
            ];
            
            $this->db->table('front_users')->insert($data_ins);

            $data["valid"] = true;
            $data["id"] = $this->db->insertID();
            $data["email"] = $email;
            $data["active"] = "Y";
            $data["dyanmic"] = true; 

            $this->send_mail($email, $rand_int_six);

        }

        
        return $data;

    }

    function login_confirm($password, $front_id, $front_login){
        
        $builder = $this->db->table("front_users");
        $builder->select("*");
        $builder->where("id", $front_id);
        $builder->where("active", "Y");
        $query = $builder->get();

        if($query->getNumRows() >= 1){

            $row = $query->getRow();

            $data = [];


            if($front_login){
                if($row->dynamic_code == $password){
                    $data["valid"] = true;
                }else{
                    $data["valid"] = false;
                }

            }else{
                //write bcrypt stuff here
            }

            return $data;
        }


        
    }

    function send_mail($to, $key){

        $email = \Config\Services::email();
        $email->setTo($to);
        $email->setFrom('shuja@kuppiya.lk', 'OTP Verification');

        $subject = "Confirm Registration";

        $message = 'Please enter the 6 digit OTP to verify your email - ' . $key;

        
        $email->setSubject($subject);
        $email->setMessage($message);

        $email->send(); 
		

    }
}