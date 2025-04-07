<?php
include('conexao.php');

$nome = $_GET['nome'];
$cpf = $_GET['cpf'];
$telefone = $_GET['telefone'];
$matricula = $_GET['matricula'];
$estado = $_GET['estado'];
$bairro = $_GET['bairro'];
$rua = $_GET['rua'];
$cidade = $_GET['cidade'];
$numero = $_GET['numero'];

$sql = "INSERT INTO tb_aluno(nome, telefone, matricula, cpf, estado, cidade, bairro, rua, numero)
VALUES('$nome', '$telefone', '$matricula', '$cpf', '$estado', '$cidade', '$bairro', '$rua', '$numero')";
try {
    $conn->exec($sql);
    echo ("dador gravados");
    // link automatico que, ao inserir dados, retorna para a tela consultar
    header("Location: ../consultar.php?cad=s");
} catch (PDOException $E) {
    echo ("Erro ao cadastrar" . $E->getMessage());
}
