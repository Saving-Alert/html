<?php

namespace App\Controllers\Login;
use App\Controllers\BaseController;

class Verify extends BaseController
{
    public function index()
    {   
        helper(["form"]);

        $data = [];

        $data["dynamic"] = $this->session->get('front_dynamic_login');
        
        if(!$this->session->get('front_logged_in') && $this->session->get('front_valid')){

            if($this->request->getMethod() == "post"){

                $rules = array(
                    'user_password' => array(
                        'field' => 'user_password', 'label' => $data["dynamic"] ? 'Verification Code' : 'Password', 'rules' => 'required|min_length[6]|max_length[100]|',
                    )
                );

                if($this->validate($rules)){

                    $password = $this->request->getVar('user_password');

                    $front_id = $this->session->get('front_id');
                    $front_login = $this->session->get('front_dynamic_login');
                    
                    $ret_data = (model("App\Models\Login\FrontLoginModel"))->login_confirm($password, $front_id, $front_login);

                    if($ret_data["valid"] == true ){

                        $this->session->set("front_logged_in", true);
                        return redirect()->to(base_url(). "/Account");

                    }

                    return view("login/verify", $data);

                }else{
                    return view("login/verify", $data);
                }

            }else{
                echo view("login/verify", $data);
            }

        }else{
            
            return redirect()->to(base_url());

        }
    }

    

}