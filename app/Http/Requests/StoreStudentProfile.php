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
            'phoneNumber' => 'required|numeric|max:11',
            'resedentialAddress' => 'required',
            'nokPhoneNumber' => 'required|numeric|max:11',
            'dob' => 'required|date',
            'gender' => 'required',
            'profileImage' => 'required|mimes:png,jpg|max:250|min:100',
            'nokName' => 'required',
            'nokAddress' => 'required',
            'level' => 'required',
            'disability' => 'required',

        ];
    }
}
