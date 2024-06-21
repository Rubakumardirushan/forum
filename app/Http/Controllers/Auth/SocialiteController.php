<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialiteController extends Controller
{
    
    public function redirectToGitHub()
    {
        return Socialite::driver('github')->redirect();
    }

    
    public function handleGitHubCallback()
    {
        try {
            $githubUser = Socialite::driver('github')->user();
        } catch (\Exception $e) {
            return redirect('/')->withErrors(['msg' => 'Error logging in with GitHub']);
        }

       
        $user = User::where('github_id', $githubUser->id)->first();
$userid=$githubUser->id;

        if (!$user) {
          
            $user = User::create([
                'name' => $githubUser->name ?? $githubUser->nickname,
                'email' => $githubUser->email,
                'github_id' => $userid,
                'email_verified_at' => now(),
                'avatar' => $githubUser->avatar,
                
            ]);
           
        }

        
        Auth::login($user);

        
        return redirect('/');
    }
}

