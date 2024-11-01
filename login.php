<?php
session_start();

$servername = "localhost";
$username = "root"; // Substitua pelo seu nome de usuário
$password = ""; // Substitua pela sua senha
$dbname = "meu_banco_de_dados"; // Substitua pelo nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$senha = $_POST['senha'];

// Verifica se o usuário existe no banco de dados
$sql = "SELECT * FROM dados_pessoais WHERE nome = ? AND senha = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $nome, $senha);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $_SESSION['loggedin'] = true;
    header("Location: oficinas.html");
} else {
    echo "Nome ou senha incorretos.";
}

$stmt->close();
$conn->close();
?>
