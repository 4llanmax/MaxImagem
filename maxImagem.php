<?php
/**
 * MaxImagem - Compilador de imagens PHP.
 * PHP Version 7.4
 *
 * @author      Allan Max <allan@dottcon.com>
 * @version     1.0.202109
**/

namespace Fornecedor\MaxImagem;

class MaxImagem
{
    private $raiz = null;

    /**
     * Construção do objeto, ao ser instanciado é possível passar o caminho do
     * diretório onde as imagens do projeto serão armazenadas para uso pela
     * classe.
    **/
    public function __construct()
    {
        if (func_num_args() > 0) {
            $parametro = func_get_args();
            $this->raiz = $parametro[0];
        }
    }

    public function maxImagem()
    {
        //
    }
}
