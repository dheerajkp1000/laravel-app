<?php

namespace App\Http\Controllers;
use App\Models\CrudApp;

use Illuminate\Http\Request;

class CrudAppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.create');

    }

      public function store(Request $request)
    {
         $request->validate([
         'name' => 'required',
         'email'=> 'required|email',
         'phone' => 'required',
         'status'=> 'required',
         ]);

    CrudApp::create($request->only(['name', 'email', 'phone', 'status'])); // ✅ Yeh line controller me honi chahiye

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
