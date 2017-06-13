<?php
/**
 * Created by PhpStorm.
 * User: juanes
 * Date: 13/06/2017
 * Time: 12:56
 */

namespace app\model;


use phiber\Phiber;

class VgaProductDAO
{

    public static final function cadastrar($obj) {
        $dao = (new Phiber())->openPersist($obj);
        if($dao->create()){
            return true;
        }
        return false;

    }

    public static final function listar($obj) {
        $dao = (new Phiber())->openPersist($obj);
        $dao->returnArray(true);
        return $dao->select();
    }
}