<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){

        return view('registration');
    }

    public function verify(Request $req){
        

    }
}
