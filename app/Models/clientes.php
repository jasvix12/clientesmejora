<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'cliente_proyecto', 'cliente_codigo', 'proyecto_codigo');
    }
}
