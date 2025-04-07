<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav id="navegacao" class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Cadastrar Alunos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultar.php">Consultar Alunos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Seja Bem-Vindo(a)!</h1>
        <h2>Cadastre-se:</h2>
        <form action="php/inserir.php" method="get">
            <input class="form-control" name="nome" type="text" placeholder="Nome:">
            <input class="form-control mt-3" name="cpf" type="text" placeholder="CPF:">
            <input class="form-control mt-3" name="matricula" type="text" placeholder="Matrícula:">
            <input class="form-control mt-3" name="telefone" type="text" placeholder="Telefone:">
            <select id="estados" class="form-select mt-3" aria-label="Default select example">
                <option value="">Selecione um estado</option>
            </select>
            <input class="form-control mt-3" name="cidade" type="text" placeholder="Cidade:">
            <input class="form-control mt-3" name="bairro" type="text" placeholder="Bairro:">
            <input class="form-control mt-3" name="rua" type="text" placeholder="Rua:">
            <input class="form-control mt-3" name="numero" type="text" placeholder="Número:">

            <input id="botao" class="btn btn-success mt-3" type="submit" value="Enviar">

            <script>
                const estados = [
                    { sigla: "AC", nome: "Acre" },
                    { sigla: "AL", nome: "Alagoas" },
                    { sigla: "AP", nome: "Amapá" },
                    { sigla: "AM", nome: "Amazonas" },
                    { sigla: "BA", nome: "Bahia" },
                    { sigla: "CE", nome: "Ceará" },
                    { sigla: "DF", nome: "Distrito Federal" },
                    { sigla: "ES", nome: "Espírito Santo" },
                    { sigla: "GO", nome: "Goiás" },
                    { sigla: "MA", nome: "Maranhão" },
                    { sigla: "MT", nome: "Mato Grosso" },
                    { sigla: "MS", nome: "Mato Grosso do Sul" },
                    { sigla: "MG", nome: "Minas Gerais" },
                    { sigla: "PA", nome: "Pará" },
                    { sigla: "PB", nome: "Paraíba" },
                    { sigla: "PR", nome: "Paraná" },
                    { sigla: "PE", nome: "Pernambuco" },
                    { sigla: "PI", nome: "Piauí" },
                    { sigla: "RJ", nome: "Rio de Janeiro" },
                    { sigla: "RN", nome: "Rio Grande do Norte" },
                    { sigla: "RS", nome: "Rio Grande do Sul" },
                    { sigla: "RO", nome: "Rondônia" },
                    { sigla: "RR", nome: "Roraima" },
                    { sigla: "SC", nome: "Santa Catarina" },
                    { sigla: "SP", nome: "São Paulo" },
                    { sigla: "SE", nome: "Sergipe" },
                    { sigla: "TO", nome: "Tocantins" }
                ];

                const selectEstados = document.getElementById("estados");

                estados.forEach(estado => {
                    const option = document.createElement("option");
                    option.value = estado.sigla;
                    option.textContent = estado.nome;
                    selectEstados.appendChild(option);
                });
            </script>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>