<?php

namespace App\Http\Middleware;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class RedirectForFirst{



    protected function RedirectForFirst(Request $request, $user)
    {
        if (is_null($user->address)) {
            return redirect('/profile/finish');
             // just set $this->redirectTo = 'redirect/url' $this->redirectTo = '/address';
             // and laravel will then handle the redirect
        }

        // then here update the last_login_at timestamp
    }
}
