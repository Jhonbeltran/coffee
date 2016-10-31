<?php

namespace Coffee;

use Illuminate\Database\Eloquent\Model;

class Labor extends Model
{
    protected $fillable = ['nombre', 'productor_id', 'ubicacion_id', 'variedad_id', 'especie_id', 'operador_id', 'fecha', 'plantas', 'actividad', 'jornales', 'valor_jornales', 'valor_insumos', 'observaciones'];
}
