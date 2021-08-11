<?php

namespace App\Http\Controllers\Web;

use App\Models\Messages;
use App\Models\Settings;
use Source\Http\Request;
use Source\Support\Session;
use Source\Validation\Validator;
use Source\View\View;

class ContactController
{
    public function index()
    {
        $data['settings'] = Settings::connect_table()->select()->getOne();

        View::load('web/contact/index',$data);
    }

    public function send()
    {
        $session = new Session;
        $request = new Request;

        extract($_POST);

        $requset_data= [
            [
                'name'  => 'name',
                'value' => $name,
                'rules' => 'required|str'
            ],
            [
                'name'  => 'email',
                'value' => $email,
                'rules' => 'required|email'
            ],
            [
                'name'  => 'phone',
                'value' => $phone,
                'rules' => 'required|numeric'
            ],
            [
                'name'  => 'message',
                'value' => $message,
                'rules' => 'str'
            ]
        ];
        
        $errors = Validator::make($requset_data);

        if(! empty($errors)) {
            $session = new Session;
            $session->set("errors", $errors);
        } else {
            Messages::connect_table()->insert([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
            ])->save();
        }

        $request->redirect("contact-us");
    }
}