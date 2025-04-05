<?php
include('../../php/atualizar.php');

$id = $_GET['id'];

$sql = "SELECT * FROM tb_aluno WHERE id = '$id'";

try {
    $resultado = $conn->query($sql);
    $valor = $resultado->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $E) {
    echo "Erro ao consultar " . $E->getMessage();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <?php include('../components/navbar02.php'); ?>
    <div class="container mt-3 w-50">
        <h1>Alterar Cadastro</h1>
        <h5>Preencha os campos abaixo:</h5>
        <h6>Após preencher, clique em "Alterar" para atualizar o cadastro do aluno.</h6>
        <form class="mt-3" action="php/atualizar.php" method="post">
            <input class="mb-3 form-control" type="text" name="nome" value="<?= $valor['nome'] ?>">
            <input class="mb-3 form-control" type="text" name="cpf" value="<?= $valor['cpf'] ?>">
            <input class="mb-3 form-control" type="text" name="telefone" value="<?= $valor['telefone'] ?>">
            <input class="mb-3 form-control" type="text" name="matricula" value="<?= $valor['matricula'] ?>">
            <input class="mb-3 form-control" type="text" name="estado" value="<?= $valor['estado'] ?>">
            <input class="mb-3 form-control" type="text" name="cidade" value="<?= $valor['cidade'] ?>">
            <input class="mb-3 form-control" type="text" name="bairro" value="<?= $valor['bairro'] ?>">
            <input class="mb-3 form-control" type="text" name="rua" value="<?= $valor['rua'] ?>">
            <input class="mb-3 form-control" type="text" name="numero" value="<?= $valor['numero'] ?>">

            <input type="hidden" name="id" value="<?= $valor['id'] ?>">

            <input class="btn btn-success" type="submit" value="Alterar">
        </form>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</html>