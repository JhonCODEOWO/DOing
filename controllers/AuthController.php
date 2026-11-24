<?php

namespace Controllers;

use Core\Validator;
use Routes\Request;

class AuthController {
    function login(Request $req){
        view('Auth/login', [], "Layouts/auth");
    }

    function loginIn(Request $req){
        $body = $req->getBody();

        $validator = new Validator($body, [
            "email" => 'required',
            "password" => 'required',
        ]);

        $invalid = $validator->validate()->hasErrors();

        if($invalid) redirectTo("/login");
    }
    function logout(Request $req){

    }
}