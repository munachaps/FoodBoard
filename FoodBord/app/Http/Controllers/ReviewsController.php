<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function reviewSuccess(){
        return view('/review_success');
    }
    public function reviews(){
        return view('/reviews');
    }

    public function store(Request $request)
    {
            $validator = Validator::make($request->all(), [
                'phone_number' => 'required|',
                'email' => 'required',
                'comments'=>'required'
            ],    
        );
        if(!$validator){
            return redirect()->with('Missing details');
        }

        $reviews = Reviews::create([ 
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'comments' => $request->input('comments'),
          ]);  

          $reviews->save();

          return redirect()->route('review-success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reviews $reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reviews $reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews)
    {
        //
    }
}
