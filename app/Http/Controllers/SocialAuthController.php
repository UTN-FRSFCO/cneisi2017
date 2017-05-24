<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App;

class SocialAuthController extends Controller
{
    public function redirect(String $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(App\SocialAccountService $service, String $provider, Request $request)
    {
        if( ! $request->input('code')) {
            return redirect()->to('/')->withWarning(trans('auth.denied_access'));
        }
            $user = $service->createOrGetUser(Socialite::driver($provider));

            auth()->login($user);

        return redirect()->to('/');


    }

}
