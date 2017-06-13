<?php
namespace view;

use controller\PlacaController;
use model\NvidiaBuilder;

if (isset($_POST) and $_POST['placa'] == "nvidia" and $_POST['action'] == "cadastrar") {
    (new PlacaController((new NvidiaBuilder())))->cadastrar();

}

if (isset($_POST) and $_POST['placa'] == "amd" and $_POST['action'] == "cadastrar") {
    (new PlacaController((new NvidiaBuilder())))->cadastrar();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de placas</title>
</head>
<body>
<form action="frmCadastro.php" method="post">

</form>
</body>
</html>