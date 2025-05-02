<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormValidationOne extends Controller
{
    public function showForm()
    {
        return view('formvalidationone');
    }

    public function validateData(Request $request)
    {
        $request->validate([
            "name" => 'required',
            "email" => 'required|email',
            "password" => 'required|min:8',
            "confirm_password" => 'required|same:password',
            "age" => 'required|integer|min:18|max:65',
            'city' => 'required|alpha_num', // fixed typo 'alphanum' → 'alpha_num'
            'gender' => 'required|in:male,female,other',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:10',
        ], [
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'email.email' => 'Email must be a valid email address',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters long',
            'confirm_password.required' => 'Confirm Password is required',
            'confirm_password.same' => 'Confirm Password must match Password',
            'age.required' => 'Age is required',
            'age.integer' => 'Age must be an integer',
            'age.min' => 'Age must be at least 18',
            'age.max' => 'Age must not exceed 65',
            'city.required' => 'City is required',
            'city.alpha_num' => 'City must contain only letters and numbers'
        ]);

        return $request->all(); // or redirect with success
    }
}