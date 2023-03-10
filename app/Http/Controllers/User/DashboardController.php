<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\JoinGeraiRequest;
use App\Http\Requests\UserUpdateMitraTimeline;
use App\Models\Mitra;
use App\Models\MitraTimeline;
use App\Models\User;
use App\Services\User\JoinMitraService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $gerai = User::with('mitras.timeline')->find(Auth::id());
        // dd($gerai->mitras->first->timeline->timeline->get(0));
        return view('user.dashboard', [
            'timeline0' => $gerai->mitras->first->timeline->timeline->get(0),
            'timeline1' => $gerai->mitras->first->timeline->timeline->get(1),
            'gerais' => $gerai->mitras->first(),
            'gerai' => $gerai,
        ]);
    }

    public function gerai()
    {
        $gerai = User::with('mitras.timeline')->find(Auth::id());
        return view('user.gerai', [
            'gerai' => $gerai,
        ]);
    }

    public function add_gerai()
    {
        return view('user.add_gerai', [
            'typeMitra' => $this->listMitra()
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

    public function update_message(UserUpdateMitraTimeline $request, $id)
    {
        $mitra = MitraTimeline::findorFail($id);
        $allowedColumns = ['user_messages'];
        $validatedData = $request->validate(array_fill_keys($allowedColumns, 'required'));
        $filteredData = array_intersect_key($validatedData, array_flip($allowedColumns));
        $result = $mitra->update($filteredData);
        if ($result) {
            flash()->success('Berhasil Update Data');
        } else {
            flash()->danger('Gagal Update Data');
        }

        return redirect()->back();
    }

    public function join_gerai(JoinGeraiRequest $request)
    {
        $initJoin = new JoinMitraService($request->validated(), auth()->user());
        $result = $initJoin->call();

        if ($result['success']) {
            flash()->success('Anda berhasil registrasi mitra baru!');
        } else {
            flash()->danger($result['message']);
        }

        return redirect()->back();
    }
}
