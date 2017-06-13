<?php
/**
 * Created by PhpStorm.
 * User: juane
 * Date: 13/06/2017
 * Time: 11:37
 */

namespace app\model;


abstract class VgaBuilder
{
    protected $vga;

    /**
     * VgaBuilder constructor.
     * @param $vga
     */
    public function __construct($vga)
    {
        $this->vga =  VgaProduct;
    }

    public abstract function buildMarca();
    public abstract function buildModelo();
    public abstract function buildMemoria();
    public abstract function buildPrecoMedio();
    public abstract function ano();

}