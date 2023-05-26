<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_forms";
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Inclua o arquivo obter_valores.php para obter os valores do formulário
    include '../includes/processa.php';

    // Prepara e executa a consulta para inserir os dados no banco de dados
    $stmt = $conn->prepare("INSERT INTO tabela_forms (nome, sobrenome, cpf, data_nascimento, rg, orgao_expedidor, uf, email, celular, sexo) VALUES (:nome, :sobrenome, :cpf, :dataNasc, :rg, :orgaoExpedidor, :uf, :email, :celular, :sexo)");
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':sobrenome', $sobrenome);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->bindParam(':dataNasc', $dataNasc);
    $stmt->bindParam(':rg', $rg);
    $stmt->bindParam(':orgaoExpedidor', $orgaoExpedidor);
    $stmt->bindParam(':uf', $uf);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':celular', $celular);
    $stmt->bindParam(':sexo', $sexo);
    $stmt->execute();

    echo "Dados salvos com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao salvar os dados: " . $e->getMessage();
}
