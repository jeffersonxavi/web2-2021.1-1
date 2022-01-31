<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItensVendaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'precovenda' => 'required',
            'quantidade' => 'required'

                   
        ];
    }

    public function messages(){
        return [
            'idvenda.required' => ' ID da Venda*',
            'quantidade.required' => 'Insira a quantidade*'
        ];
    }
}
