<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicJoinMitraRequest;
use App\Models\Mitra;
use App\Services\PublicJoinMitraService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.mitra.mitra_register', [
            'typeMitra' => $this->listMitra()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicJoinMitraRequest $request)
    {
        $initJoin = new PublicJoinMitraService($request->validated());
        $result = $initJoin->call();

        if ($result['success']) {
            flash()->success('Anda berhasil registrasi mitra, mohon cek email Anda untuk aktivasi akun');
        } else {
            flash()->danger($result['message']);
        }

        return redirect()->back()->withInput();
    }
}
