<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function googleCallback(){
        $googleUser = Socialite::driver('google')->user();
        $data = User::Where('email', $googleUser->email)->first();
        if($data){
            Auth::login($data);
            return redirect()->route('welcome');
        }else{
            $data = User::create([
                'name' => $googleUser->name,
                'email'=>$googleUser->email,
                'password'=>'default_password',
                'role' => 'user',
           ]);
           Auth::login($data);
           return redirect()->route('welcome');
        }
    }
}
