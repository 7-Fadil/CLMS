<?php

namespace App\Http\Middleware;

use App\Models\StudentProfile;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureApplicantProfileExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $checkStudentProfile = StudentProfile::where('student_login_uuid', '=', Auth::guard('student')->user()->uuid)->exists();

        if ($checkStudentProfile == false)
        {
            return to_route('student.profile')->with('error', 'You have to complete your profile before proceeding');
        }

        return $next($request);
    }
}
