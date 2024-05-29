<?php

namespace App\Http\Controllers;

use App\Models\CashOrder;
use App\Models\Orders;
use App\Models\Reviews;
use App\Models\SystemUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){
        $users = SystemUsers::all()->count();
        $reviews = Reviews::all()->count();
        $cash_orders = CashOrder::all()->count();
        $online_orders = Orders::all()->count();
        return view('admin.home',compact('users','reviews','cash_orders','online_orders'));
    }

    public function addUsers(){
        return view('admin.users.addusers');
    }

    public function createUsers(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required|',
            'email' => 'required',
            'nat_id'=>'required',
            'role' => 'required|',
            'password' => 'required',
        ],    
    );
    if(!$validator){
        return redirect()->with('Missing details');
    }

    $user = SystemUsers::create([ 
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'nat_id' => $request->input('nat_id'),
        'role' => $request->input('role'),
        'password' => Hash::make($request->input('password'))
       
      ]);  

      $user->save();

      return redirect()->back()->with('Success');
    }

    public function viewUsers(){
        $users = SystemUsers::all();
        return view('admin.users.viewusers',compact('users'));
    }

    public function viewCashOrders(){
        $cashers = CashOrder::all();
        return view('admin.orders.view-cash-orders',compact('cashers'));
    }

    public function viewOnlineOrders(){
        $onliners = Orders::all();
        return view('admin.orders.view-online-orders',compact('onliners'));
    }

    public function viewReviews(){
        $reviews = Reviews::all();
        return view('admin.reviews.viewreviews',compact('reviews'));
    }
}
