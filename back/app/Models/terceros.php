<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class terceros extends Model
{
    use HasFactory;

    protected $fillable = ['nit', 'razon_social', 'tipo', 'activo'];

}
