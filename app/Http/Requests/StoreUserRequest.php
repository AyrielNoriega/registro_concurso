<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'nombre'      => ['required', 'max:255', 'alpha'],
            'apellido'    => ['required', 'max:255', 'alpha'],
            'cedula'      => ['required', 'numeric', 'unique:users'], 
            'celular'     => ['required', 'numeric'], 
            // 'correo'      => ['required', 'email:rfc,dns', 'unique:users', 'max:255'], 
            'correo'      => ['required', 'email:rfc', 'unique:users', 'max:255'], 
            'departamento_id' => ['required' ],
            'ciudad_id' => ['required', 'filled'],
            'habeas_data' => ['required'],
        ];
    }

        public function attributes()
    {
        return [
            'departamento_id' => 'departamento',
            // 'num_id' => 'Num Identidad',
            // 'email' => 'Correo',
            // 'password' => 'Contraseña',
        ];
    }
}
