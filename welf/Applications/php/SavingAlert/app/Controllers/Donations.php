<?php

namespace App\Controllers;

class Donations extends BaseController
{   
    public function __construct(){
        helper("shuja");
    }

    public function index()
    {
        echo view('header');
        echo view('donations');
        echo view('footer');
        echo view('scripts/login_jax');
        echo view('scripts/donation_page_script');


    }
}
