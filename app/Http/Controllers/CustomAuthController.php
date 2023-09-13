<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Donation;
use App\Models\User;
use App\Models\UserDonation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;




class CustomAuthController extends Controller
{
    public function login(){
        return view ('dashboard.dashboard_login');
    }

    public function loginUser(Request $request){
        $categories = Category::all();
        $users = User::all();
        $Donation = Donation::all();
        $UserDonation = UserDonation::all();

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:20'
        ]);
        
        $admin = Admin::where('email', $request->email)->first();
        
        if ($admin) {
            if ($request->password == $admin->password) {
                $request->session()->put('id', $admin->id);
                $categoryCount = Category::count();
                $userCount = User::count();
                $DonationCount = Donation::count();
                $UserDonationCount = UserDonation::count();
                // dd($categoryCount);
                
                return view('welcome-dashboard', [
                    'categoryCount' => $categoryCount,
                    'userCount' => $userCount,
                    'DonationCount' => $DonationCount,
                    'UserDonationCount' => $UserDonationCount
                ]);
                            } else {
                return back()->with('fail', 'Password does not match');
            }
        } else {
            return back()->with('fail', 'This email is not registered');
        }
        
         

      

    }
    // public function home(){
    //     // return view('home');
    //     $data=array();

    //     if(Session::has ('id'))
    //     {
    //         $data=admin::where('id','=',Session::get ('id'))->first();
    //     }
    //     return view('home',compact('data'));
    // }
    public function logout(){
        if (Session::has ('id')){
            Session::pull('id');
        }
        return view ('dashboard.dashboard_login'); // Redirect to the login page after logout.
    }

    public function sidebar(){
        $categoryCount = Category::count();
                $userCount = User::count();
                $DonationCount = Donation::count();
                $UserDonationCount = UserDonation::count();
                // dd($categoryCount);
                
                return view('welcome-dashboard', [
                    'categoryCount' => $categoryCount,
                    'userCount' => $userCount,
                    'DonationCount' => $DonationCount,
                    'UserDonationCount' => $UserDonationCount
                ]);
    }
    
}