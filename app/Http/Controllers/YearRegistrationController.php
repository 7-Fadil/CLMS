<?php

namespace App\Http\Controllers;

use App\Models\YearRegistration;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
class YearRegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $year=YearRegistration::all();
        return view('admin.pages.year.index', [
            'years'=>$year
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
        $this->validate($request, [
            'yearName'=>'required|numeric',
        ]);

        YearRegistration::create([
            'uuid'=>Str::orderedUuid(),
            'year_name'=>$request->yearName
        ]);
        return to_route('add.year')->with('success', 'Year record save successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(YearRegistration $yearRegistration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(YearRegistration $yearRegistration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, YearRegistration $yearRegistration)
    {
        $year=YearRegistration::where('uuid', $yearRegistration->uuid)->update([
            'is_active'=>$request->status
        ]);
        if ($year) {
            return to_route('add.year')->with('success', 'Record updated successfully');
        }else {
            return to_route('add.year')->with('error', 'Failed to update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(YearRegistration $yearRegistration)
    {
        $deleteYear = YearRegistration::where('uuid', $yearRegistration->uuid)->delete();
        if ($deleteYear) {
            return to_route('add.year')->with('success', 'Year deleted successfully');
        } else {
            return to_route('add.year')->with('error', 'Something went wrong');
        }
    }
}
