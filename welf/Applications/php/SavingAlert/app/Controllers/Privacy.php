<?php

namespace App\Controllers;

class Privacy extends BaseController
{
    public function index()
    {
        echo view('header');
        echo view('privacy_policy');
        echo view('footer');
        echo view('scripts/login_jax');
        
    }
}