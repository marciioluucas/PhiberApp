<?php
/**
 * Created by PhpStorm.
 * User: juane
 * Date: 13/06/2017
 * Time: 12:01
 */

namespace app\controller;

use app\model\VgaBuilder;

class PlacaController
{
    public $placa;


    /**
     * PlacaController constructor.
     * @param VgaBuilder $placa
     */
    public function __construct($placa)
    {
        $this->placa = $placa;
    }

    public function cadastrar() {
        $toEcho = "<script>alert('Placa cadastrada com erro!')</script>";
        if($this->placa->cadastrar()){
            $toEcho = "<script>alert('Placa cadastrada com sucesso!')</script>";
        }
        echo $toEcho;
    }

    public function listar() {
        return $this->placa->listar();
    }
}
