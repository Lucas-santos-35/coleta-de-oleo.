<!-- agenda.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servico = $_POST['servico'];

    // Redireciona com base no tipo de serviço
    switch ($servico) {
        case 'reciclagem':
            header('Location: confirmacao.php');
            break;
        case 'descarte':
            header('Location: confirmacao.php');
            break;
        case 'estudo':
            header('Location: confirmacao.php');
            break;
        default:
            // Redireciona para uma página de erro ou página inicial
            header('Location: confirmacao.php');
            break;
    }
} else {
    // Redireciona para a página inicial se o formulário não foi enviado
    header('Location: confirmacao.php');
}
?>
