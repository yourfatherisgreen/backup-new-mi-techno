<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $fillable = [
        'name',
        'description',
        'cover',
        'slug'
    ];
    protected static function boot()
{
    parent::boot();

    static::creating(function ($division) {
        $division->slug = \Str::slug($division->name);
    });

    static::updating(function ($division) {
        $division->slug = \Str::slug($division->name);
    });
}


    public function programs()
    {
        return $this->hasMany(Program::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }
    public function galleries()
    {
    return $this->hasMany(Gallery::class);
    }
    
}
