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
                'valortotal' => 'required',
                'datacompra' => 'required'   
        ];
    }

    public function messages(){
        return [
            'idfornecedor.required' => 'Preencha o campo ID Fornecedor*',
            'valortotal.required' => 'Preencha o campo Valor Total*',
            'datacompra.required' => 'Preencha o campo da Data da Compra*'

        ];
    }
}