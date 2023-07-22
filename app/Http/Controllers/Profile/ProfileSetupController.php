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
        assert($request->user()->fill($request->validated()) == true);

        $request->user()->markProfileAsComplete();

        assert($request->user()->save() == true);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
}