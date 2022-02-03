<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendaRequest extends FormRequest
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
                'idcliente' => 'required',
                'valortotal' => 'required',
                'datavenda' => 'required'

                   
        ];
    }

    public function messages(){
        return [
            'idcliente' => 'Preencha o campo com o ID do Cliente*',
            'valortotal' => 'Preencha o campo Valor Total*',
            'datavenda' => 'Preencha o campo com a Data da Venda*'

        ];
    }
}