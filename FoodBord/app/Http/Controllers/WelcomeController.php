<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function home(){
        return view('/welcome');
    }

    public function addreview(){
        return view('/addreview');
    }

    public function contact(){
        return view('/contact');
    }


 
}
