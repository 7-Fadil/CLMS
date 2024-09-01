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
        $bookCategory = BookCategory::with('booksCategory')->get();
        $book = Books::all();
        return view('admin.pages.Books.index', [
            'bookCategorys' => $bookCategory,
            'books' => $book,
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
            'isbnNumber'=>'required|alpha_num|unique:books,isbn_number|min:11',
            'authorName'=>'required',
            'bookPdf'=>'nullable|file|mimes:pdf|max:2048',
            'bookImg'=>'max: 2058|mimes:png,jpg'
        ]);
        $file = $request->file('bookImg');
        $nameFile = $file->getClientOriginalName();
        $file->move(public_path("bookImage/"), $nameFile);

        if ($request->hasFile('bookPdf'))
        {
            $file = $request->file('bookPdf');
            $filePath = $file->store('books', 'public');
        }else
        {
            $filePath = null;
        }
        // $bookPdf = $request->file('bookPdf');
        // $master = $bookPdf->getClientOriginalName();
        // $bookPdf->move(public_path("bookPdf/"), $master);

        $book = Books::create([
            'uuid' => str::orderedUuid(),
            'books_category_uuid' => $request->booksCategory,
            'books_name' => $request->bookName,
            'isbn_number' => $request->isbnNumber,
            'author' => $request->authorName,
            'book_pdf' => $filePath,
            'book_img' => "bookImage/$nameFile"
        ]);

        if ($book) {
            return to_route('create.book')->with('success', 'Book added successfull');
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
    }//end method

    public function bookCategory(){
        $allBookCategory = BookCategory::all();
        return view('admin.pages.BookCategory.index', [
            'bookCategorys'=>$allBookCategory]
        );
    }//end method
    public function bookCategoryPost(Request $request)
    {
        $this->validate($request, [
            'bookCategory' => 'required|unique:book_categories,book_category_name'
        ]);
        $bookCategory = BookCategory::create([
            'uuid' => Str::orderedUuid(),
            'book_category_name' => $request->bookCategory
        ]);

        if ($bookCategory) {
            return to_route('book.category')->with('success', 'Record successfully inseted');
        }

    }
}
