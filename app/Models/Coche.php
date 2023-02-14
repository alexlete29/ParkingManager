<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coche extends Model
{
    protected $fillable = ['matricula','marca','modelo','user_id'];
    use HasFactory;

    public function usuarios()
    {
        return $this->belogsTo('App\Models\Usuario');
    }
}
