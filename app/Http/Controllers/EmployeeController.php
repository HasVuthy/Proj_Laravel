<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee; // Import the Employee model


class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('employee.index', compact('employees')); 
        //return view('employee.index' , ['employee'=>$employees]);
    }
    public function create(){
        return view('employee.create');
    }
    // the store function use to get data from front end 
    public function store(Request $request){
        //dd($request->name); //or dd($request);
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'position'=>'required',
        ]);
        Employee::create($data);
        return redirect(route('employee.index'));
    }

    // for Edit function
    public function edit(Employee $employee){
        return view('employee.edit', ['employee' => $employee]);
    }

    // logical update

    public function update(Employee $employee , Request $request){
        $data = $request->validate([
            'name'=>'required',
            'email'=>'required',
            'position'=>'required',
        ]);
        $employee->update($data);
        return redirect(route('employee.index'));
    }

    //delete function

    public function destroy(Employee $employee){
        $employee->delete();
        return redirect(route('employee.index'));
    }
}
