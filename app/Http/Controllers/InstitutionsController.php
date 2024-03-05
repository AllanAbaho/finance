<?php

namespace App\Http\Controllers;

use App\Models\Institutions;
use Illuminate\Http\Request;

class InstitutionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $institutions = institutions::all();
        return view('institutions.index', ['institutions' => $institutions]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('institutions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $institution = new institutions();
        $institution->name = $request->name;
        $institution->email = $request->email;
        $institution->phone = $request->phone;
        $institution->incorporation_date = $request->incorporation_date;
        $institution->registration_date = $request->registration_date;
        $institution->address = $request->address;
        $institution->website = $request->website;
        $institution->save();

        return redirect('institutions/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(institutions $institutions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $institution = institutions::where('id', $id)->first();
        return view('institutions.edit', ['institution' => $institution]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $institution = institutions::where('id', $id)->first();
        $institution->name = $request->name;
        $institution->email = $request->email;
        $institution->phone = $request->phone;
        $institution->incorporation_date = $request->incorporation_date;
        $institution->registration_date = $request->registration_date;
        $institution->address = $request->address;
        $institution->website = $request->website;
        $institution->save();

        return redirect('institutions/index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(institutions $institutions)
    {
        //
    }
}
