<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    use HasFactory;

    public function colaborador()
    {
        return $this->belongsTo(Colaboradores::class, 'colaborador_nif', 'nif');
    }

    public function tipoPago()
    {
        return $this->belongsTo(TipoPago::class);
    }
}
