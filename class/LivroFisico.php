<?php
/**
 * Created by PhpStorm.
 * User: davic
 * Date: 08/10/2017
 * Time: 17:31
 */

class LivroFisico extends Livro
{
    private $taxaImpressao;

    public function getTaxaImpressao()
    {
        return $this->taxaImpressao;
    }

    public function setTaxaImpressao($taxaImpressao)
    {
        $this->taxaImpressao = $taxaImpressao;
    }


}