<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidos extends Model
{
    use HasFactory;

protected $fillable = ['fecha_pedido', 'prefijo', 'num_pedido', 'nit', 'razon_social', 'vendedor', 'departamento', 'ciudad' ];

}
