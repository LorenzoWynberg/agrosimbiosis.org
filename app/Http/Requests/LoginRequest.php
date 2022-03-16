<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email'     => 'required|email|exists:users',
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
            //Email
            'email.required'        => 'Por favor escribir su correo',
            'email.email'           => 'Formato incorrecto',
            'email.exists'          => 'Correo no existe, desea <a href="' . route('register') . '">registrarse?</a>',

            //Password
            'password.required'     => 'Por favor escribir contraseña',
            'password.min'          => 'Contraseña debe ser de al menos :min caracteres',
        ];
    }
}
