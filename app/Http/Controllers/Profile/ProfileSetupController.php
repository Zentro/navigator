<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfileSetupController extends Controller
{
    /**
     * Display the profile setup view.
     */
    public function create(Request $request): View
    {
        return view('profile.finish-setup');
    }
}