<?php
namespace view;
include '../../vendor/autoload.php';
use app\controller\PlacaController;
use app\model\NvidiaBuilder;

if (isset($_POST)) {
    if (isset($_POST) and $_POST['marca'] == "nvidia" and $_POST['action'] == "cadastrar") {
        (new PlacaController((new NvidiaBuilder())))->cadastrar();
    }

    if (isset($_POST) and $_POST['marca'] == "amd" and $_POST['action'] == "cadastrar") {
        (new PlacaController((new NvidiaBuilder())))->cadastrar();
    }
}
$listaDeNVidia = (new PlacaController((new NvidiaBuilder())))->listar();
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
        <form class="col s12" action="frmCadastro.php" method="post">
            <input name="action" hidden value="cadastrar">
            <span>Placa:</span>
            <p>
                <input name="marca" type="radio" id="nvidia" value="nvidia"/>
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
            <button type="submit" class="waves-effect waves-light btn">Enviar</button>

        </form>
    </div>
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

</main>
<script src="../node_modules/jquery/dist/jquery.min.js"></script>
<script src="../node_modules/materialize-css/dist/js/materialize.min.js"></script>
</body>
</html>