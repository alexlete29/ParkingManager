<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'email'];
    protected $hidden = [
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function coches(){
        return $this->hasMany(Coche::class, 'user_id');
    }
}