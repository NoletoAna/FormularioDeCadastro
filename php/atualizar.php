<?php

include('conexao.php');

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$matricula = $_POST['matricula'];
$estado = $_POST['estado'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$cidade = $_POST['cidade'];
$numero = $_POST['numero'];

$sql = "UPDATE tb_aluno SET nome='$nome', cpf='$cpf', telefone='$telefone', matricula='$matricula', estado='$estado', bairro='$bairro', rua='$rua', cidade='$cidade', numero='$numero' WHERE id = '$id'";

try{
    $conn->exec($sql); 
    header("Location: ../consultar.php?con=s");
}catch(PDOException $E){
    echo "Erro ao alterar ".$E->getMessage();
}

?>