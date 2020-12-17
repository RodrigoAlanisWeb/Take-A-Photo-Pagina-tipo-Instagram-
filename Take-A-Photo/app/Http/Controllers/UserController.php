<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function CreateUser(Request $request)
    {
        $request->validate([
            'complete_name' => 'required|string',
            'nick_name' => 'required|string',
            'email_reg' => 'required|email',
            'password_reg' => 'required|string',
        ]);

        User::create([
            'name' => $request->complete_name,
            'nick_name' => $request->nick_name,
            'email' => $request->email_reg,
            'password' => Hash::make($request->password_reg),
        ]);

        $user = User::where('email', $request->email)->get();

        if ($user) {
            if ($request->file('image')) {
                $path = $request->file('image')->store('public');
                Image::create([
                    'imageable_id' => $user[0]->id,
                    'imageable_type' => 'App\Models\User',
                    'path' => substr($path,'6'),
                ]);
            } else {
                Image::create([
                    'imageable_id' => $user[0]->id,
                    'imageable_type' => 'App\Models\User',
                    'path' => '/base.jpg',
                ]);
            }
            return redirect()->route('main');
        } else {
            $error = 'error';
            return redirect()->route('main')->withErrors('register');
        }

        
    }

    public function LogIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email','password');
        $user = User::where('email',$request->email)->get();

        if (Auth::attempt($credentials)) {
            Auth::login($user[0]);
            return redirect()->route('main');
        }

        return back()->withErrors[
            'email-log'
        ];
    }

    public function LogOut()
    {
        Auth::logout();
        return redirect()->route('main');
    }
}
