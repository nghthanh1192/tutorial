<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}