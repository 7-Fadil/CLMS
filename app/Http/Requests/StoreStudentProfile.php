<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentProfile extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'faculty' => 'required',
            'phoneNumber' => 'required|numeric|min:11|unique:student_profiles,phone_number',
            'resedentialAddress' => 'required',
            'nokPhoneNumber' => 'required|numeric|min:11|unique:student_profiles,nok_phone_number',
            'dob' => 'required',
            'gender' => 'required',
            'profileImage' => 'required',
            'nokName' => 'required',
            'nokAddress' => 'required',
            'level' => 'required',
            'disability' => 'required',
            'department' => 'required'

        ];
    }
}
