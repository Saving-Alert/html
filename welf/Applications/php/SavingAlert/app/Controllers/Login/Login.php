<?php

namespace App\Controllers\Login;
use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {



        if(!$this->session->get('front_logged_in')){


            helper(["url"]);

            $rules = array(
                'user_email' => array(
                    'field' => 'user_email', 'label' => 'Email', 'rules' => 'required|min_length[4]|max_length[100]|valid_email',
                )
            );

            //if($this->request->getMethod() == "post" && $this->request->isAJAX()){

            if($this->request->getMethod() == "post"){



                if($this->validate($rules)){

                    $e_mail = $this->request->getVar('user_email', FILTER_SANITIZE_EMAIL);

                    $login_data = (model("App\Models\Login\FrontLoginModel"))->login_validate($e_mail);

                    if($login_data["valid"]){

                        $logdata = [
                            'front_valid' => $login_data["valid"],
                            'front_id'  => $login_data["id"],
                            'front_email' => $login_data["email"],
                            'front_active' => $login_data["active"],
                            'front_dynamic_login' => $login_data["dyanmic"],
                            'front_logged_in' => false,
                        ];

                        $this->session->set($logdata);

                        echo json_encode(array("success" => true));
                    }

                }else{

                    $response = [
                        'success' => false,
                        'msg' => "There are some validation errors",
                    ];

                    return $this->response->setJSON($response);
                }

            }

        }else{

        }

        //echo view('header');

        //echo view('footer');


    }

}