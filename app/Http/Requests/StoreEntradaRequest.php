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
                'fornecedor_id' => 'required',
                'valortotalnota' => 'required',
                'datacompra' => 'required',
                'status' => 'required'   
        ];
    }

    public function messages(){
        return [
            'fornecedor_id.required' => 'Preencha o campo *',
            'valortotal.required' => 'Preencha o campo *',
            'datacompra.required' => 'Preencha o campo *',
            'status.required' => 'Preencha o campo *'

        ];
    }
}