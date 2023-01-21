<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use App\Models\Subscriber;

class DashboardController extends Controller
{
    public function index(){
        $activeMitra = Mitra::Activemitra()->get();
        $totalMitra = $activeMitra->count();
        $totalOnGoing = 0;
        $totalPending = 0;
        $mitraPendings = Mitra::with('user')->PendingMitra()->orderBy('created_at', 'desc')->limit(5)->get();

        foreach ($activeMitra as $mitra) {
            if ($mitra->status == 'pending') {  $totalPending++; }
            if ($mitra->status == 'in_progress') {  $totalOnGoing++; }
        };

        return view('admin.index', [
            'totalMitra' => $totalMitra,
            'totalOnGoing' => $totalOnGoing,
            'totalPending' => $totalPending,
            'totalSubscriber' => Subscriber::all()->count(),
            'mitrapendings' => $mitraPendings
        ]);
    }
}
