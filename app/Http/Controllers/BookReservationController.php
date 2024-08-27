<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookReservation as RequestsBookReservation;
use App\Models\BookReservation;
use App\Models\BooksReservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BookReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservedBooks = BooksReservation::where('student_id', Auth::guard('student')->user()->uuid)->get();
        return view('student.pages.bookReservation.index', compact('reservedBooks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestsBookReservation $request)
    {
        // dd($request->all());
        $bookReservation = BooksReservation::create([
            'uuid' => Str::orderedUuid(),
            'book_title' => $request->book_title,
            'author' => $request->book_author,
            'reservation_date' => $request->reservation_date,
            'numbers_of_copies' => $request->num_copies,
            'reservation_duration' => $request->reservation_duration,
            'student_id' => Auth::guard('student')->user()->uuid,
            'notes' => $request->notes,
            'book_format' => $request->book_format
        ]);

        if ($bookReservation) {
            return to_route('book.reservation')->with('success', 'Book successfully reserved');
        }else {
            return redirect()->back()->with('error', 'Something went wrong');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BookReservation $bookReservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookReservation $bookReservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookReservation $bookReservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookReservation $bookReservation)
    {
        //
    }
}
