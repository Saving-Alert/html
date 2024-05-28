<?php

namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('about_us');
        echo view('footer');
        echo view('scripts/login_jax');
        


    }
}
