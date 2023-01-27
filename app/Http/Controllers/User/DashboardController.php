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
        $timeline = $gerai->mitras[0]->timeline;
        // dd($gerai->mitras[0]->timeline);
        // dd($gerai->mitras[0]->timeline[0]->status);
        // $status = [];
        // foreach ($timeline as $item) {
        //     $status[] = $item->status;
        // }
        // // print_r($status);
        // $success_count = count(array_keys($status, 'success'));
        // $percentage = $success_count / 8 * 100;
        // die();
        return view('user.gerai', [
            'gerai' => $gerai->mitras,
        ]);
    }

    public function gerai_show($idMitra)
    {
        $idUser = 1; // will use auth()->id
        $gerai = User::with(['mitras' => function ($query) use ($idMitra) {
            $query->where('id', $idMitra)->with('timeline');
        }])->find($idUser);

        // dd($gerai->mitras[0]->mitra_name);
        return view('user.gerai_show', [
            'gerai' => $gerai,
        ]);
    }
}
