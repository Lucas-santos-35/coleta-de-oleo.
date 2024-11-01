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

// Prepara e vincula
$stmt = $conn->prepare("INSERT INTO dados_pessoais (nome, endereco, bairro, cep, telefone, email, senha) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nome, $endereco, $bairro, $cep, $telefone, $email, $senha);

// Define os parâmetros e executa
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$stmt->execute();

$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Cadastrados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .message {
            background-color: #fffblu;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .message h2 {
            color: #28a745;
            /* Cor verde para sucesso */
        }

        .message p {
            color: #555;
        }
    </style>
    <script>
        setTimeout(function () {
            window.location.href = 'index.html'; // Substitua pelo caminho da sua página de login
        }, 6000); // Redireciona após 3 segundos
    </script>
</head>

<body>
    <div class="message">
        <h2>Cadastro realizado com sucesso!</h2>
        <p>Obrigado por se cadastrar. Você será redirecionado para a tela de login em breve.</p>
    </div>
</body>

</html>