<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class firstappcontroller extends Controller
{
    function user(){
        return view ('name');
    }
    function hello(){
        return'hello dheeraj';
    }

    function welcome(){
        return 'welccome to the word';
    }

    function second (){
        return view ('about');
    }
    function wait (){
        return view ("admin.first");
    }
}
