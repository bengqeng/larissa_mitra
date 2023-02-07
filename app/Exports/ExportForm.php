<?php

namespace App\Exports;

use App\Models\Blog;
use App\Models\Mitra;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExportForm implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $export =
            DB::table('mitra')
            ->join('users', 'mitra.user_id', '=', 'users.id')
            ->select('full_name', 'mitra.mitra_name', 'mitra.type', 'mitra.location', 'mitra.status', DB::raw("DATE_FORMAT(mitra.created_at, '%W, %d %M %Y')"), DB::raw("DATE_FORMAT(mitra.updated_at, '%W, %d %M %Y')"))
            ->whereIn('mitra.status', ['in_progress', 'rejected', 'success'])
            ->get();
        if ($export->count() > 0) {
            return $export;
        } else {
            flash()->danger('Gagal mendownload, data tidak ditemukan');
            return redirect()->back();
        }
    }

    public function headings(): array
    {
        return [
            'Mitra Name',
            'Gerai Name',
            'Gerai Type',
            'Gerai Location',
            'Gerai Status',
            'Gerai Created',
            'Gerai Updated'
        ];
    }
}
