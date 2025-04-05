<form class="mt-3" action="php/inserir.php" method="get">
    <input class="mb-3 form-control" name="nome" type="text" placeholder="Nome:">
    <input class="mb-3 form-control" name="cpf" type="text" placeholder="CPF:">
    <input class="mb-3 form-control" name="matricula" type="text" placeholder="Matrícula:">
    <input class="mb-3 form-control" name="telefone" type="text" placeholder="Telefone:">
    <select id="estados" class="mb-3 form-select" aria-label="Default select example">
        <option value="">Selecione um estado</option>
    </select>
    <input class="mb-3 form-control" name="cidade" type="text" placeholder="Cidade:">
    <input class="mb-3 form-control" name="bairro" type="text" placeholder="Bairro:">
    <input class="mb-3 form-control" name="rua" type="text" placeholder="Rua:">
    <input class="mb-3 form-control" name="numero" type="text" placeholder="Número:">
    <input class="btn btn-success" id="botao" type="submit" value="Enviar">
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