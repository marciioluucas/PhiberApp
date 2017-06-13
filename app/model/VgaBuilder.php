<?php
/**
 * Created by PhpStorm.
 * User: juane
 * Date: 13/06/2017
 * Time: 11:37
 */

namespace model;

abstract class VgaBuilder
{
    protected $vga;


    public function __construct()
    {
        $this->vga =  new VgaProduct();
    }

    public abstract function buildMarca($marca);
    public abstract function buildModelo($modelo);
    public abstract function buildMemoria($memoria);
    public abstract function buildPrecoMedio($precoMedio);
    public abstract function ano($ano);

    public function getVga(){
        return $this->vga;
    }

}