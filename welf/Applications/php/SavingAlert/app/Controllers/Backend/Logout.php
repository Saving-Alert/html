<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function __construct(){
        helper("shuja");
    }

    public function index()
    {
        
        
        if(is_back_user_logged()){


                if(session_destroy()){
                    echo '<script>location.href = "'.base_url().'/Backend/Login"</script>';
                }
    
            

        }
        

        
    }



}
