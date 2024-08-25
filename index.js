// Aguarda o DOM estar completamente carregado
document.addEventListener('DOMContentLoaded', function() {
    // Seleciona o botão pelo ID
    const button = document.getElementById('myButton');
    const output = document.getElementById('output');

    // Adiciona um listener de evento ao botão
    button.addEventListener('click', function() {
        // Atualiza o texto do parágrafo quando o botão for clicado
        output.textContent = 'Você clicou no botão!';
    });
});
