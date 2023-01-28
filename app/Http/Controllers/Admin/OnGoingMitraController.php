<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminUpdateMitraTimeline;
use App\Models\Mitra;
use App\Models\MitraTimeline;
use App\Services\MitraTimelineService;
use Illuminate\Http\Request;

class OnGoingMitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.mitra.on_going.index', [
            'inProgress' => Mitra::with('user')->Filter(['in_progress'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function show(Mitra $on_going)
    {
        return view('admin.mitra.show', [
            'mitra' => $on_going,
            'timelines' => $on_going->timeline()->orderBy('order')->get(),
            'user' => $on_going->user()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function edit(Mitra $mitra)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUpdateMitraTimeline $request, $mitra, $timeline)
    {
        $mitra = Mitra::findorFail($mitra);
        $result = new MitraTimelineService($mitra);

        if ($result->updateStatusTimeline($timeline, $request->validated())){
            flash()->success('Berhasil Update Data');
        } else {
            flash()->danger('Gagal Update Data');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mitra  $mitra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mitra $mitra)
    {
        //
    }
}
