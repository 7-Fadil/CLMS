<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\StudentProfile;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreStudentProfile;
use App\Models\FacultyHasDepartment;

class StudentProfileController extends Controller
{
    public function studentProfile()
    {
        $profile = StudentProfile::all();
        $department = Department::all();
        $faculty = Faculty::all();
        return view('student.pages.profile.index', [
            'departments' => $department,
            'facultys' => $faculty,
        ]);
    }//end method

    public function storeStudentProfile(StoreStudentProfile $request)
    {
        // return $request;
        $profile = StudentProfile::create([
            'uuid' => Str::orderedUuid(),
            'student_login_uuid' => Auth::guard('student')->user()->uuid,
            'firstname' => Auth::guard('student')->user()->first_name,
            'surname' => Auth::guard('student')->user()->surname,
            'othername' => Auth::guard('student')->user()->other_name,
            'matric_number' => Auth::guard('student')->user()->matric_number,
            'faculty_uuid' => $request -> faculty,
            'department_uuid' => $request -> department,
            'gender' => $request -> gender,
            'birth_date' => $request -> dob,
            'phone_number' => $request -> phoneNumber,
            'email_address' => $request -> emailAddress,
            'residencial_address' => $request -> resedentialAddress,
            'nok_name' => $request -> nokName,
            'nok_address' => $request -> nokAddress,
            'nok_phone_number' => $request -> nokPhoneNumber,
            'photo_path' => $request -> profileImage
        ]);

        if ($profile) {
            return to_route('student.profile')->with('success', 'Data insertion successfull');
        }
    }//end method

    public function  getDepartment($facultyUuid)
    {
      // return "hello";
    //   return $facultyUuid;
        $departments = FacultyHasDepartment::where('faculty_uuid', $facultyUuid)
                                            ->with('department')
                                            ->get();
        if($departments){
            $facultyDepartment = '';
            $facultyDepartment .= '<option value="" hidden>Select Department</option>';
            foreach($departments as $department){
                $facultyDepartment .=  "<option value='".$department->id."'>".$department->department->department_name."</option>";
            }
            return $facultyDepartment;
        }
    }
}
