function selecionarOficina(element) {
    // Função para selecionar a oficina
    alert(`Oficina selecionada: ${element.textContent}`);
}

document.addEventListener('DOMContentLoaded', function() {
    const progressBars = document.querySelectorAll('.progress');

    progressBars.forEach(bar => {
        const capacidade = bar.getAttribute('data-capacidade');
        bar.style.width = `${capacidade}%`;
        if (capacidade < 50) {
            bar.style.backgroundColor = '#4caf50'; // Verde
        } else if (capacidade < 75) {
            bar.style.backgroundColor = '#ffeb3b'; // Amarelo
        } else {
            bar.style.backgroundColor = '#f44336'; // Vermelho
        }
    });
});
