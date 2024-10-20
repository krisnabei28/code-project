<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function create(){
        return view('registration', [
            "title" => "Registration"
        ]);
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'fullname' => ['required', 'string', 'max:255'],
            'username' => [
                'required', 
                'string', 
                'regex:/^(?=.*[a-zA-Z])(?=.*[0-9])[a-zA-Z0-9]+$/',
                'max:255', 
                'unique:users,username'
            ], 
            'phone_number' => [
                'required', 
                'regex:/^\+628\d{8,11}$/' 
            ], 
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
    
        //dd($validatedData);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        return redirect('/registration')->with('success', 'Silahkan Login!');

    }
    

}
