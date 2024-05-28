<?php

namespace App\Controllers;

class Terms extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('terms_and_cond');
        echo view('footer');
        echo view('scripts/login_jax');



    }
}