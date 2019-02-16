<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TutorController extends Controller
{
    public function showTutors()
    {
        $tutors = User::whereHas('roles', function($q){ $q->where('name', 'tutor'); })->get();
        return view('tutors')->with('tutors', $tutors);
    }

    public function showSelectLesson(Request $request)
    {
        if(!isset($request->tutor)) {
            return redirect(route('select-tutor'));
        }
        return view('select-lesson')->with('tutor', $request->tutor);
    }
}
