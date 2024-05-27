<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {



        echo view('backend/header');
        echo view('backend/sidebar');
        echo view('backend/dashboard');
        echo view('backend/footer');


    }

}