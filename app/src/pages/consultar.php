<?php
include('../../php/conexao.php');

$sql = "SELECT * FROM tb_aluno ORDER BY nome";

try {
  $resultado = $conn->query($sql);
} catch (PDOException $E) {
  echo "Erro ao consultar " . $E->getMessage();
}

$i = 1;

if (isset($_GET['cad'])) {
  echo "<script>alert('Dados cadastrados');</script>";
}
if (isset($_GET['con'])) {
  echo "<script>alert('Dados alterados');</script>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consultar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <?php include('../components/navbar02.php'); ?>
  <div class="container mt-5">
    <h1>Consultar Alunos</h1>
    <h5>Lista de alunos cadastrados:</h5>
    <table class="table table-striped">
      <tr>
        <th>Nº</th>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Matricula</th>
        <th>Estado</th>
        <th>Bairro</th>
        <th>Cidade</th>
        <th>Rua</th>
        <th>Número</th>
        <th>Ação</th>
      </tr>
      <?php foreach ($resultado as $valor) { ?>
        <tr>
          <td>
            <?= $i++; ?>
          </td>
          <td>
            <?= $valor['id'] ?>
          </td>
          <td>
            <?= $valor['nome'] ?>
          </td>
          <td>
            <?= $valor['cpf'] ?>
          </td>
          <td>
            <?= $valor['telefone'] ?>
          </td>
          <td>
            <?= $valor['matricula'] ?>
          </td>
          <td>
            <?= $valor['estado'] ?>
          </td>
          <td>
            <?= $valor['bairro'] ?>
          </td>
          <td>
            <?= $valor['cidade'] ?>
          </td>
          <td>
            <?= $valor['rua'] ?>
          </td>
          <td>
            <?= $valor['numero'] ?>
          </td>
          <td>
            <a class="btn btn-warning" href="alterar.php?id=<?= $valor['id'] ?>">Alterar</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
              data-bs-target="#exampleModal<?= $valor['id'] ?>">
              Deletar
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal<?= $valor['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja realmente deletar?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    Ao deletar, não será possível recuperar os dados do aluno <?= $valor['nome'] ?>. <br>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fechar</button>
                    <a class="btn btn-danger" href="php/deletar.php?id=<?= $valor['id'] ?>">Deletar</a>
                  </div>
                </div>
              </div>
            </div>
          </td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>