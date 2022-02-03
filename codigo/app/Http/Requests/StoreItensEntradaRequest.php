<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItensEntradaRequest extends FormRequest
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
                'identrada' => 'required',
                'quantidade' => 'required'

                   
        ];
    }

    public function messages(){
        return [
            'identrada.required' => 'Preenshca o campo ID Entrada*',
            'quantidade.required' => 'Preencha o campo quantidade*'
        ];
    }
}