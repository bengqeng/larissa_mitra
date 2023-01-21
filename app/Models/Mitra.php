<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Mitra extends Model
{
    use HasFactory, Uuids;
    public $table = 'mitra';
    public $incrementing = false;
    protected $keyType = 'string';

    public const TYPEMITRA = [ 'clinic', 'salon', 'store'];
    public const STATUSMITRA = [ 'pending', 'in_progress', 'rejected', 'success'];

    protected $fillable = [ 'user_id', 'type', 'location', 'status' ];

    public function scopeActivemitra($query)
    {
        $query->whereIn('status', array_diff($this::STATUSMITRA, ['rejected']));
    }

    public function scopePendingMitra($query)
    {
        $query->where('status', 'pending');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function timeline()
    {
        return $this->hasMany(MitraTimeline::class);
    }
}
