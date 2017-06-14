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

    /**
     * @param VgaBuilder $obj
     * @return bool
     */
    public static final function cadastrar($obj)
    {
        $dao = (new Phiber())->openPersist($obj);
        $dao->setTable("placa");
        $dao->setFields([
            "marca",
            "modelo",
            "memoria",
            "precoMedio",
            "ano"
        ]);
        $dao->setValues([
            $obj->getVga()->getMarca(),
            $obj->getVga()->getModelo(),
            $obj->getVga()->getMemoria(),
            $obj->getVga()->getPrecoMedio(),
            $obj->getVga()->getAno()
        ]);

        if ($dao->create()) {
            return true;
        }
        return false;

    }

    /**
     * @param VgaBuilder $obj
     * @return bool
     */
    public static final function listar($obj)
    {
        $phiber = new Phiber();
        $criteria = $phiber->openPersist($obj);
        $criteria->setTable("placa");
        $restriction = $criteria->restrictions()
            ->equals("marca", $obj->getVga()->getMarca());
        $criteria->add($restriction);
        $criteria->returnArray(true);
        return $criteria->select();

    }
}