<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'division_id',
        'image_path',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
