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

class PackageController extends Controller
{
    public function getPackagePricing(Request $request)
    {
       $package = Package::find($request->package);
        if ($package->hasSpecialLgaPricing($request->lga)) {
            $parray = json_decode($package->specialPricing);
            return (array)$parray;
        } else if ($package->hasSpecialStatePricing($request->state)) {
            $parray = json_decode($package->specialPricing);
            return (array)$parray;
        } else {
            $parray = json_decode($package->default_price_details);
            return (array)$parray;
        }
    }
}
