<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'cliente_proyecto', 'proyecto_codigo', 'cliente_codigo');
    }

    public function colaboradores()
    {
        return $this->belongsToMany(Colaboradores::class, 'proyecto_colaborador', 'proyecto_codigo', 'colaborador_nif');
    }
}
