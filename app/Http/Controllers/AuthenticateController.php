<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\View\View;

class AuthenticateController extends Controller
{
    //Handle login
    public function login(Request $request)
    {
        $credentials = $request->all();
        $user = User::where('email', $credentials['email'])->first();
        if(Hash::check($credentials['password'],$user->password)){
            return view('home', ['user' => $user]);
        }else{
            return view('landingPage', );
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

        return view('landingPage');
    }

    public function register(): View
    {
        return view('register');
    }

}
