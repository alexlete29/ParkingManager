<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    use HasFactory;
    protected $fillable = ['nombre', 'dni'];

    public function coches(){
        return $this->hasMany(Coche::class, 'user_id');
    }
}