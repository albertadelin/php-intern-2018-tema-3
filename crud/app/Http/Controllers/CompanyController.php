<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Employee;


class CompanyController extends Controller
{
    public function create(){

        return view('companies.create');

    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required|min:2'
        ]);

        Company::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        

        return redirect('/');

    }

    public function edit($id){


        $company = Company::find($id);

        return view('companies.update',compact('company','id'));
    }

    public function update(Request $request, $id){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $company= Company::find($id);

        $company->name = $request->get('name');
        $company->description = $request->get('description');

        $company->save();

        return redirect('/');


    }



    public function destroy($id){

        $company = Company::find($id);
        $employees = Employee::all();

        
        $employees->foreign('company_id')->references('id')->on('company')->onDelete('cascade');

        $company->delete();

        return redirect('/')->with('success','Successfully deleted the company!');

    }
}
