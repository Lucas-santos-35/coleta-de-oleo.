<?php
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

// Recebe os dados do formulário de login
$email = $_POST['nome'];
$senha = $_POST['senha'];

// Prepara e executa a consulta
$stmt = $conn->prepare("SELECT senha FROM dados_pessoais WHERE nome = ?");
$stmt->bind_param("s", $nome);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($senha_hash);
$stmt->fetch();

if ($stmt->num_rows > 0) {
    // Verifica se a senha está correta
    if (password_verify($senha, $senha_hash)) {
        echo "Login realizado com sucesso!";
        // Redireciona para a página principal ou dashboard
        header("Location: dashboard.html");
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "nome não encontrado.";
}

$stmt->close();
$conn->close();
?>
