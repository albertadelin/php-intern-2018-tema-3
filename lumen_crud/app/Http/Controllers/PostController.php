<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
use App\Company;

class PostController extends Controller
{
    public function show(){

        $employees = Employee::all();

        return view('layouts.table', compact('employees'));

    }

    

    public function store(){

        
        
    }
}
