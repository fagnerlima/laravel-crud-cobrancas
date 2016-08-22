<?php

namespace FlCobrancas\Http\Requests;

use FlCobrancas\Http\Requests\Request;

class TituloRequest extends Request
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
            'descricao'         => 'required|min:3',
            'data_vencimento'   => 'required|date_format:d/m/Y|regex:/^\\d{2}\/\\d{2}\/\\d{4}$/',
            'status'            => 'required|in:PENDENTE,RECEBIDO',
            'valor'             => 'required|regex:/^(\\d{1,3})(\\.\\d{3})?(,\\d{2})$/'
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'O campo DESCRIÇÃO é obrigatório.',
            'descricao.min' => 'O campo DESCRIÇÃO deve ter no mínimo 3 caracteres.',
            'data_vencimento.required' => 'O campo DATA DE VENCIMENTO é obrigatório',
            'data_vencimento.date_format' => 'O campo DATA DE NASCIMENTO deve ter uma data válida.',
            'data_vencimento.regex' => 'O campo DATA DE NASCIMENTO deve ter o formato "dd/mm/aaaa".',
            'status.required' => 'O campo STATUS é obrigatório.',
            'status.in' => 'O campo STATUS só pode ter um dos seguintes valores: PENDENTE ou RECEBIDO.',
            'valor.required' => 'O campo VALOR é obrigatório.',
            'valor.regex' => 'O campo VALOR deve ter o formato de moeda brasileira (R$) e não deve ultrapassar R$ 999.999,99.'
        ];
    }


}
