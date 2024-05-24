<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'fullName'=>['required','string'],
            'email'=>['required','email'],
            'password'=>['required','max:8'],
            'cgpa'=>['required','min:2.5','max:5.0'],
            'dob'=>['required'],
            'courseOfStudy'=>['required'],
            'phone_number'=>['required'],
            'gender'=>['required'],
            'picture'=>['required'],
            'department'=>['required'],
            'level'=>['required']
        ];
    }
}
