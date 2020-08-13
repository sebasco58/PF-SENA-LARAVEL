<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTool extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' =>'required',
            'longitud' =>'required',
            'marca' =>'required',
            'fecha_fbc' =>'required',
            'serie_lote' =>'required',
            'norma_cert' =>'required',
            'descripcion' =>'required',
            'prioridad_mant' =>'required',
            'fecha_uso' =>'required',
            'limite_vida' =>'required',
            'acomulado_uso' =>'required',
            'categoria_id' =>'required',
        ];
    }
}
