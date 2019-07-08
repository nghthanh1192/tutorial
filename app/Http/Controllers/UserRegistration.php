<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserRegistration extends Controller
{
    public function postRegister(Request $request) {
        //Retrieve the name input field
        $name = $request->input('name');
        echo 'Name: '.$name;
        
        //Retrieve the username input field
        $username = $request->username;
        echo '<br>Username: '.$username;

        //Retrieve the password input field
        $password = $request->password;
        echo '<br>Password: '.$password;
    }

    public function setCookie(Request $request) {
        $minute = 1;
        $username = $request->username;
        $password = $request->password;
        $response = new Response('Hello World');
        $response->withCookie(cookie('username', $username, $minute));
        $response->withCookie(cookie('password', $password, $minute));
        return $response;
    }

    public function getCookie(Request $request) {
        $username = $request->cookie('username');
        $password = $request->cookie('password');
        echo $username ." - " .$password;
    }
}