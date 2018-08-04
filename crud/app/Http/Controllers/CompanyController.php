<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function create(){

        return view('companies.create');

    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        Company::create([
            'name' => request('name'),
            'description' => request('description')
        ]);

        

        return redirect('/');

    }
}
