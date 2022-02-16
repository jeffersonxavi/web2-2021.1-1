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
                'nome' => 'required',
                'icms' => 'required',
                'ipi' => 'required',
                'frete' => 'required',
                'precofabrica' => 'required',
                'precocompra' => 'required',
                'precovenda' => 'required',
                'lucro' => 'required',
                'desconto' => 'required',
                'quantidade' => 'required'

                   
        ];
    }

    public function messages(){
        return [
                'nome.required' => 'Preencha o campo*',
                'icms.required' => 'Preencha o campo*',
                'ipi.required' => 'Preencha o campo*',
                'frete.required' => 'Preencha o campo*',
                'precofabrica.required' => 'Preencha o campo*',
                'precocompra.required' => 'Preencha o campo*',
                'precovenda.required' => 'Preencha o campo*',
                'lucro.required' => 'Preencha o campo*',
                'desconto.required' => 'Preencha o campo*',
                'quantidade.required' => 'Preencha o campo*'

        ];
    }
}
