<?php

namespace App\Http\Controllers;

use App\Services\VerifyUserService;
use Illuminate\Http\Request;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function index($token = null)
    {
        if (isset($token)){
            $verify = new VerifyUserService($token);
            abort_if(!$verify->call(), 404);
            flash()->success('Akun anda berhasil terverifikasi, silahkan lakukan login');
        }

        return view('public.mitra-login');
    }

    public function login(UserLoginRequest $request)
    {
        if (!Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password'), 'verified' => true])) {
            flash()->danger('Email atau password tidak sesuai');
            return redirect()->back();
        }

        if(auth()->user()->is_admin == true){
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        flash()->success('Anda berhasil log out');
        return redirect()->route('public.login');
    }
}
