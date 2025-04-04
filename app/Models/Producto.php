<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';
    protected $primaryKey = 'id';
    protected $incrementing = true;
    protected $fillable = [
        'id',
        'nombre_producto',
        'descripcion_producto',
        'precio_producto',
    ];
    public $timestamps = true;
}
