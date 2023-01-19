<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    public $table = 'mitra';
    public $incrementing = false;

    public const TYPEMITRA = [ 'clinic', 'salon', 'store'];
    public const STATUSMITRA = [ 'pending', 'in_progress', 'rejected', 'success'];
}
