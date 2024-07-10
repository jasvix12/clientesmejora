<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colaboradores extends Model
{
    use HasFactory;

    protected $primaryKey = 'nif';

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'proyecto_colaborador', 'colaborador_nif', 'proyecto_codigo');
    }

    public function pagos()
    {
        return $this->hasMany(Pagos::class, 'colaborador_nif', 'nif');
    }
}
