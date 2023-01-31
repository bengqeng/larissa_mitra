<?php

namespace App\Exports;

use App\Models\Blog;
use App\Models\Mitra;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportForm implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $export =  Mitra::with('user')->Filter(['in_progress', 'rejected', 'success'])->get();
        if ($export->count() > 0) {
            return $export;
        } else {
            flash()->danger('Gagal mendownload, data tidak ditemukan');
            return redirect()->back();
        }
    }
}
