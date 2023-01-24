<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraTimeline extends Model
{
    use HasFactory;
    // Dont Change No Matter What
    // ID => NAME
    public const MITRATIMELINE = [
        1 => 'Isi Form Calon Mitra',
        2 => 'Presentasi Program Kemitraan',
        3 => 'Survey lokasi',
        4 => 'Interview dengan Tim Manajemen Larissa',
        5 => 'Tanda tangan Perjanjian Kemitraan',
        6 => 'Rekrutmen dan Training',
        7 => 'Pengurusan Perijinan Operasional Outlet',
        8 => 'Pembukaan Outlet'
    ];

    protected $casts = [
        'step_id' => 'string',
    ];
    protected $table = 'mitra_timeline';
    protected $fillable = [ 'mitra_id', 'step_id', 'pending_message', 'success_message', 'status', 'order' ];
    public const STATUSMITRATIMELINE = [ 'pending', 'success'];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }

    public function stepName()
    {
        return (self::MITRATIMELINE[(int)$this->step_id]);
    }
}
