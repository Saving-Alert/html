<?php

namespace App\Models;

use CodeIgniter\Model;

class LoginModel extends Model
{
    function login_me($email, $password){

        $data = [];

        $crypt_password = password_hash($password, PASSWORD_BCRYPT);
        $builder = $this->db->table("sys_users");
        $builder->select("*");
        $builder->where("email", $email);
        $builder->where("status", "Y");
        $query = $builder->get();

        if($query->getNumRows() >= 1){
            if(password_verify($password, $query->getRow()->password)){

                $row = $query->getRow();

                $data["login"] = true;
                $data["id"] = $row->id;
                 
                $data["email"] = $row->email;
                $data["active"] = true;

            }else{
                $data["login"] = false;
            }
        }else{
            $data["login"] = false;
        }

        return $data;
    }
}