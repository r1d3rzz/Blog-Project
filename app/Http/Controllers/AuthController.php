<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.create');
    }

    public function store()
    {
        // dd(request()->all());

        $formData = request()->validate([
            "name" => ['required','min:3','max:120'],
            "username" => ['required','min:3','max:120',Rule::unique('users', 'username')],
            "email" => ['required','email',Rule::unique('users', 'email')],
            "password" => ['required','min:5','max:120'],
            "confirm_password" => ['required','min:5','max:120']
        ]);

        if ($formData['password'] !== $formData['confirm_password']) {
            return back()->withErrors([
                'confirm_password' => "confirm password must be match password"
            ]);
        } else {
            $user =User::create($formData);

            auth()->login($user);

            return redirect('/')->with('success', 'Welcome Dear,'.$user->name);
        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function post_login()
    {
        $formData = request()->validate([
            'email' => ['required',Rule::exists('users', 'email')],
            'password' => ['required']
        ]);

        if (auth()->attempt($formData)) {
            return redirect('/')->with('success', 'Welcome Back');
        } else {
            return back()->withErrors([
                'email' => 'Your Credentials is Wrong'
            ]);
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/')->with('success', 'GoodBye');
    }
}
