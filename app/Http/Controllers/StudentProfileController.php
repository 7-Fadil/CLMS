<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentProfile;
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

    public function storeStudentProfile(StoreStudentProfile $request)
    {
        // dd($request->all());
    }//end method
}
