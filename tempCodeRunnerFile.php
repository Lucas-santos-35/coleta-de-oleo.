<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $servico = htmlspecialchars($_POST['servico']);
    $parceiros = htmlspecialchars($_POST['parceiros']);
    $data = htmlspecialchars($_POST['data']);
    $hora = htmlspecialchars($_POST['hora']);

    // Exibe os dados recebidos
    echo "<!DOCTYPE html>";
    echo "<html lang='pt-BR'>";
    echo "<head>";
    echo "<meta charset='UTF-8'>";
    echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
    echo "<title>Detalhes do Agendamento</title>";
    echo "<style>";
    echo "body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }";
    echo "h2 { color: #333; }";
    echo "p { background-color: #fff; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }";
    echo "button { display: block; width: 100%; padding: 10px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; transition: background-color 0.3s ease; }";
    echo "button:hover { background-color: #0056b3; }";
    echo "</style>";
    echo "</head>";
    echo "<body>";
    echo "<h2>Detalhes do Agendamento</h2>";
    echo "<p><strong>Tipo de Serviço:</strong> " . $servico . "</p>";
    echo "<p><strong>Parceiros:</strong> " . $parceiros . "</p>";
    echo "<p><strong>Data:</strong> " . $data . "</p>";
    echo "<p><strong>Hora:</strong> " . $hora . "</p>";
    echo '<button onclick="window.print()">Imprimir Agendamento</button>';
    echo '<form method="POST" action="enviar_email.php">';
    echo '<input type="hidden" name="servico" value="' . $servico . '">';
    echo '<input type="hidden" name="parceiros" value="' . $parceiros . '">';
    echo '<input type="hidden" name="data" value="' . $data . '">';
    echo '<input type="hidden" name="hora" value="' . $hora . '">';
    echo '<button type="submit">Enviar por Email</button>';
    echo '</form>';
    echo "</body>";
    echo "</html>";
} else {
    echo "Método de requisição inválido.";
}
?>