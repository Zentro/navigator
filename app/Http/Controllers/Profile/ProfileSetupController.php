<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileSetupRequest;

class ProfileSetupController extends Controller
{
    /**
     * Display the profile setup view.
     */
    public function create(Request $request): View
    {
        return view('profile.setup');
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileSetupRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        $request->user()->save();

        $request->user()->markProfileAsComplete();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}