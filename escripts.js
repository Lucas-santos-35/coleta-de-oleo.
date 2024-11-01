document.addEventListener("DOMContentLoaded", function () {
  fetch("monitorar.html")
    .then((response) => response.text())
    .then((data) => {
      const parser = new DOMParser();
      const doc = parser.parseFromString(data, "text/html");
      const dadosColeta = doc.querySelectorAll("#oficina-lista li");
      const tabelaColeta = document.querySelector("#tabela-coleta tbody");

      dadosColeta.forEach((oficina) => {
        const nome = oficina.childNodes[0].textContent.split(" - ")[0];
        const endereco = oficina.childNodes[0].textContent.split(" - ")[1];
        const dia = "A definir"; // Você pode definir a lógica para o dia da coleta aqui

        const row = document.createElement("tr");
        row.innerHTML = `
                    <td>${nome}</td>
                    <td>${endereco}</td>
                    <td>${dia}</td>
                `;
        tabelaColeta.appendChild(row);
      });
    })
    .catch((error) => console.error("Erro ao carregar os dados:", error));
});
