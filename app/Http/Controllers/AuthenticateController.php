<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    //Handle login
    public function login(Request $request)
    {
        $credentials = $request->all();
        $user = User::where('email', $credentials['email'])->first();
        if(Hash::check($credentials['password'],$user->password)){
            Auth::login($user);
            return redirect()->route('home');
        }else{
            return redirect()->route('landing-page');
        }

    }

    public function createNewUser(Request $request)
    {
        $credentials = $request->all();

        Log::info('credentials:' , [$credentials]);
    
        $newUser = new User([
            'name' => $credentials['name'],
            'email' => $credentials['email'],
            'password' => $credentials['password'],
         ]);

        $newUser->save();

        return redirect()->route('landing-page');
    }

    public function register(): View
    {
        return view('register');
    }

}
