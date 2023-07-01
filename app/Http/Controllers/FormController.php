<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function submit(Request $request)
    {
        // Handle the form submission logic here
        // You can access the form data using $request->input('field_name')
        
        // Example: Saving form data to the database
        // $name = $request->input('name');
        // $email = $request->input('email');
        // $message = $request->input('message');
        // Your code to save the form data to the database
        
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
