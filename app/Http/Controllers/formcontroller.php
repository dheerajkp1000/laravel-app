<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    function adduser(){
         echo'user-form';
    }
    function showform(){
        return view('user-form');
    }
}

