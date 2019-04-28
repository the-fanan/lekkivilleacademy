<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use \Carbon\Carbon;
use App\User;
use App\TutorApplication;
use App\Package;
use App\State;
use Paystack;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    //

    public function showCheckout(Request $request)
    {
        $states = State::all(['id','name']);
        $tutor = User::find(session('tutor'));
        $package = Package::find(session('tutorial_package'));
        if (is_null($tutor) || is_null($package)) {
            return redirect(route('select-tutor'));
        } else if (!$tutor->hasRole('tutor')) {
            return redirect(route('select-tutor'));
        }
        return view('checkout')->with('tutor', session('tutor'))->with('package', session('tutorial_package'))->with('states', $states);
    }

    public function packagePaymentRedirectToGateway(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|email',
            'amount' => 'required|numeric',
            'metadata' => 'required',
            'state' => 'required|numeric',
            'lga' => 'required|numeric',
            'durationKind' => 'required|string',
            'durationValue' => 'required|numeric',
            'reference' => 'required',
            'key' => 'required'
        ]);
        
        $packageId = session('tutorial_package');
        $package = Package::find($packageId);
        $pricing = $package->getPackagePricing($request->lga,$request->state);
        //validate price here
        if ($pricing == NULL) {
            return back()->with('error','Error occurred, Please refresh the page and try again');
        }
        $unitPrice = $pricing[$request->durationKind];
        $requiredPrice = $unitPrice * $request->durationValue * 100;
        if ($requiredPrice != $request->amount) {
            return back()->with('error','Error occurred, Please refresh the page and try again');
        }
        
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    public function paymentCallback(Request $request)
    {

    }
}
