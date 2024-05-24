<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /** Method for creating project */
    public function create()
    {
        return view('admin.pages.project.create');
    }//end method
}
