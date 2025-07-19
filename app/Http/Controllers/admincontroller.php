<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    function home(){
        return view('admin.dashboard');
    }
}
