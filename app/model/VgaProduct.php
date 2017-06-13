<?php

namespace app\model;
/**
 * Created by PhpStorm.
 * User: juanes
 * Date: 13/06/2017
 * Time: 11:31
 */
class VgaProduct
{

    /**
     * @_type=int
     * @_size=11
     * @_primaryKey=true
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=true
     */
    private $id;
    
    /**
     * @_type=varchar
     * @_size=50
     * @_primaryKey=false
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=false
     */
    private $marca;

    /**
     * @_type=varchar
     * @_size=50
     * @_primaryKey=false
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=false
     */
    private $modelo;

    /**
     * @_type=varchar
     * @_size=50
     * @_primaryKey=false
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=false
     */
    private $memoria;

    /**
     * @_type=varchar
     * @_size=50
     * @_primaryKey=false
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=false
     */
    private $precoMedio;

    /**
     * @_type=varchar
     * @_size=50
     * @_primaryKey=false
     * @_notNull=true
     * @_default=none
     * @_autoIncrement=false
     */
    private $ano;

    /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param mixed $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return mixed
     */
    public function getMemoria()
    {
        return $this->memoria;
    }

    /**
     * @param mixed $memoria
     */
    public function setMemoria($memoria)
    {
        $this->memoria = $memoria;
    }

    /**
     * @return mixed
     */
    public function getPrecoMedio()
    {
        return $this->precoMedio;
    }

    /**
     * @param mixed $precoMedio
     */
    public function setPrecoMedio($precoMedio)
    {
        $this->precoMedio = $precoMedio;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }






}