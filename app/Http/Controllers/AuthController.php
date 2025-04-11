<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
     return view('auth.login');   //
    }

    public function register()
    {
     return view('auth.signup');   //
    }
    
    // use Illuminate\Support\Facades\Auth;

    public function authenticate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',  // Just check for a valid email
            'password' => 'required'
        ]);
    
        // Attempt to authenticate the user
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed, redirect to home with success message
            return redirect()->route('home')->with('success', 'Successfully logged in');
        } else {
            // Authentication failed, return with error message
            return back()->with('error', 'Invalid credentials. Please try again.');
        }
    }
    
// 
    
    /**
     * Show the form for creating a new resource.
     */
   
    /**
     * Store a newly created resource in storage.
     */
    // public function storeUser(Request $request)
    // {
    //   $request->validated([
    //         'name'=>'nullable',
    //         'email'=>'required|email:users',
    //         'password'=>'required|min:8|max:12'
    //     ]);
    //     User::create($request->validated());
    //     return view('auth.login')->with('success','user registered  ');
    // }
    public function storeUser(Request $request)
{
    // Validate the request data
    $validated = $request->validate([
        'name' => 'nullable|string|max:255', // 'name' should be string, max length of 255
        'email' => 'required|email|unique:users,email', // Make sure the email is unique in users table
        'password' => 'required|max:12' // Password should be between 8 to 12 characters
    ]);

    // Hash the password before storing it
    $validated['password'] = bcrypt($validated['password']);

    // Create a new user with the validated data
    User::create($validated);

    // Redirect to login with success message
    return redirect()->route('loginRoute')->with('success', 'User registered successfully');
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
