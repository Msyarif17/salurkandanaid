<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard extends Controller
{
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|string',
            'password' => 'required|string|min:6',
        ]);
        $loginType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email':'username';
        $login = [
            $loginType => $request->email,
            'password' => $request->password
        ];
        if (auth()->attempt($login))
        {
            return redirect()->view('dashboard');
        }
        return view('login');
    }
}
