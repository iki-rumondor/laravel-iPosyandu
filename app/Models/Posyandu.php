<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posyandu extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }

    public function peserta()
    {
        return $this->hasMany(Peserta::class);
    }

    public function desa()
    {
        return $this->belongsTo(Desa::class);
    }
}
