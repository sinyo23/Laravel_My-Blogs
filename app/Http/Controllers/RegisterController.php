<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
      return view('register.index', [
        'title' => 'Register'
        ]);
    }
    
    public function store(Request $request)
    {
      $validatedData = $request->validate([
        'name' => 'required|max:255',
        'username' => 'required|min:5|max:255|unique:users',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|max:255'
        ]);
        
        $validatedData['password'] = bcrypt($validatedData['password']);
        
        User::create($validatedData);
        
        // $request->session()->flash('success', 'Registration Successfull');
        
        return redirect('/login')->with('success', 'Registration Successfull');
    }
}
