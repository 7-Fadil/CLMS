<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\BorrowBooks;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorroweBookController extends Controller
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
    public function create( )
    {
        $books = Books::where('is_active', 1)
                        ->get();
        $borrowedBook = BorrowBooks::where('student_id', Auth::guard('student')->user()->uuid)->
                            with('books.books','student')->get();
        // return $books;
        return view('student.pages.borroweBook.index', compact('books','borrowedBook'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Books::where('books_name', $request->input('book_title'))->first();
        $student = Auth::guard('student')->user();

        if ($book->isAvailable()) {
            $borrowing = new BorrowBooks();
            $borrowing -> uuid = Str::orderedUuid();
            $borrowing -> book_id = $book->uuid;
            $borrowing -> student_id = $student->uuid;
            $borrowing -> borrow_date = Carbon::now();
            $borrowing -> due_date = Carbon::now()->addDay(14);
            $borrowing->save();

            $book -> is_active == '0';
            $book -> save();

            return redirect()->back()->with('success', 'Book borrowed successfyll');
        }else {
            return redirect()->back()->with('error', 'Book is not available');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BorrowBooks $borroweBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BorrowBooks $borroweBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BorrowBooks $borroweBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BorrowBooks $borroweBook)
    {
        //
    }

    public function borrowedBooks()
    {
        return view('admin.pages.Borrowing.index');
    }
}
