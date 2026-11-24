<?php

namespace Controllers;

use Routes\Request;

class UserController {
    function create(){
        view("User/create", []);
    }

    function store(){

    }

    function confirm(){
        view("User/confirm", []);
    }

    function accountConfirmed(){
        view("User/confirmedAccount", []);
    }

    function delete(){

    }

    function restorePassword(){
        view("User/restorePassword", []);
    }

    function requestRestorePassword(Request $req){

    }

    function resetPassword(Request $req){
        view("User/resetPassword", []);
    }

    function changePassword(){

    }
}