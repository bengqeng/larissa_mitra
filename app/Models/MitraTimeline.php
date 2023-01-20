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
        1 => 'FORM',
        2 => 'a',
        3 => 'b',
        4 => 'c',
        5 => 'd',
        6 => 'e',
        7 => 'f',
        8 => 'g'
    ];
    public const STATUSMITRATIMELINE = [ 'pending', 'success'];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class);
    }
}
