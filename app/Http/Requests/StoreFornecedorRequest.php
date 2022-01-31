<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FormRequest
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
            'nome' => 'required|max:100',
            'endereco' => 'required|max:30',
            'email' => 'required|email'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Insira seu nome',
            'endereco.required' => 'Insira seu endereço',
            'endereco.max' => 'Endereço deve conter no máximo :max caracteres',
            'email.required' => 'Insira seu email',
        ];
    }
}



