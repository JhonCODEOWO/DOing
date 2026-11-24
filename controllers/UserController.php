<?php

namespace Controllers;

use Core\Validator;
use Routes\Request;

class UserController {
    function create(){
        view("User/create", [], "Layouts/auth");
    }

    function store(Request $req){
        $body = $req->getBody();

        $validator = new Validator($body, [
            "name" => 'required',
            "last_name" => 'required',
            "email" => 'required|email',
            "password" => 'required',
            "password_confirmation" => 'required|confirmed:password',
        ]);

        $errorBag = $validator->validate();

        if($errorBag->hasErrors()) redirectTo("/account/create");

        //Create account

        //Send a email if success

        redirectTo("account/confirm");
    }

    function confirm(){
        view("User/confirm", [], "Layouts/auth");
    }

    function accountConfirmed(){
        view("User/confirmedAccount", []);
    }

    function delete(){

    }

    function restorePassword(){
        view("User/restorePassword", [], "Layouts/auth");
    }

    function requestRestorePassword(Request $req){

    }

    function resetPassword(Request $req){
        view("User/resetPassword", [], "Layouts/auth");
    }

    function changePassword(){

    }
}