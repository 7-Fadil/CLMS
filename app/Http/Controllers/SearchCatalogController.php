<?php

namespace App\Http\Controllers;

use App\Models\Books;
use App\Models\BorrowBooks;
use App\Models\BookCategory;
use Illuminate\Http\Request;
use App\Models\SearchCatalog;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class SearchCatalogController extends Controller
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
    public function create(Request $request)
    {
        $books = Books::with('books')
                        ->get();

        if($request->search_by)
        {
            if($request->search_by == "category")
            {
                $books = Books::with('books','borrowedBooks')->whereBooksCategoryUuid(BookCategory::whereBookCategoryName($request->search)
                            ->first()
                            ->uuid ?? Null)
                            ->get();
                            dd($books);
            }
            else
            {
            $books = Books::where($request->search_by, "like", "%".$request->search."%")
                                    ->with('borrowedBooks')
                                    ->get();
            }
        }

        if ($books) {
            return view('student.pages.searchCatalog.index', compact('books'));
        }else {
            return redirect()->back()->with('error', "Ooops! :(, Book not found/available");
        }
    }

    public function download($id)
    {
        $bookFile = Books::findOrFail($id);
        return response()->download(storage_path("app/public/{$bookFile->book_pdf}"));
        // // Define the full path to the file
        // $pathToFile = storage_path('public/' . $bookFile->book_pdf);

        // if(!file_exists($pathToFile))
        // {
        //     return response()->json(['error' => 'File not found.'], Response::HTTP_NOT_FOUND);
        // }

        // return response()->download($pathToFile, $bookFile->books_name);
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
    public function show(SearchCatalog $searchCatalog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SearchCatalog $searchCatalog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SearchCatalog $searchCatalog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SearchCatalog $searchCatalog)
    {
        //
    }
}
