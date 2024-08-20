<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreStudent;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    }//end method

    // method for creating a student
    public function createStudent(Request $request)
    {
        $this->validate($request, [
            'firstName' => 'required',
            'surname' => 'required',
            'otherName' => 'required',
            'password' => 'required|alpha_num',
            'confirmPassword' => 'required|same:password',
            'emailAddress' => 'required|email|unique:students,email_address',
            'matricNumber' => 'required|unique:students,matric_number',
        ]);

        $student = Student::create([
            'uuid' => Str::orderedUuid(),
            'first_name' => $request->firstName,
            'surname' => $request->surname,
            'other_name' => $request->otherName,
            'email_address' => $request->emailAddress,
            'matric_number' => $request->matricNumber,
            'password' => Hash::make($request->password)
        ]);

        if ($student) {
            return to_route('student.login')->with('success', 'Account successfully created');
        }else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }
}
