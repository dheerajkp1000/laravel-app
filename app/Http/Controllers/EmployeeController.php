<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function dashboard()
    {
   $employees = Employee:: orderBy('created_at','desc')->get();
    return view('employee.dashboard', ['employees'=>$employees]);    
}
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
    'name' => 'required|max:10',
              'designation'=> 'required',
            'department'=> 'required'

        ]);
        Employee::create($request->only(['name','designation','department']));
    return redirect()->route('employee.dashboard')->with('success', 'Data saved successfully!');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }
  
  public function edit($id)
{
    $employee = Employee::findOrFail($id);
    return view('employee.edit', compact('employee'));
}

    public function update(Request $request, string $id)
{
    $request->validate([
        'name' => 'required|max:10',
        'designation' => 'required|max:10',
        'department' => 'required'
    ]);

    $employee = Employee::findOrFail($id);
    $employee->update($request->only(['name','designation','department']));

    return redirect()->Route('employee.dashboard')->with('success', 'Form updated successfully!');
}

    /**
     * Remove the specified resource from storage.
     */
   public function destroy($id)
{
    $employee = Employee::findOrFail($id);
    $employee->delete();

    return redirect()->back()->with('success', 'Employee deleted successfully!');
}

}
