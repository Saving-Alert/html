<?php

namespace App\Controllers;

class Account extends BaseController
{
    public function __construct(){
        helper("shuja");
    }


    public function index()
    {

        if(is_user_logged()){

            //echo get_cur_otp();

            echo view('header');
            echo view('account');
            echo view('footer');
            echo view('scripts/account_script.php');


        }




    }
}