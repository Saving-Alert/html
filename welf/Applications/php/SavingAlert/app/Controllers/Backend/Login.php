<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        
        helper(['form']);

        $rules = array(
            'email_sh' => array(
                'field' => 'email_sh', 'label' => 'Email', 'rules' => 'required|min_length[4]|max_length[100]|valid_email',
            ),
            'password_sh' => array(
                'field' => 'password_sh', 'label' => 'Password', 'rules' => 'required|min_length[4]|max_length[256]',
            ),
        );

        if($this->request->getMethod() == "post"){

            if($this->validate($rules)){
                
                $e_mail = $this->request->getVar('email_sh', FILTER_SANITIZE_EMAIL);
                $password = $this->request->getVar('password_sh');

                $sess_data = (model("App\Models\Backend\LoginModel"))->login_me($e_mail, $password);

                if($sess_data["login"]){
                    
                    $data["log_r"] = true;

                    $logdata = [
                        'id'  => $sess_data["id"],
                        'email' => $sess_data["email"],
                        'status' => $sess_data["active"],
                        'logged_in' => true,
                    ];
                    
                    $this->session->set($logdata);

                    return view('backend/login', $data);
                    
                }else{
                    $data["swalfire"] = true;

                    return view('backend/login', $data);
                }

            }else{
                $data["validation"] = $this->validator;
                
                return view('backend/login', $data);
            }

        }    
        
        return view('backend/login');
    }
}