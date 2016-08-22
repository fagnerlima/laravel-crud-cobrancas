<?php

namespace FlCobrancas;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    protected $fillable = [
        'data_vencimento',
        'descricao',
        'status',
        'valor'
    ];

    public $timestamps = false;

    /**
     * Formata a data de vencimento para exibição na view.
     * @param $value string
     * @return string
     */
    public function getDataVencimentoAttribute($value)
    {
        return date('d/m/Y', strtotime($value));
    }

    /**
     * Formata a data de vencimento para persistência.
     * @param $value
     * @return mixed
     */
    public function setDataVencimentoAttribute($value)
    {
        $this->attributes['data_vencimento'] = preg_replace('/^(\\d{2})\/(\\d{2})\/(\\d{4})$/', '$3-$2-$1', $value);
    }

    /**
     * Formata o valor para exibição na view.
     * @param $value double
     * @return string
     */
    public function getValorAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    public function setValorAttribute($value)
    {
        $this->attributes['valor'] = str_replace(['.', ','], ['', '.'], $value);
    }

    /**
     * Formata a descrição para persistência.
     * @param $value string
     */
    public function setDescricaoAttribute($value)
    {
        $this->attributes['descricao'] = strtoupper($value);
    }
}
