document.addEventListener('DOMContentLoaded', function() {
    // Dados simulados para demonstração
    const dadosColeta = [
        { nome: 'BH Motoracing', endereco: 'Av. Professor Mário Werneck, 2925 - Belo Horizonte, MG', dia: 'Segunda-feira' },
        { nome: 'Moto Parts Express', endereco: 'Dom João VI, 1883 - Belo Horizonte, MG', dia: 'Terça-feira' },
        { nome: 'Moto Center BH', endereco: 'Rua dos Goitacazes, 1872 - Barro Preto, Belo Horizonte, MG', dia: 'Quarta-feira' },
        { nome: 'Moto Service BH', endereco: 'Rua Padre Eustáquio, 1000 - Padre Eustáquio, Belo Horizonte, MG', dia: 'Quinta-feira' },
        { nome: 'Moto BH', endereco: 'Av. Silva Lobo, 1500 - Grajaú, Belo Horizonte, MG', dia: 'Sexta-feira' }
    ];

    const tabelaColeta = document.getElementById('tabela-coleta').getElementsByTagName('tbody')[0];

    dadosColeta.forEach(dado => {
        const novaLinha = tabelaColeta.insertRow();

        const celulaNome = novaLinha.insertCell(0);
        const celulaEndereco = novaLinha.insertCell(1);
        const celulaDia = novaLinha.insertCell(2);

        celulaNome.textContent = dado.nome;
        celulaEndereco.textContent = dado.endereco;
        celulaDia.textContent = dado.dia;
    });
});
