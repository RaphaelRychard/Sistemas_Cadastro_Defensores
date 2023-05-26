<?php
// Dados de conexão com o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "db_forms";
$port = 3306;

// Conexão com o banco de dados
$conn = new mysqli($host, $user, $pass, $dbname, $port);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se os dados foram enviados via método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extrai os dados do formulário
    $cpf = $_POST["cpf"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $data_nasc = $_POST["data_nasc"];
    $rg = $_POST["rg"];
    $data_exp = $_POST["data_exp"];
    $rg_org_exp = $_POST["rg_org_exp"];
    $rg_uf = $_POST["rg_uf"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $sexo = $_POST["sexo"];

    // Prepara e executa a consulta SQL para inserir os dados
    $sql = "INSERT INTO dados_pessoais (cpf, nome, sobrenome, data_nasc, rg, data_exp, rg_org_exp, rg_uf, email, celular, sexo) VALUES ('$cpf', '$nome', '$sobrenome', STR_TO_DATE('$data_nasc', '%Y-%m-%d'), '$rg', STR_TO_DATE('$data_exp', '%Y-%m-%d'), '$rg_org_exp', '$rg_uf', '$email', '$celular', '$sexo')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
}

$consulta = $conexao->prepare("SELECT * FROM dados_novos");
$consulta->execute();
$dadosT = $consulta->fetchAll(PDO::FETCH_ASSOC);
var_dump($dadosT);
