<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('homeheader');
        echo view('home');
        echo view('footer');


    }
}