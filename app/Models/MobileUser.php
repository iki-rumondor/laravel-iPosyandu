<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class MobileUser extends Model
{
    use HasApiTokens;

    protected $guarded = ['id'];
    
    public function kader()
    {
        return $this->hasOne(Kader::class);
    }
    
    public function peserta()
    {
        return $this->hasOne(Peserta::class);
    }
    
}
