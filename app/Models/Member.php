<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    protected $fillable = [
        'division_id',
        'name',
        'position',
        'photo',
    ];

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
