<?php

namespace Controllers;

use Core\Auth;
use Core\JustArray\JustArray;
use Core\Validator;
use Models\User;
use Routes\Request;

class AuthController {
    function login(Request $req){
        view('Auth/login', [], "Layouts/auth");
    }

    function loginIn(Request $req){
        $body = $req->getBody();

        $validator = new Validator($body, [
            "email" => 'required|exists:users,id',
            "password" => 'required',
        ]);

        $errorBag = $validator->validate();

        if($errorBag->hasErrors()) redirectTo("/login");

        $user = Auth::attempt(
            JustArray::find($body, 'email'),
            JustArray::find($body, 'password'),
            false
        );

        if($user == null) {
            $errorBag->add("The password doesn't match, try again.", 'password', true);
            redirectTo("/login");
        }

        redirectTo("/");
    }
    function logout(Request $req){

    }
}