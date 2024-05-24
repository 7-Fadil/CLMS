<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;
use App\Http\Requests\StoreStudent;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function dashboard()
    {
        return view('student.pages.dashboard');
    }
    public function view()
    {
        return view('student.auth.login');
    }//end method
    public function login(Request $request)
    {
        // dd($request->all());
        $check=$request->all();
        if (Auth::guard('student')->attempt(['matric_number'=>$check['matricNumber'], 'password'=>$check['password']])) {
            return to_route('student.dashboard')->with('success', 'Welcome to student panel');
        } else {
            return to_route('student.login')->with('error', 'You have entered an invalid matric number or password');
        }
    }//end method
    public function logout()
    {
        Auth::guard('student')->logout();
        return to_route('student.login')->with('success', 'You have successfully logout');
    }
}
