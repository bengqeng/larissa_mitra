<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Services\MitraTimelineService;
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
        $status = false;
        if($request->ajax()){
            $mitra = Mitra::find($request->id);
            $mitra->status = $request->status == 'true' ? 'in_progress' : 'rejected';
            if ($mitra->save()) {
                $timeLine = new MitraTimelineService($mitra);
                ($timeLine->createTimeLine()) ? flash()->success('Berhasil update request') : flash()->success('Gagal update request');
                $status = true;
            } else {
                flash()->danger('Gagal update request');
            }

            return json_encode(['result' => $status, 'status' => $request->status]);
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
            'mitra' => $potential,
            'user' => $potential->user()->first()
        ]);
    }
}
