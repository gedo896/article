<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use function PHPSTORM_META\type;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.pages.login');
    }

    public function auth(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password , 'type' => 'admin'])) {
            return redirect()->route('Admin');
        }
        return redirect()->back();
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('Home');
    }

}
