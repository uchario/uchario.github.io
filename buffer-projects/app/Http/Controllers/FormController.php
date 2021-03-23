<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function create()
    {
        return view('buffer.index');
    }

    public function store(Request $request)

    {

        $validatedData = $request->validate([

                'firstName' => 'required',

                'lastName' => 'required',

                'password' => 'required|min:5',

                'email' => 'required|email|unique:users'

            ], /*[

                'firstName.required' => 'First name is required',

                'lastName.required' => 'Last name is required',

                'password.required' => 'Password is required'

            ]*/);

  

        //$validatedData['password'] = bcrypt($validatedData['password']);

        //$user = User::create($validatedData);

      

        return back()->with('success', 'User created successfully.');

    }

}
