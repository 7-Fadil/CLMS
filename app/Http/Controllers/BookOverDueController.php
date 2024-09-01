<?php

namespace App\Http\Controllers;

use App\Models\BookOverDue;
use App\Models\BorrowBooks;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookOverDueController extends Controller
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
        $borrowedBooks = BorrowBooks::where('student_id', Auth::guard('student')->user()->uuid)
                                    // ->whereDate('due_date',  now())
                                    ->where('status', 1)->with('books')->get();
        return view('student.pages.overdue.index', compact('borrowedBooks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(BookOverDue $bookOverDue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BookOverDue $bookOverDue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookOverDue $bookOverDue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BookOverDue $bookOverDue)
    {
        //
    }

    public function booksOverdue()
    {
        return view('admin.pages.BooksOverDue.index');
    }
}
