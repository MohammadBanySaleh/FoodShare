<?php

namespace App\Http\Controllers;
use App\Models\UserDonation;
use App\Models\User;
use App\Models\PaymentDetails;
use App\Models\Donation;


use App\Models\Other;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'donation-phone' => 'required|regex:/^07\d{8}$/',
            'donation-address' => 'required|string',
            'description' => 'required',
        ], [
            'donation-phone.required' => 'Please enter your phone number.',
            'donation-phone.regex' => 'Please enter a valid phone number as 07XXXXXXXX.',
            'donation-address.required' => 'Please enter your address.',
            'donation-address.string' => 'The address must be a valid string.',
            'description.required' => 'Please provide some additional information.',

        ]);
        $user_idd = auth()->user()->id;

        User::where('id', $user_idd)->update([
            'mobile'=>$request->input('donation-phone'),
            'address'=>$request->input('donation-address')
        ]);

        $other = new Other();
        $other->user_id = $user_idd;
        $other->description = $request->input('description');
        $other->save();

        return redirect('/')->with('success', 'Your donation has been submit successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $singleDonation = Donation::where('id', $id)->first();
        if (Auth::check()) {
            return view('Pages.other');
        } else {

            return view('auth.login');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Other $other)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Other $other)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other $other)
    {
        //
    }
}
