<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $gerai = User::with('mitras.timeline')->find(Auth::id());
        $timeline = $gerai->mitras[0]->timeline;
        return view('user.gerai', [
            'gerai' => $gerai->mitras,
        ]);
    }

    public function gerai_show($idMitra)
    {
        $gerai = User::with(['mitras' => function ($query) use ($idMitra) {
            $query->where('id', $idMitra)->with('timeline');
        }])->find(Auth::id());

        return view('user.gerai_show', [
            'gerai' => $gerai,
        ]);
    }
}
