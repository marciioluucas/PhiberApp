<?php
/**
 * Created by PhpStorm.
 * User: juane
 * Date: 13/06/2017
 * Time: 11:56
 */

namespace app\model;


class NvidiaBuilder extends VgaBuilder
{

    public function buildMarca($marca)
    {
     $this->vga->marca = $marca;
    }


    public function buildModelo($modelo)
    {
        $this->vga->modelo = $modelo;
    }

    public function buildMemoria($memoria)
    {
       $this->vga->memoria = $memoria;
    }


    public function buildPrecoMedio($precoMedio)
    {
        $this->vga->precoMedio = $precoMedio;
    }


    public function ano($ano)
    {
        $this->vga->ano = $ano;
    }


}