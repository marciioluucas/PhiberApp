<?php
/**
 * Created by PhpStorm.
 * User: juane
 * Date: 13/06/2017
 * Time: 13:59
 */

namespace app\model;


class AMDBuilderextends extends VgaBuilder
{
    public function buildMarca($marca)
    {

        $this->vga->setMarca($marca);
    }

    public function buildModelo($modelo)
    {
        $this->vga->setModelo($modelo);
    }
    //astronauta
    public function buildMemoria($memoria)
    {
        $this->vga->setMemoria($memoria);
    }

    public function buildPrecoMedio($precoMedio)
    {
        $this->vga->setPrecoMedio($precoMedio);
    }


    public function buildAno($ano)
    {
        $this->vga->setAno($ano);
    }
}

