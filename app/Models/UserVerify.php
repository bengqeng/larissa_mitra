<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserVerify extends Model
{
    use HasFactory;
    protected $table = 'users_verification';
    protected $fillable = ['token', 'user_id', 'confirmed', 'confirmed_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
