<?php
namespace view;
use app\controller\PlacaController;
use app\model\AMDBuilder;
use app\model\NvidiaBuilder;

include '../../vendor/autoload.php';

if ($_GET['marca'] == "NVidia") {

    $nvidia = new NvidiaBuilder();
    $nvidia->buildMarca($_GET['marca']);
    $nvidia->buildModelo($_GET['modelo']);
    $nvidia->buildAno($_GET['ano']);
    $nvidia->buildPrecoMedio($_GET['precoMedio']);
    $nvidia->buildMemoria($_GET['memoria']);
    (new PlacaController(($nvidia)))
        ->cadastrar();

}
if ($_GET['marca'] == "AMD") {
    $AMD = new AMDBuilder();
    $AMD->buildMarca($_GET['marca']);
    $AMD->buildModelo($_GET['modelo']);
    $AMD->buildAno($_GET['ano']);
    $AMD->buildPrecoMedio($_GET['precoMedio']);
    $AMD->buildMemoria($_GET['memoria']);
    (new PlacaController(($AMD)))
        ->cadastrar();
}