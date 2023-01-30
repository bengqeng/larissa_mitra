<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title', 'body', 'published_date', 'author_id', 'slug', 'image'
    ];

    public function author()
    {
        return $this->belongsTo(User::class);
    }
}
