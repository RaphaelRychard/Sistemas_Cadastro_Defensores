<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Dados Pessoais</title>
</head>

<body>
    <h2>Formulário de Dados Pessoais</h2>
    <form method="POST" action="processa.php">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" required><br>

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="sobrenome">Sobrenome:</label>
        <input type="text" name="sobrenome" required><br>

        <label for="data_nasc">Data de Nascimento:</label>
        <input type="date" name="data_nasc" required><br>

        <label for="rg">RG:</label>
        <input type="text" name="rg" required><br>

        <label for="data_exp">Data de Expedição do RG:</label>
        <input type="date" name="data_exp" required><br>

        <label for="rg_org_exp">Órgão Expedidor do RG:</label>
        <input type="text" name="rg_org_exp" required><br>

        <label for="rg_uf">UF do RG:</label>
        <input type="text" name="rg_uf" required><br>

        <label for="email">E-mail:</label>
        <input type="email" name="email" required><br>

        <label for="celular">Celular:</label>
        <input type="text" name="celular" required><br>

        <label for="sexo">Sexo:</label>
        <select name="sexo" required>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select><br>

        <input type="submit" value="Enviar">
    </form>

</body>

</html>