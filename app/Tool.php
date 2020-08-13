<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool extends Model
{
    protected $fillable = ['nombre','longitud','marca','fecha_fbc','serie_lote','norma_cert','descripcion','prioridad_mant','fecha_uso','limite_vida','acomulado_uso','categoria_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
