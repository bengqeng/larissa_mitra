<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicAddSubscriber;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('public.mitra.mitra_subscriber');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PublicAddSubscriber $request)
    {
        $attribute = [];
        $attribute['full_name'] = $request->validated()['prospek_name'];
        $attribute['phone_number'] = $request->validated()['prospek_phone_number'];
        $attribute['is_active'] = true;
        $attribute['address'] = $request->validated()['prospek_address'];

        if (Subscriber::create($attribute)) {
            flash()->success('Terima kasih sudah subscribe, kami akan memberikan info kepada anda');
        } else {
            flash()->danger('Gagal melakukan subscribe');
        }

        return redirect()->back();
    }
}
