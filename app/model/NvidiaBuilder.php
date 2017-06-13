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
        $this->vga->setMarca($marca);
    }

    public function buildModelo($modelo)
    {
        $this->vga->setModelo($modelo);
    }

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