<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }


    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // Attempt to authenticate the user.
        if ( !auth()->attempt(request(['email', 'passord'])) ) 
        {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        // Reirect to the home page



    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }
}
