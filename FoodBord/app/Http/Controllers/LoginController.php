<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function handleLogin(Request $request){

      
        $validator = Validator::make($request->all(), [
            'email' => 'required|',
            'password' => 'required',
        ],  
        );

        if(!$validator){
           return redirect()->route('error');
        }

        if(Auth::guard('admin')->attempt(array('email' => $request->input('email'), 'password' =>$request->input('password'))))
        {
           return redirect('/admin/home');
        }
        else{

            return redirect()->route('error');
        }
        
    }

    public function loginError(){
        return view('auth.loginerror');
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }

}
