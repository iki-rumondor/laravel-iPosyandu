<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileUser extends Model
{
    protected $guarded = ['id'];
    
    public function kader()
    {
        return $this->hasOne(Kader::class);
    }
}
