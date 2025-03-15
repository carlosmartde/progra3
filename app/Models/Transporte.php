<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;
    
    protected $table = 'transporte';
    protected $primaryKey = 'id_transporte';
    
    protected $fillable = [
        'codigo',
        'nombre',
        'razon_social',
    ];
    
    public function camiones()
    {
        return $this->hasMany(Camion::class, 'id_transporte', 'id_transporte');
    }
}