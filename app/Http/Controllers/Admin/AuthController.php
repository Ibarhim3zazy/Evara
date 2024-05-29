<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('admin.auth.login');
    }
   
   
    public function registerPage()
    {
        return view('admin.auth.register');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ], [
            'email.exists' => 'email not found'
        ]);


        $user = User::where('email', $request->email)->first(); //findORFail

        $check = Hash::check($request->password, $user->password); // check if password is correct

        // errors 

        if (!$check) {
            return back()->with([
                'error_password' => 'Wrong password or this account not approved yet.',
            ]);
        }

        Auth::attempt($request->except('_token'));
        // Auth::login($user);

        return to_route('admin.index');
    }



    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' =>  'required|min:8|same:confirm',
        ]);

        $user = User::create($request->except('_token'));


        Auth::login($user);


        return to_route('admin.index');

    }





    public function logout(Request $request)
    {
        // $user = auth()->user();
        $user = $request->user();

        Auth::logout($user);

        return to_route('admin.login');
    }
}
