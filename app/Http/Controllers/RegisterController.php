<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){
        $validated_data = $request->validate([
            'name'=>'required|regex:/^[A-Z]+$/i',
            'email'=>'required|email|unique:users,email',
            'phone'=>'nullable|numeric',
            'dob'=>'required|before:-18 years',
            'password'=>'required|min:8|max:10|confirmed',
            'image'=>'required|image|mimes:jpg'
        ]);

        return $validated_data;

    }
}
