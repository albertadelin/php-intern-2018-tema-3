<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class EmployeeController extends Controller
{


    public function create(){

        $companies = Company::all();

        return view('employees.create', compact('companies'));

    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'company_id' => 'required'
        ]);

        Employee::create([
            'name' => request('name'),
            'company_id' => request('company_id')
        ]);

        return redirect('/');

    }

    public function destroy($id){

        $employee = Employee::find($id);
        $employee->delete();

        return redirect('/')->with('success','Successfully deleted the employee!');

    }

    public function edit($id){

        $employee = Employee::find($id);
        $companies = Company::all();

        return view('employees.update',compact('employee','companies','id'));
    }

    public function update(Request $request, $id){

        $this->validate(request(), [
            'name' => 'required',
            'company_id' => 'required'
        ]);

        $employee= Employee::find($id);

        $employee->name = $request->get('name');
        $employee->company_id = $request->get('company_id');

        $employee->save();

        return redirect('/');


    }
}
