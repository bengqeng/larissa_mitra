<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicJoinMitraRequest;
use App\Models\Mitra;
use App\Services\PublicJoinMitraService;
use Illuminate\Http\Request;

class JoinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.mitra.join_index',[
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

        if($result['success']){
            flash()->success('Anda berhasil memasukkan data join mitra dan silahkan cek email anda untuk aktivasi akun');
        } else {
            flash()->danger($result['message']);
        }

        return redirect()->back();
    }

}
