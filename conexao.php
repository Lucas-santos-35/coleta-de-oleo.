<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'usuarios';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
    die('Erro ao conectar ao banco de dados: ' . mysqli_connect_error());
}
?>
 <?php
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$bairro = $_POST['bairro'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

// Agora você pode inserir esses dados no banco de dados ou realizar outras operações.
?>
