<?php

namespace App\Http\Controllers;

use App\Models\Faculty;
use App\Models\Curriculum;
use App\Models\Department;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\CourseOfStudy;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\StoreCuriculumRequest;
use App\Http\Requests\StoreCourseOfStudyRequest;

class AdminController extends Controller
{
    /** Method for main dashboard */
    public function dashboard()
    {
        return view('admin.pages.dashboard');
    }//end method
    /** Method for login */
    public function loginForm()
    {
        return view('admin.auth.login');
    }//end method
    /** Method for checking auth user */
    public function login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();

        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password'] ])) {
            return redirect()->route('admin.dashboard')->with('success', 'You have successfully login to the admin dshboard : ) ');
        }else {
            return redirect()->back()->with('error', 'Ooops you have entered an invalid email or password');
        }
    }//end method
    /** Logout Method */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success', 'You have successfully logout.');
    }//end method
    /** Profile method */
    public function profile()
    {
        return view('admin.pages.profile.profile');
    }
    /** Method for viewing Department */
    public function viewDepartment()
    {
        $fetch=Department::with('faculty')->get();
        $faculty = Faculty::all();
        return view('admin.pages.department.index', [
            'departments'=>$fetch,
            'facultys' => $faculty
        ]);
    }//end method
    /** Method for storng Department */
    public function storeDepartment(Request $request)
    {
        $this->validate($request, [
            'department' => 'required|unique:departments,department_name|alpha'
        ]);
        $department=Department::create([
            'uuid'=>Str::orderedUuid(),
            'faculty_uuid'=>$request->faculty,
            'department_name'=>$request->department
        ]);

        if ($department) {
            return to_route('create.department')->with('success', 'Record successfully inserted');
        }else {
            return redirect()->back()->with('error', 'something went wrong');
        }
    }//end method
    /** Method for updating Departemtn */
    public function updateDepartment(Department $department, Request $request)
    {
        Department::where('uuid', $department->uuid)->update([
            'department_name'=>$request->department,
            'is_Active'=>$request->status
        ]);
        return to_route('create.department')->with('success', 'Record successfully updated');
    }//end method
    /** Method for deleting department */
    public function deleteDepartment(Department $department)
    {
        $department->delete();
        return to_route('create.department')->with('success', 'Department successfully deleted');
    }//end method
    /** Method for viewing course of study */
    public function viewCourse()
    {
        $courses=CourseOfStudy::with('couseOfStudy')->get();
        $department=Department::all();
        return view('admin.pages.courseOfStudy.index', [
            'departments'=>$department,
            'courses'=>$courses
        ]);
    }//end method
    /** Method for storing courese of study */
    public function storeCourseOfStudy(StoreCourseOfStudyRequest $request)
    {
        dd($request->department);
        $courses=CourseOfStudy::create([
            'uuid'=>Str::orderedUuid(),
            'department_uuid'=>$request->department,
            'course_of_study'=>$request->courseOfStudy,
            'short_name'=>$request->shortName
        ]);
        return to_route('create.courses')->with('success', 'Course of study successfully inserted');
    }//end method
    /** Method for updating course of study */
    public function updateCourses(Request $request, CourseOfStudy $courseOfStudy)
    {
        CourseOfStudy::where('uuid', $courseOfStudy->uuid)->update([
            'course_of_study'=>$request->courseOfStudy,
            'short_name'=>$request->shortName,
            'status'=>$request->status
        ]);
        return to_route('create.courses')->with('success', 'Course of study was successfullly updated');
    }//end method
    /** Curriculum method */
    public function curriculum(Request $request)
    {
        $courses=Curriculum::with('curriculum')->get();
        $department=Department::with('department')->get();
        return view('admin.pages.curriculum.index',[
            'department'=>$department,
            'courses'=>$courses
        ]);
    }//end method
    /** Store curiculum method */
    public function storeCurriculum(StoreCuriculumRequest $request)
    {
        try {
            $curricula=Curriculum::create([
                'uuid'=>Str::orderedUuid(),
                'depatment_uuid'=>$request->department,
                'courseOfStudy_uuid'=>$request->courseOfStudy,
                'course_title'=>$request->courseTitle,
                'course_code'=>$request->courseCode
            ]);
            if ($curricula) {
                return to_route('create.curriculum')->with('success', 'curriculum inserted susccessfully');
            }
        } catch (\Exception $th) {
            return to_route('create.curriculum')->with('error', 'ooOps something went wrong :(');
        }
    }//end method
    public function editCurriculum(Request $request, Curriculum $curriculum)
    {
        // return $request;
        $curriculum->update([
            'course_title'=>$request->courseTitle,
            'course_code'=>$request->courseCode,
            'status'=>$request->status
        ]);
        return to_route('create.curriculum')->with('success', 'Record susscessfully updated');
    }
    public function getCourses($department_uuid)
    {
        $lgas =CourseOfStudy::where('department_uuid',$department_uuid)->orderBy('course_of_study', 'ASC')->get();
        if($lgas){
            $stateLga = '';
            $stateLga .= '<option value="" hidden>-- select course of study --</option>';
            foreach($lgas as $lga){
                $stateLga .=  "<option value='".$lga->uuid."'>".$lga->course_of_study."</option>";
            }
            return $stateLga;
        }
    }//end method
    public function libraryCard()
    {
        return view();
    }//end method

    public function faculty()
    {
        $facultyIndex = Faculty::all();
        return view('admin.pages.faculty.index', [
            'facultys' => $facultyIndex
        ]);
    }//end method

    public function saveFaculty(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'facultyName' => 'required',
            'shortName' => 'required'
        ]);

        $faculty = Faculty::create([
            'uuid' => Str::orderedUuid(),
            'faculty_name' => $request->facultyName,
            'faculty_short_code_name' => $request->shortName
        ]);

        if ($faculty) {
            return to_route('faculty')->with('success', 'Data Insertion Successfull');
        }else{
            return redirect()->back()->with('error', 'Someething went wrong');
        }
    }//end method
}
