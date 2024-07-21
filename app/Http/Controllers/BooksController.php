<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\Books;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookCategory = BookCategory::all();
        return view('admin.pages.Books.index', [
            'bookCategorys' => $bookCategory
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'bookName'=>'required',
            'isbnNumber'=>'required|alpha_num|unique:books,isdn_number',
            'authorName'=>'required',
            'bookImg'=>'required'
        ]);

        $book = Books::create([
            'uuid' => str::orderedUuid(),
            'bookCategoy_uuid' => $request->booksCategory,
            'book_name' => $request->bookName,
            'isbn_nmuber' => $request->isbnNumber,
            'author' => $request->authorName,
            'book_img' => $request->bookImg ? $request->bookImg->store('public/bookImage'):null
        ]);

        if ($book) {
            return to_route('create.book')->with('success', 'Data insertion successfull');
        }else {
            return redirect()->back()->with('error', 'A problem arose');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Books $books)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Books $books)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Books $books)
    {
        //
    }
}
