<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'thumbnail', 'division_id'];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
