<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User2;

class LoginController extends Controller
{
    //
    public function getLoginPage(){
        
        return view('login');
    }
    public function login(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $user = User2::where('email', $request->email)->first();
        
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            if (Auth::check()) {
                return redirect()->route('getHomePage'); 
            } else {
                return back()->withErrors(['email' => 'Authentication failed.']);
            }
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function signup(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users2,email',
            'password' => 'required|min:4',
            'name' => 'required',
            'phone' => 'required|numeric',
        ], [
            'email.unique' => 'This email is already in use.',
            'phone.numeric' => 'The phone number must be a numeric.',
        ]);

    
        // Create a new user with the validated data
        $user = new User2();
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->name = $validatedData['name'];
        $user->phone = $validatedData['phone'];
    
        // Save the user to the database
        $user->save();
        return redirect()->route('getLoginPage'); 
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }



    public function getSignupPage(){

        return view('signup');
    }
    public function getAccountPage(){
        $userId = Auth::id();
        $user = User2::where('id', $userId)->first();
        return view('account', compact('user'));
    }
    public function UpdateProfile(Request $request){
        $validatedData = $request->validate([
            'password' => 'nullable|min:4',
            'name' => 'required',
            'phone' => 'required|numeric',
        ]);
        
        $id=Auth::id();
        $user = User2::findOrFail($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

    
        // Save the user to the database
        $user->save();
        return redirect()->route('getAccountPage'); 
    }
}
