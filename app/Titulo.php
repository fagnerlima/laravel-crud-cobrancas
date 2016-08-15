<?php

namespace FlCobrancas;

use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
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
     * Formata o valor para exibição na view.
     * @param $value double
     * @return string
     */
    public function getValorAttribute($value)
    {
        return 'R$ ' . number_format($value, 2, ',', '.');
    }
}
