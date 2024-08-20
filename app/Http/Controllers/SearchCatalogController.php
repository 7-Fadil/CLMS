<?php

namespace App\Http\Controllers;

use App\Models\SearchCatalog;
use Illuminate\Http\Request;

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
    public function create()
    {
        return view('student.pages.searchCatalog.index');
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
