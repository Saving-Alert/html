<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class Tracking extends BaseController
{

    public function __construct(){
        helper("shuja");
    }

    public function index()
    {

        if(is_user_logged()){

            echo view('header');
            echo view('tracking_page');
            echo view('footer');
            echo view('scripts/tracking_script');
            

        }


    }

   

}
