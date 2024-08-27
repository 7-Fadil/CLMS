<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookReservation extends FormRequest
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
            'book_title' => 'required|unique:books_reservations,book_title',
            'book_author' => 'required',
            'reservation_date' => 'required',
            'num_copies' => 'required',
            'reservation_duration' => 'required',
            'notes' => 'required',
            'book_format' => 'required'
        ];
    }
}
