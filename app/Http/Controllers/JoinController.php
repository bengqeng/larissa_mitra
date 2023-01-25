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
        $validator = Validator::make($request->all(), [
            'full_name'             => ['required'],
            'mitra_name'            => ['required'],
            'email'                 => ['required', 'email'],
            'password'              => ['required', 'string', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
            'phone_number'          => ['required'],
            'address'               => ['required'],
            'type'                  => ['required'],
            'location'              => ['required'],
        ]);

        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        // Retrieve the validated input...
        $validated = $validator->validated();

        $initJoin = new PublicJoinMitraService($validated);
        $result = $initJoin->call();

        if ($result['success']) {
            flash()->success('Anda berhasil registrasi mitra, mohon cek email Anda untuk aktivasi akun');
        } else {
            flash()->danger($result['message']);
        }

        return redirect()->back()->withInput();
    }
}
