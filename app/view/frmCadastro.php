<?php
namespace view;
include '../../vendor/autoload.php';
use app\controller\PlacaController;
use app\model\AMDBuilder;
use app\model\NvidiaBuilder;

$listaDeNVidia = (new PlacaController((new NvidiaBuilder())))->listar();
$listaDeAMD = (new PlacaController((new AMDBuilder())))->listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de placas</title>
    <link rel="stylesheet" href="../node_modules/materialize-css/dist/css/materialize.min.css">
</head>
<body>
<header>

    <nav class="top-nav">
        <div class="container">
            <div class="nav-wrapper"><a class="page-title">Cadastro de placa de vídeo</a></div>
        </div>
    </nav>

</header>
<main class="container">

    <div class="row">
        <form class="col s12" action="cadastroCtrl.php" method="get">
            <input name="action" hidden value="cadastrar">
            <span>Marca:</span>
            <p>
                <input name="marca" type="radio" id="nvidia" value="NVidia"/>
                <label for="nvidia">NVidia</label>
            </p>
            <p>
                <input name="marca" type="radio" id="AMD" value="AMD"/>
                <label for="AMD">AMD</label>
            </p>
            <div class="row">
                <div class="input-field col s6">
                    <input id="modelo" name="modelo" type="text" class="validate">
                    <label for="modelo">Modelo</label>

                </div>
                <div class="input-field col s6">
                    <input placeholder="Preço Médio" name="precoMedio" id="precoMedio" type="text" class="validate">
                    <label for="precoMedio">Preço Médio</label>
                </div>
            </div>
            <div class="row">

                <div class="input-field col s6">
                    <input id="ano" name="ano" type="text" class="validate">
                    <label for="ano">Ano</label>
                </div>
                <div class="input-field col s6">
                    <input placeholder="Memória" name="memoria" id="memoria" type="text" class="validate">
                    <label for="memoria">Memória</label>
                </div>
            </div>
            <input type="submit" class="waves-effect waves-light btn" value="Enviar">

        </form>
    </div>
    <h5>Lista de NVidia</h5>
    <table>
        <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Memória</th>
            <th>Preço médio</th>
            <th>Ano</th>
        </tr>
        </thead>

            <tbody>
            <?php foreach ($listaDeNVidia as $nvidia) { ?>
                <tr>
                    <td><?php echo $nvidia['marca'] ?></td>
                    <td><?php echo $nvidia['modelo'] ?></td>
                    <td><?php echo $nvidia['memoria'] ?></td>
                    <td><?php echo $nvidia['precoMedio'] ?></td>
                    <td><?php echo $nvidia['ano'] ?></td>
                </tr>

            <?php } ?>
            </tbody>
    </table>
    <h5>Lista de AMD</h5>
    <table>
        <thead>
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Memória</th>
            <th>Preço médio</th>
            <th>Ano</th>
        </tr>
        </thead>

            <tbody>
            <?php foreach ($listaDeAMD as $AMD) { ?>
                <tr>
                    <td><?php echo $AMD['marca'] ?></td>
                    <td><?php echo $AMD['modelo'] ?></td>
                    <td><?php echo $AMD['memoria'] ?></td>
                    <td><?php echo $AMD['precoMedio'] ?></td>
                    <td><?php echo $AMD['ano'] ?></td>
                </tr>

            <?php } ?>
            </tbody>
    </table>

</main>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
</body>
</html>