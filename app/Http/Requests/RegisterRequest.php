<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'      => 'required|min:6',
            'username'  => 'required|min:3|unique:users',
            'email'     => 'required|email|unique:users',
            'password'  => 'required|min:6',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //Name
            'name.required'     => "Por favor escribir nombre completo",
            'name.min'          => "El nombre completo debe ser de al menos :min caracteres",

            //Username
            'username.required' => 'Por favor escribir nombre de usuario deseado',
            'username.min'      => 'El nombre de usuario debe ser de al menos :min caracteres',
            'username.unique'   => 'Nombre de usuario ya existe, por favor escoger otro',

            //Email
            'email.required'    => 'Por favor escribir su correo',
            'email.unique'      => 'Correo ya existe, por favor escoger otro o intente <a href="' . route('login') . '">iniciar sesion</a>',
            'email.email'       => 'Formato incorrecto',

            //Password
            'password.required' => 'Por favor escribir contraseña',
            'password.min'      => 'Contraseña debe ser de al menos :min caracteres',
        ];
    }
}
