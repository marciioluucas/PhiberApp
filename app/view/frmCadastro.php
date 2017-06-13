<?php
namespace view;
include '../../vendor/autoload.php';
use app\controller\PlacaController;
use app\model\NvidiaBuilder;

if (isset($_POST)) {
    if (isset($_POST) and $_POST['placa'] == "nvidia" and $_POST['action'] == "cadastrar") {
        (new PlacaController((new NvidiaBuilder())))->cadastrar();

    }

    if (isset($_POST) and $_POST['placa'] == "amd" and $_POST['action'] == "cadastrar") {
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
<form action="frmCadastro.php" method="post">

</form>
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
            <td><?php echo $nvidia['memoria']?></td>
            <td><?php echo $nvidia['precoMedio']?></td>
            <td><?php echo $nvidia['ano']?></td>
        </tr>

    <?php } ?>
    </tbody>
</table>
<script src="jquery/dist/jquery.min.js"></script>
<script src="materialize-css/dist/js/materialize.min.js"></script>
</body>
</html>