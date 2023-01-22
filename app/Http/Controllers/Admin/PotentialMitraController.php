<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;

class PotentialMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mitra.potential.index', [
            'mitras' => Mitra::with('user')->PendingMitra()->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()){
            $mitra = Mitra::where('id', $request->id)->update(['status' => ($request->status == 'true' ? 'in_progress' : 'rejected')]);
            flash()->success('Berhasil update request');
            return json_encode(['result' => $mitra, 'status' => $request->status]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $potential)
    {
        return view('admin.mitra.show', [
            'mitra' => $potential->with('user')->first()
        ]);
    }
}
