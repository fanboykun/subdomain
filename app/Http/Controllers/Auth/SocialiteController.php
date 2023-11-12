<?php

namespace App\Http\Controllers\Auth;

use App\Enum\OauthProvider;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class SocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try{

            $user = Socialite::driver('google')->user();
            $finduser = User::where('oauth_id', $user->id)->first();
            if($finduser){
                Auth::login($finduser);
                session()->regenerate();
                return redirect()->intended('/dashboard');
            }else{
                $newUser = User::updateOrCreate([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make('password'),
                    'remember_token' => Str::random(10),
                    'oauth_id'=> $user->id,
                    'oauth_provider' => OauthProvider::GOOGLE,
                ]);
                Auth::login($newUser);
                session()->regenerate();
                return redirect()->intended('/dashboard');
            }

        }catch (\Exception $e) {
            dd($e);
            return redirect('/');

        }
    }

    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleFacebookCallback()
    {

    }
}
