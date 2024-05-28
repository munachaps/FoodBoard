<?php

namespace App\Http\Controllers;

use App\Models\CashOrder;
use App\Models\Orders;
use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrdersController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'transfer' => 'required|',
            'total' => 'required',
            'username'=>'required',
            'phone-number' => 'required|',
            'email' => 'required',
            'address'=>'required',
            'message' => 'required|',
            'terms' => 'required',
        ],    
    );
    if(!$validator){
        return redirect()->with('Missing details');
    }

    $reviews = CashOrder::create([ 
        'transfer' => $request->input('transfer'),
        'total' => $request->input('total'),
        'username' => $request->input('username'),
        'phone-number' => $request->input('phone-number'),
        'email' => $request->input('email'),
        'address' => $request->input('address'),
        'message' => $request->input('message'),
        'terms' => $request->input('terms')
      ]);  

      $reviews->save();

      return redirect()->route('order-success');
    }

    public function storeCashOrder(Request $request){
        $validator = Validator::make($request->all(), [
            'transfer' => 'required|',
            'total' => 'required',
            'username'=>'required',
            'phone-number' => 'required|',
            'email' => 'required',
            'address'=>'required',
            'message' => 'required|',
            'terms' => 'required',
        ],    
    );
    if(!$validator){
        return redirect()->with('Missing details');
    }

    $reviews = CashOrder::create([ 
        'transfer' => $request->input('transfer'),
        'total' => $request->input('total'),
        'username' => $request->input('username'),
        'phone-number' => $request->input('phone-number'),
        'email' => $request->input('email'),
        'address' => $request->input('address'),
        'message' => $request->input('message'),
        'terms' => $request->input('terms')
      ]);  

      $reviews->save();

      return redirect()->route('order-success');
    }

    public function orderSuccess(){
        return view('/order-success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders   $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }
}
