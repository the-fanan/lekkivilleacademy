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
    //
    public function showGetClientDetails(Request $request) 
    {
        session(['tutorial_package' => $request->package]);//store tutor data in session
        return "in progress";
    }
}
