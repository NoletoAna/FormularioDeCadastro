<?php
include('php/conexao.php');
?>
<?php
include('php/conexao.php');

if (!isset($_GET['nome'])) {
    header("location: ../index.php");
    exit;
}

$nome = "%" . trim($_GET['nome']) . "%";
$sql = "SELECT * FROM tb_aluno WHERE nome LIKE :nome";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

print ($result)
    ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include('../components/navbar02.php'); ?> 
    <div class="container mt-5">
        <h1>Faça sua Busca</h1>
        <h5>Digite o Nome do Aluno Procurado: </h5>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

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
            <tr>
                <?php
                if (count($result)) {
                    foreach ($result as $valor) {
                        ?>
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
                        <?php
                    }
                } else {
                    echo "<tr><td colspan='12'>Nenhum resultado encontrado</td></tr>";
                }
                ?>
                <td>
                    <a class="btn btn-warning" href="alterar.php?id=<?= $valor['id'] ?>">Alterar</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#exampleModal<?= $valor['id'] ?>">
                        Deletar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?= $valor['id'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Deseja realmente deletar?</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Ao deletar, não será possível recuperar os dados do aluno <?= $valor['nome'] ?>.
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary"
                                        data-bs-dismiss="modal">Fechar</button>
                                    <a class="btn btn-danger" href="php/deletar.php?id=<?= $valor['id'] ?>">Deletar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
</body>

</html>