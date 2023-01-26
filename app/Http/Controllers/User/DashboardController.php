<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $id = 1; // will use auth()->id
        $gerai = User::with('mitras.timeline')->find($id); // get gerai
        // dd(count($gerai->mitras[0]->timeline));
        // dd(User::find(1)->with('mitras.timeline'));
        // $timeline = $gerai->mitras[0]->timeline;
        // for ($i = 0; $i < count($timeline); $i++) {
        //     if ($timeline->status == 'success') {
        //         $success = 1
        //     }
        // }
        return view('user.gerai', [
            'gerai' => $gerai->mitras,
        ]);
    }
}
