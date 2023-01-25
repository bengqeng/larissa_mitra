<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscriber';
    use HasFactory;

    protected $fillable = [ 'full_name', 'phone_number', 'is_active', 'address' ];
}
