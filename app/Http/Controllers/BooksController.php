<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Support\Str;
use App\Models\BookCategory;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.Books.index');
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
        //
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
    }//end route
    public function bookCategory(){
        $allBookCategory = BookCategory::all();
        return view('admin.pages.BookCategory.index', [
            'bookCategorys'=>$allBookCategory]
        );
    }//enc method
    public function bookCategoryPost(Request $request)
    {
        // return $request;
        $bookCategory = BookCategory::create([
            'uuid' => Str::orderedUuid(),
            'book_category_name' => $request->bookCategory
        ]);

        return to_route('book.category')->with('success', 'Record successfully inseted');
    }
}
