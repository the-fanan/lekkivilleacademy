<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \Carbon\Carbon;
use App\User;
use App\TutorApplication;
use App\Package;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
<<<<<<< HEAD
    public function showUsers()
    {
        $users = User::whereHas('roles', function($q){ $q->where('name', 'tutor'); })->get();
        return view('users')->with('users', $users);
    }

    //
    public function showGetClientDetails(Request $request)
=======
    //
    public function showGetClientDetails(Request $request) 
>>>>>>> ef095f33a17bef2ab355906518afd81c352d88be
    {
        session(['tutorial_package' => $request->package]);//store tutor data in session
        //if already authenticated then redirect to checkout
        if (Auth::check()) {
            return redirect(route('checkout'));
        }
        session(['register_redirect' => 'checkout']);
        return view('customer-details');
    }
}
