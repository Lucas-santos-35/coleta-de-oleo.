<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servico = htmlspecialchars($_POST['servico']);
    $parceiros = htmlspecialchars($_POST['parceiros']);
    $data = htmlspecialchars($_POST['data']);
    $hora = htmlspecialchars($_POST['hora']);

    $to = "oficina@example.com"; // Substitua pelo email da oficina
    $subject = "Novo Agendamento";
    $message = "
    <html>
    <head>
    <title>Detalhes do Agendamento</title>
    </head>
    <body>
    <h2>Detalhes do Agendamento</h2>
    <p><strong>Tipo de Serviço:</strong> $servico</p>
    <p><strong>Parceiros:</strong> $parceiros</p>
    <p><strong>Data:</strong> $data</p>
    <p><strong>Hora:</strong> $hora</p>
    </body>
    </html>
    ";

    // Para enviar email em formato HTML
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Cabeçalhos adicionais
    $headers .= 'From: <ldsantostj34@gmail.com>' . "\r\n"; // Substitua pelo seu email

    if (mail($to, $subject, $message, $headers)) {
        echo "Email enviado com sucesso!";
    } else {
        echo "Falha ao enviar o email.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
