<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \Carbon\Carbon;
use App\User;
use App\TutorApplication;
use App\Package;
use App\State;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    //

    public function showCheckout(Request $request)
    {
        $states = State::all(['id','name']);
        return view('checkout')->with('tutor', session('tutor'))->with('package', session('tutorial_package'))->with('states', $states);
    }
}
