<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntradaRequest extends FormRequest
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
            'idfornecedor' => 'required',
            'idproduto' => 'required',
            'quantidade' => 'required',
            'valortotal' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'idfornecedor.required' => 'Selecione um fornecedor',
            'idproduto.required' => 'Selecione um produto',
            'quantidade.required' => 'Insira uma quantidade',
            'valortotal.required' => 'Valor total',
        ];
    }
}
