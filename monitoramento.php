<?php
class Oficina {
    public $nome;
    public $localizacao;
    public $capacidade_barril;

    function __construct($nome, $localizacao, $capacidade_barril) {
        $this->nome = $nome;
        $this->localizacao = $localizacao;
        $this->capacidade_barril = $capacidade_barril;
    }
}

// Simulação de dados recebidos dos sensores
$oficinas = [
    new Oficina("BH Motoracing", "Av. Professor Mario Werneck, 2925 - Belo Horizonte, MG, 30455-610, Telefone: (31) 2552-9002", 10),
    new Oficina("Moto Parts Express", "Dom João VI, 1883 - Belo Horizonte, MG, 30575-460, Telefone: (31) 97141-1391", 50),
    new Oficina("Moto Center BH", "Rua dos Goitacazes, 1872 - Barro Preto, Belo Horizonte, MG, 30190-050, Telefone: (31) 3271-1234", 80),
    new Oficina("Moto Service BH", "Rua Padre Eustáquio, 1000 - Padre Eustáquio, Belo Horizonte, MG, 30720-100, Telefone: (21) 9876-5432", 40),
    new Oficina("Moto BH", "Av. Silva Lobo, 1500 - Grajaú, Belo Horizonte, MG, 30460-000, Telefone: (31) 3344-5566", 70),
    new Oficina("Moto BH Center", "Rua Rio Grande do Sul, 700 - Santo Agostinho, Belo Horizonte, MG, 30170-000, Telefone: (31) 3232-1234", 85),
    new Oficina("Moto BH Oficina", "Av. do Contorno, 8000 - Funcionários, Belo Horizonte, MG, 30110-000, Telefone: (21) 9876-5432", 89)
];

function exibir_oficinas($oficinas) {
    $output = "";
    foreach ($oficinas as $oficina) {
        if ($oficina->capacidade_barril > 50) {
            $nome = htmlspecialchars($oficina->nome);
            $localizacao = htmlspecialchars($oficina->localizacao);
            $capacidade = htmlspecialchars($oficina->capacidade_barril);
            $output .= "<li onclick=\"redirectToPage('$nome')\">$nome - Endereço: $localizacao";
            $output .= "<div class='progress-bar'><div class='progress' style='width: $capacidade%;' data-capacidade='$capacidade'>$capacidade%</div></div>";
            $output .= "</li>";
        }
    }
    return $output;
}

$oficinas_html = exibir_oficinas($oficinas);
include 'monitorar.html';
?>
