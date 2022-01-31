<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'descricao' => 'required',
            'quantidade' => 'required',
            'valor' => 'required',
        ];
    }

    public function messages(){
        return [
                'descricao.required' => 'Insira uma descrição',
                'quantidade.required' => 'Insira uma quantidade*',
                'valor.required' => 'Insira um valor*',
        ];
    }
}