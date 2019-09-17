<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearClienteRequest extends FormRequest
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

        'cliente_nombre'          => 'required|min:3|max:50|alpha_spaces',
        'cliente_primerApellido'  => 'required|min:3|max:50|alpha_spaces',
        'cliente_segundoApellido'  => 'required|min:3|max:50|alpha_spaces',
        'cliente_direccion'         => 'required|min:5|max:300',
        'cliente_telefono'          => 'required|digits:8',
        'cliente_correo'            => 'required|email',
        'asociado_membrecia'        => 'required',
        'cliente_nit'               =>'required|digits_between:5,7'
        
               
                ];
        
    }
}
