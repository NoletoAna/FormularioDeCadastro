<!-- Cabeçalho: estrutura básica de uma página web -->
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <!-- Link que faz ligação do arquivo "index.html" com a folha de estilo "style.css" -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Uma divisão onde as informações do site estão localizadas. Recebe o ID "container", que é usado no arquivo "style.css" para a estilização-->
    <div id="container">
        <!-- Tag de Título de peso 1 -->
        <h1>Seja Bem-Vindo(a)!</h1>
        <!-- Tag de Título de peso 2 -->
        <h2>Cadastre-se:</h2>
        <!-- Tag de Formulário de método Post, ou seja, as informações não são enviadas pela URL pois suporta um tamanho maior de informalçoes. O action receberia o nome do arquivo para o qual as informações inseridas pelo usuário no formulário iria.  -->
        <form action="php/inserir.php" method="get">
            <!-- a tag input indica um espaço no qual o usuário consegue inserir informações. Nesse caso, todos eles recebem informações do tipo texto, o atributo "name" nomeia cada informação que será inserida no formulário e será usado futuramente no envio delas para o banco de dados. O atributo "placeholder" refere-se ao texto localizado dentro de cada input-->
            <input name="nome" type="text" placeholder="Nome:">
            <input name="cpf" type="text" placeholder="CPF:">
            <input name="matricula" type="text" placeholder="Matrícula:">
            <input name="telefone" type="text" placeholder="Telefone:">
            <!-- <input name="estado" type="text" placeholder="Estado:"> -->
            <select id="estados" class="form-select" aria-label="Default select example">
                <option value="">Selecione um estado</option>
            </select>
            <input name="cidade" type="text" placeholder="Cidade:">
            <input name="bairro" type="text" placeholder="Bairro:">
            <input name="rua" type="text" placeholder="Rua:">
            <input name="numero" type="text" placeholder="Número:">

            <!-- Esse input funciona como um botão "type='submit'". Ele será responsável por validar o envio das informações do formulário para o banco de dados. O atributo "value" recebe o que ficará escrito dentro do input-->
            <input id="botao" type="submit" value="Enviar">

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
</body>

</html>