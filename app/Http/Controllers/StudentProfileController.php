<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class StudentProfileController extends Controller
{
    public function studentProfile()
    {
        $department = Department::all();
        return view('student.pages.profile.index', [
            'departments' => $department
        ]);
    }//end method

    public function storeStudentProfile(Request $request)
    {
        dd($request->all());
    }//end method
}
