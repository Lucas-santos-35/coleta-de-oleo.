<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Pessoais</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d3d3d3;
            /* Cor de fundo cinza */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 400px;
            /* Diminuí o tamanho máximo do container */
            background-color: rgba(255, 255, 255, 0.9);
            /* Fundo branco com transparência */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: left;
            /* Alinhamento à esquerda para um visual mais harmonioso */
        }

        h2 {
            text-align: center;
            /* Centraliza o título */
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="tel"],
        input[type="email"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        fieldset {
            border: none;
            padding: 0;
        }

        legend {
            font-size: 1.2em;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Dados Pessoais</h2>
        <form action="processa.php" method="post">
            <fieldset>
                <legend>Dados Pessoais</legend>
                <label for="nome">Nome completo:</label>
                <input type="text" id="nome" name="nome" required>
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" required>
                <label for="bairro">Bairro:</label>
                <input type="text" id="bairro" name="bairro" required>
                <label for="cep">CEP:</label>
                <input type="text" id="cep" name="cep" required>
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone" required>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </fieldset>
            <input type="submit" value="Enviar">
            <p><a href="index.html"></a></p>
        </form>
    </div>
</body>

</html>