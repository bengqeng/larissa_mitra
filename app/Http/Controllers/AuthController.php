<?php

namespace App\Http\Controllers;

use App\Services\VerifyUserService;
use Illuminate\Http\Request;

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
}
